<?php

require_once('tests/parser.php');
/**
 * Class AutoloaderTest
 */
class HandlebarsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test handlebars autoloader
     *
     * @return void
     */
    public function testAutoLoad()
    {
        Handlebars\Autoloader::register(realpath(__DIR__ . '/../fixture/'));

        $this->assertTrue(class_exists('Handlebars\\Test'));
        $this->assertTrue(class_exists('Handlebars\\Example\\Test'));
    }

    /**
     * Test basic tags
     *
     * @param string $src    handlebars source
     * @param array  $data   data
     * @param string $result expected data
     *
     * @dataProvider simpleTagdataProvider
     *
     * @return void
     */
    public function testBasicTags($src, $data, $result)
    {
        $loader = new \Handlebars\Loader\StringLoader();
        $engine = new \Handlebars\Handlebars(array('loader' => $loader));
        $this->assertEquals($result, $engine->render($src, $data));
    }

    /**
     * Simple tag provider
     *
     * @return array
     */
    public function simpleTagdataProvider()
    {
        return array(
            array(
                '{{! This is comment}}',
                array(),
                ''
            ),
            array(
                '{{data}}',
                array('data' => 'result'),
                'result'
            ),
            array(
                '{{data.key}}',
                array('data' => array('key' => 'result')),
                'result'
            ),
        );
    }


    /**
     * Test helpers (internal helpers)
     *
     * @param string $src    handlebars source
     * @param array  $data   data
     * @param string $result expected data
     *
     * @dataProvider internalHelpersdataProvider
     *
     * @return void
     */
    public function testSimpleHelpers($src, $data, $result)
    {
        $loader = new \Handlebars\Loader\StringLoader();
        $helpers = new \Handlebars\Helpers();
        $engine = new \Handlebars\Handlebars(array('loader' => $loader, 'helpers' => $helpers));

        $this->assertEquals($result, $engine->render($src, $data));
    }

    /**
     * Simple helpers provider
     *
     * @return array
     */
    public function internalHelpersdataProvider()
    {
        return array(
            array(
                '{{#if data}}Yes{{/if}}',
                array('data' => true),
                'Yes'
            ),
            array(
                '{{#if data}}Yes{{/if}}',
                array('data' => false),
                ''
            ),
            array(
                '{{#with data}}{{key}}{{/with}}',
                array('data' => array('key' => 'result')),
                'result'
            ),
            array(
                '{{#each data}}{{this}}{{/each}}',
                array('data' => array(1, 2, 3, 4)),
                '1234'
            ),
            array(
                '{{#each data}}{{this}}{{/each}}',
                array('data' => new ArrayObject(array(1, 2, 3, 4))),
                '1234'
            ),
            array(
                '{{#unless data}}ok{{/unless}}',
                array('data' => true),
                ''
            ),
            array(
                '{{#unless data}}ok{{/unless}}',
                array('data' => false),
                'ok'
            )

        );
    }

    /**
     * Management helpers
     */
    public function testHelpersManagement()
    {
        $helpers = new \Handlebars\Helpers(array('test' => function () {
        }), false);
        $engine = new \Handlebars\Handlebars(array('helpers' => $helpers));
        $this->assertTrue(is_callable($engine->getHelper('test')));
        $this->assertTrue($engine->hasHelper('test'));
        $engine->removeHelper('test');
        $this->assertFalse($engine->hasHelper('test'));
    }

    /**
     * Custom helper test
     */
    public function testCustomHelper()
    {
        $loader = new \Handlebars\Loader\StringLoader();
        $engine = new \Handlebars\Handlebars(array('loader' => $loader));
        $engine->addHelper('test', function ($template, $context, $args, $source) {
            return 'Test helper is called with "' . $source . '"';
        });
        $this->assertEquals('Test helper is called with ""', $engine->render('{{#test}}', array()));
        $this->assertEquals('Test helper is called with ""', $engine->render('{{test}}', array()));
        $this->assertEquals('Test helper is called with "foo"', $engine->render('{{#test}}foo{{/test}}', array()));
        $this->assertEquals('Test helper is called with "foo"', $engine->render('{{test}}foo{{/test}}', array()));
    }

    /**
     * Both block helpers and inline helpers can take multiple arguments
     */
    public function testHelperMultipleArgs()
    {
        $loader = new \Handlebars\Loader\StringLoader();
        $engine = new \Handlebars\Handlebars(array('loader' => $loader));
        $engine->addHelper('test', function ($template, $context, $args, $source) {
            return 'Params: ' . $args;
        });
        $this->assertEquals('Params: item foo=bar "literal"', $engine->render('{{#test item foo=bar "literal"}}', array('item' => 'value')));
        $this->assertEquals('Params: item foo=bar "literal"', $engine->render('{{test item foo=bar "literal"}}', array('item' => 'value')));
    }

    /**
     * @param $dir
     *
     * @return bool
     */
    private function delTree($dir)
    {
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? $this->delTree("$dir/$file") : unlink("$dir/$file");
        }

        return rmdir($dir);
    }

    /**
     * Its not a good test :) but ok
     */
    public function testCacheSystem()
    {
        $path = sys_get_temp_dir() . '/__cache__handlebars';

        @$this->delTree($path);

        $dummy = new \Handlebars\Cache\Disk($path);
        $engine = new \Handlebars\Handlebars(array('cache' => $dummy));
        $this->assertEquals(0, count(glob($path . '/*')));
        $engine->render('test', array());
        $this->assertEquals(1, count(glob($path . '/*')));
    }

    /**
     * Test file system loader
     */
    public function testFileSystemLoader()
    {
        $loader = new \Handlebars\Loader\FilesystemLoader(realpath(__DIR__ . '/../fixture/data'));
        $engine = new \Handlebars\Handlebars();
        $engine->setLoader($loader);
        $this->assertEquals('test', $engine->render('loader', array()));
    }

    /**
     * Test partial loader
     */
    public function testPartialLoader()
    {
        $loader = new \Handlebars\Loader\StringLoader();
        $partialLoader = new \Handlebars\Loader\FilesystemLoader(realpath(__DIR__ . '/../fixture/data'));
        $engine = new \Handlebars\Handlebars();
        $engine->setLoader($loader);
        $engine->setPartialsLoader($partialLoader);

        $this->assertEquals('test', $engine->render('{{>loader}}', array()));
    }

    /**
     * test variable access
     */
    public function testVariableAccess()
    {
        $loader = new \Handlebars\Loader\StringLoader();
        $engine = \Handlebars\Handlebars::factory();
        $engine->setLoader($loader);

        $var = new \StdClass();
        $var->x = 'var-x';
        $var->y = array(
            'z' => 'var-y-z'
        );
        $this->assertEquals('test', $engine->render('{{var}}', array('var' => 'test')));
        $this->assertEquals('var-x', $engine->render('{{var.x}}', array('var' => $var)));
        $this->assertEquals('var-y-z', $engine->render('{{var.y.z}}', array('var' => $var)));
        // Access parent context in with helper
        $this->assertEquals('var-x', $engine->render('{{#with var.y}}{{../var.x}}{{/with}}', array('var' => $var)));

        $obj = new DateTime();
        $time = $obj->getTimestamp();
        $this->assertEquals($time, $engine->render('{{time.getTimestamp}}', array('time' => $obj)));

    }

    /**
     * Tokenizer Tests
     * @dataProvider simpleTagdataProvider
     */
    public function _testTokenizer($src, $data, $result)
    {
        $tokenizer = new \Handlebars\Tokenizer();

        $src = 
        $tokens = $tokenizer->scan($src);
        echo "Input: $src\n";
        print_r($tokens);
    }

    public function testTokenizer()
    {
        $tokenizer = new \Handlebars\Tokenizer();

        $src = "{{foo}} \\{{bar}} \\{{baz}}";
        $src = "{{foo}}";
        $tokens = $tokenizer->scan($src);
        echo "Input: $src\n";
        print_r($tokens);
    }






    public function testSimpleMustache()
    {
        $tokens = $this->tokenize('{{foo}}');
        $this->assertTokenNames(array('OPEN', 'ID', 'CLOSE'), $tokens);
        $this->assertTokenIs('ID', 'foo', $tokens[1]);
    }

    public function testSupportsUnescapingWithAmpersand()
    {
        $tokens = $this->tokenize('{{&bar}}');
        $this->assertTokenNames(array('OPEN', 'ID', 'CLOSE'), $tokens);
        $this->assertTokenIs('OPEN', '{{&', $tokens[0]);
        $this->assertTokenIs('ID', 'bar', $tokens[1]);
    }


    public function testSupportsUnescaping3Stache()
    {
        $tokens = $this->tokenize('{{{bar}}}');
        $this->assertTokenNames(array('OPEN_UNESCAPED', 'ID', 'CLOSE_UNESCAPED'), $tokens);
        $this->assertTokenIs('ID', 'bar', $tokens[1]);
    }


    public function testTokenizeHashArguments()
    {
        $result = $this->tokenize("{{ foo bar=baz }}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'EQUALS', 'ID', 'CLOSE'), $result);

        $result = $this->tokenize("{{ foo bar baz=bat }}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'ID', 'EQUALS', 'ID', 'CLOSE'), $result);

        $result = $this->tokenize("{{ foo bar baz=1 }}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'ID', 'EQUALS', 'INTEGER', 'CLOSE'), $result);

        $result = $this->tokenize("{{ foo bar baz=true }}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'ID', 'EQUALS', 'BOOLEAN', 'CLOSE'), $result);

        $result = $this->tokenize("{{ foo bar baz=false }}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'ID', 'EQUALS', 'BOOLEAN', 'CLOSE'), $result);

        $result = $this->tokenize("{{ foo bar\n  baz=bat }}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'ID', 'EQUALS', 'ID', 'CLOSE'), $result);

        $result = $this->tokenize("{{ foo bar baz=\"bat\" }}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'ID', 'EQUALS', 'STRING', 'CLOSE'), $result);

        $result = $this->tokenize("{{ foo bar baz=\"bat\" bam=wot }}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'ID', 'EQUALS', 'STRING', 'ID', 'EQUALS', 'ID', 'CLOSE'), $result);

        $result = $this->tokenize("{{foo omg bar=baz bat=\"bam\"}}");
        $this->assertTokenNames(array('OPEN', 'ID', 'ID', 'ID', 'EQUALS', 'ID', 'ID', 'EQUALS', 'STRING', 'CLOSE'), $result);
        $this->assertTokenIs('ID', 'omg', $result[2]);
    }












    protected function tokenize($src)
    {
        $tokenizer = new \Jison\handlebars();
        $tokenizer->setInput($src);
        $tokens = array();
        
        while($token = $tokenizer->parserLex()) {
            if (!$token || $token->name == 'EOF' || $token->name == 'INVALID') {
                break;
            }
            $tokens[] = array('name' => $token->name, 'text' => $tokenizer->yy->text);
        }
        return $tokens;
    }

    protected function assertTokenNames($expect, $tokens)
    {
        $names = array_map(function($t) { return $t['name']; }, $tokens);
        self::assertEquals($expect, $names);
    }

    protected function assertTokenIs($name, $text, $token)
    {
        self::assertEquals($name, $token['name'], "Token name mismatch");
        self::assertEquals($text, $token['text'], "Token text mismatch");
    }

}