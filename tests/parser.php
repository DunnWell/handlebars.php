<?php
/* Jison generated parser */
namespace Jison;
use Exception;




class handlebars
{
    protected $symbols = array();
    protected $terminals = array();
    protected $productions = array();
    protected $table = array();
    protected $defaultActions = array();
    protected $version = '0.3.12';
    protected $debug = false;
    protected $none = 0;
    protected $shift = 1;
    protected $reduce = 2;
    protected $accept = 3;

    function trace()
    {

    }

    function __construct()
    {
        //Setup Parser
        
			$symbol0 = new ParserSymbol("accept", 0);
			$symbol1 = new ParserSymbol("end", 1);
			$symbol2 = new ParserSymbol("error", 2);
			$symbol3 = new ParserSymbol("root", 3);
			$symbol4 = new ParserSymbol("statements", 4);
			$symbol5 = new ParserSymbol("EOF", 5);
			$symbol6 = new ParserSymbol("program", 6);
			$symbol7 = new ParserSymbol("simpleInverse", 7);
			$symbol8 = new ParserSymbol("statement", 8);
			$symbol9 = new ParserSymbol("openInverse", 9);
			$symbol10 = new ParserSymbol("closeBlock", 10);
			$symbol11 = new ParserSymbol("openBlock", 11);
			$symbol12 = new ParserSymbol("mustache", 12);
			$symbol13 = new ParserSymbol("partial", 13);
			$symbol14 = new ParserSymbol("CONTENT", 14);
			$symbol15 = new ParserSymbol("COMMENT", 15);
			$symbol16 = new ParserSymbol("OPEN_BLOCK", 16);
			$symbol17 = new ParserSymbol("inMustache", 17);
			$symbol18 = new ParserSymbol("CLOSE", 18);
			$symbol19 = new ParserSymbol("OPEN_INVERSE", 19);
			$symbol20 = new ParserSymbol("OPEN_ENDBLOCK", 20);
			$symbol21 = new ParserSymbol("path", 21);
			$symbol22 = new ParserSymbol("OPEN", 22);
			$symbol23 = new ParserSymbol("OPEN_UNESCAPED", 23);
			$symbol24 = new ParserSymbol("CLOSE_UNESCAPED", 24);
			$symbol25 = new ParserSymbol("OPEN_PARTIAL", 25);
			$symbol26 = new ParserSymbol("partialName", 26);
			$symbol27 = new ParserSymbol("partial_option0", 27);
			$symbol28 = new ParserSymbol("inMustache_repetition0", 28);
			$symbol29 = new ParserSymbol("inMustache_option0", 29);
			$symbol30 = new ParserSymbol("dataName", 30);
			$symbol31 = new ParserSymbol("param", 31);
			$symbol32 = new ParserSymbol("STRING", 32);
			$symbol33 = new ParserSymbol("INTEGER", 33);
			$symbol34 = new ParserSymbol("BOOLEAN", 34);
			$symbol35 = new ParserSymbol("hash", 35);
			$symbol36 = new ParserSymbol("hash_repetition_plus0", 36);
			$symbol37 = new ParserSymbol("hashSegment", 37);
			$symbol38 = new ParserSymbol("ID", 38);
			$symbol39 = new ParserSymbol("EQUALS", 39);
			$symbol40 = new ParserSymbol("DATA", 40);
			$symbol41 = new ParserSymbol("pathSegments", 41);
			$symbol42 = new ParserSymbol("SEP", 42);
			$this->symbols[0] = $symbol0;
			$this->symbols["accept"] = $symbol0;
			$this->symbols[1] = $symbol1;
			$this->symbols["end"] = $symbol1;
			$this->symbols[2] = $symbol2;
			$this->symbols["error"] = $symbol2;
			$this->symbols[3] = $symbol3;
			$this->symbols["root"] = $symbol3;
			$this->symbols[4] = $symbol4;
			$this->symbols["statements"] = $symbol4;
			$this->symbols[5] = $symbol5;
			$this->symbols["EOF"] = $symbol5;
			$this->symbols[6] = $symbol6;
			$this->symbols["program"] = $symbol6;
			$this->symbols[7] = $symbol7;
			$this->symbols["simpleInverse"] = $symbol7;
			$this->symbols[8] = $symbol8;
			$this->symbols["statement"] = $symbol8;
			$this->symbols[9] = $symbol9;
			$this->symbols["openInverse"] = $symbol9;
			$this->symbols[10] = $symbol10;
			$this->symbols["closeBlock"] = $symbol10;
			$this->symbols[11] = $symbol11;
			$this->symbols["openBlock"] = $symbol11;
			$this->symbols[12] = $symbol12;
			$this->symbols["mustache"] = $symbol12;
			$this->symbols[13] = $symbol13;
			$this->symbols["partial"] = $symbol13;
			$this->symbols[14] = $symbol14;
			$this->symbols["CONTENT"] = $symbol14;
			$this->symbols[15] = $symbol15;
			$this->symbols["COMMENT"] = $symbol15;
			$this->symbols[16] = $symbol16;
			$this->symbols["OPEN_BLOCK"] = $symbol16;
			$this->symbols[17] = $symbol17;
			$this->symbols["inMustache"] = $symbol17;
			$this->symbols[18] = $symbol18;
			$this->symbols["CLOSE"] = $symbol18;
			$this->symbols[19] = $symbol19;
			$this->symbols["OPEN_INVERSE"] = $symbol19;
			$this->symbols[20] = $symbol20;
			$this->symbols["OPEN_ENDBLOCK"] = $symbol20;
			$this->symbols[21] = $symbol21;
			$this->symbols["path"] = $symbol21;
			$this->symbols[22] = $symbol22;
			$this->symbols["OPEN"] = $symbol22;
			$this->symbols[23] = $symbol23;
			$this->symbols["OPEN_UNESCAPED"] = $symbol23;
			$this->symbols[24] = $symbol24;
			$this->symbols["CLOSE_UNESCAPED"] = $symbol24;
			$this->symbols[25] = $symbol25;
			$this->symbols["OPEN_PARTIAL"] = $symbol25;
			$this->symbols[26] = $symbol26;
			$this->symbols["partialName"] = $symbol26;
			$this->symbols[27] = $symbol27;
			$this->symbols["partial_option0"] = $symbol27;
			$this->symbols[28] = $symbol28;
			$this->symbols["inMustache_repetition0"] = $symbol28;
			$this->symbols[29] = $symbol29;
			$this->symbols["inMustache_option0"] = $symbol29;
			$this->symbols[30] = $symbol30;
			$this->symbols["dataName"] = $symbol30;
			$this->symbols[31] = $symbol31;
			$this->symbols["param"] = $symbol31;
			$this->symbols[32] = $symbol32;
			$this->symbols["STRING"] = $symbol32;
			$this->symbols[33] = $symbol33;
			$this->symbols["INTEGER"] = $symbol33;
			$this->symbols[34] = $symbol34;
			$this->symbols["BOOLEAN"] = $symbol34;
			$this->symbols[35] = $symbol35;
			$this->symbols["hash"] = $symbol35;
			$this->symbols[36] = $symbol36;
			$this->symbols["hash_repetition_plus0"] = $symbol36;
			$this->symbols[37] = $symbol37;
			$this->symbols["hashSegment"] = $symbol37;
			$this->symbols[38] = $symbol38;
			$this->symbols["ID"] = $symbol38;
			$this->symbols[39] = $symbol39;
			$this->symbols["EQUALS"] = $symbol39;
			$this->symbols[40] = $symbol40;
			$this->symbols["DATA"] = $symbol40;
			$this->symbols[41] = $symbol41;
			$this->symbols["pathSegments"] = $symbol41;
			$this->symbols[42] = $symbol42;
			$this->symbols["SEP"] = $symbol42;

			$this->terminals = array(
					2=>&$symbol2,
					5=>&$symbol5,
					14=>&$symbol14,
					15=>&$symbol15,
					16=>&$symbol16,
					18=>&$symbol18,
					19=>&$symbol19,
					20=>&$symbol20,
					22=>&$symbol22,
					23=>&$symbol23,
					24=>&$symbol24,
					25=>&$symbol25,
					32=>&$symbol32,
					33=>&$symbol33,
					34=>&$symbol34,
					38=>&$symbol38,
					39=>&$symbol39,
					40=>&$symbol40,
					42=>&$symbol42
				);

			$table0 = new ParserState(0);
			$table1 = new ParserState(1);
			$table2 = new ParserState(2);
			$table3 = new ParserState(3);
			$table4 = new ParserState(4);
			$table5 = new ParserState(5);
			$table6 = new ParserState(6);
			$table7 = new ParserState(7);
			$table8 = new ParserState(8);
			$table9 = new ParserState(9);
			$table10 = new ParserState(10);
			$table11 = new ParserState(11);
			$table12 = new ParserState(12);
			$table13 = new ParserState(13);
			$table14 = new ParserState(14);
			$table15 = new ParserState(15);
			$table16 = new ParserState(16);
			$table17 = new ParserState(17);
			$table18 = new ParserState(18);
			$table19 = new ParserState(19);
			$table20 = new ParserState(20);
			$table21 = new ParserState(21);
			$table22 = new ParserState(22);
			$table23 = new ParserState(23);
			$table24 = new ParserState(24);
			$table25 = new ParserState(25);
			$table26 = new ParserState(26);
			$table27 = new ParserState(27);
			$table28 = new ParserState(28);
			$table29 = new ParserState(29);
			$table30 = new ParserState(30);
			$table31 = new ParserState(31);
			$table32 = new ParserState(32);
			$table33 = new ParserState(33);
			$table34 = new ParserState(34);
			$table35 = new ParserState(35);
			$table36 = new ParserState(36);
			$table37 = new ParserState(37);
			$table38 = new ParserState(38);
			$table39 = new ParserState(39);
			$table40 = new ParserState(40);
			$table41 = new ParserState(41);
			$table42 = new ParserState(42);
			$table43 = new ParserState(43);
			$table44 = new ParserState(44);
			$table45 = new ParserState(45);
			$table46 = new ParserState(46);
			$table47 = new ParserState(47);
			$table48 = new ParserState(48);
			$table49 = new ParserState(49);
			$table50 = new ParserState(50);
			$table51 = new ParserState(51);
			$table52 = new ParserState(52);
			$table53 = new ParserState(53);
			$table54 = new ParserState(54);
			$table55 = new ParserState(55);
			$table56 = new ParserState(56);
			$table57 = new ParserState(57);
			$table58 = new ParserState(58);
			$table59 = new ParserState(59);
			$table60 = new ParserState(60);
			$table61 = new ParserState(61);
			$table62 = new ParserState(62);
			$table63 = new ParserState(63);
			$table64 = new ParserState(64);
			$table65 = new ParserState(65);
			$table66 = new ParserState(66);
			$table67 = new ParserState(67);
			$table68 = new ParserState(68);
			$table69 = new ParserState(69);
			$table70 = new ParserState(70);

			$tableDefinition0 = array(
				
					3=>new ParserAction($this->none, $table1),
					4=>new ParserAction($this->none, $table2),
					5=>new ParserAction($this->shift, $table3),
					8=>new ParserAction($this->none, $table4),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table11),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition1 = array(
				
					1=>new ParserAction($this->accept)
				);

			$tableDefinition2 = array(
				
					5=>new ParserAction($this->shift, $table16),
					8=>new ParserAction($this->none, $table17),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table11),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition3 = array(
				
					1=>new ParserAction($this->reduce, $table2)
				);

			$tableDefinition4 = array(
				
					5=>new ParserAction($this->reduce, $table9),
					14=>new ParserAction($this->reduce, $table9),
					15=>new ParserAction($this->reduce, $table9),
					16=>new ParserAction($this->reduce, $table9),
					19=>new ParserAction($this->reduce, $table9),
					20=>new ParserAction($this->reduce, $table9),
					22=>new ParserAction($this->reduce, $table9),
					23=>new ParserAction($this->reduce, $table9),
					25=>new ParserAction($this->reduce, $table9)
				);

			$tableDefinition5 = array(
				
					4=>new ParserAction($this->none, $table20),
					6=>new ParserAction($this->none, $table18),
					7=>new ParserAction($this->none, $table19),
					8=>new ParserAction($this->none, $table4),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table21),
					20=>new ParserAction($this->reduce, $table8),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition6 = array(
				
					4=>new ParserAction($this->none, $table20),
					6=>new ParserAction($this->none, $table22),
					7=>new ParserAction($this->none, $table19),
					8=>new ParserAction($this->none, $table4),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table21),
					20=>new ParserAction($this->reduce, $table8),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition7 = array(
				
					5=>new ParserAction($this->reduce, $table13),
					14=>new ParserAction($this->reduce, $table13),
					15=>new ParserAction($this->reduce, $table13),
					16=>new ParserAction($this->reduce, $table13),
					19=>new ParserAction($this->reduce, $table13),
					20=>new ParserAction($this->reduce, $table13),
					22=>new ParserAction($this->reduce, $table13),
					23=>new ParserAction($this->reduce, $table13),
					25=>new ParserAction($this->reduce, $table13)
				);

			$tableDefinition8 = array(
				
					5=>new ParserAction($this->reduce, $table14),
					14=>new ParserAction($this->reduce, $table14),
					15=>new ParserAction($this->reduce, $table14),
					16=>new ParserAction($this->reduce, $table14),
					19=>new ParserAction($this->reduce, $table14),
					20=>new ParserAction($this->reduce, $table14),
					22=>new ParserAction($this->reduce, $table14),
					23=>new ParserAction($this->reduce, $table14),
					25=>new ParserAction($this->reduce, $table14)
				);

			$tableDefinition9 = array(
				
					5=>new ParserAction($this->reduce, $table15),
					14=>new ParserAction($this->reduce, $table15),
					15=>new ParserAction($this->reduce, $table15),
					16=>new ParserAction($this->reduce, $table15),
					19=>new ParserAction($this->reduce, $table15),
					20=>new ParserAction($this->reduce, $table15),
					22=>new ParserAction($this->reduce, $table15),
					23=>new ParserAction($this->reduce, $table15),
					25=>new ParserAction($this->reduce, $table15)
				);

			$tableDefinition10 = array(
				
					5=>new ParserAction($this->reduce, $table16),
					14=>new ParserAction($this->reduce, $table16),
					15=>new ParserAction($this->reduce, $table16),
					16=>new ParserAction($this->reduce, $table16),
					19=>new ParserAction($this->reduce, $table16),
					20=>new ParserAction($this->reduce, $table16),
					22=>new ParserAction($this->reduce, $table16),
					23=>new ParserAction($this->reduce, $table16),
					25=>new ParserAction($this->reduce, $table16)
				);

			$tableDefinition11 = array(
				
					17=>new ParserAction($this->none, $table23),
					21=>new ParserAction($this->none, $table24),
					30=>new ParserAction($this->none, $table25),
					38=>new ParserAction($this->shift, $table28),
					40=>new ParserAction($this->shift, $table27),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition12 = array(
				
					17=>new ParserAction($this->none, $table29),
					21=>new ParserAction($this->none, $table24),
					30=>new ParserAction($this->none, $table25),
					38=>new ParserAction($this->shift, $table28),
					40=>new ParserAction($this->shift, $table27),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition13 = array(
				
					17=>new ParserAction($this->none, $table30),
					21=>new ParserAction($this->none, $table24),
					30=>new ParserAction($this->none, $table25),
					38=>new ParserAction($this->shift, $table28),
					40=>new ParserAction($this->shift, $table27),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition14 = array(
				
					17=>new ParserAction($this->none, $table31),
					21=>new ParserAction($this->none, $table24),
					30=>new ParserAction($this->none, $table25),
					38=>new ParserAction($this->shift, $table28),
					40=>new ParserAction($this->shift, $table27),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition15 = array(
				
					21=>new ParserAction($this->none, $table33),
					26=>new ParserAction($this->none, $table32),
					32=>new ParserAction($this->shift, $table34),
					33=>new ParserAction($this->shift, $table35),
					38=>new ParserAction($this->shift, $table28),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition16 = array(
				
					1=>new ParserAction($this->reduce, $table1)
				);

			$tableDefinition17 = array(
				
					5=>new ParserAction($this->reduce, $table10),
					14=>new ParserAction($this->reduce, $table10),
					15=>new ParserAction($this->reduce, $table10),
					16=>new ParserAction($this->reduce, $table10),
					19=>new ParserAction($this->reduce, $table10),
					20=>new ParserAction($this->reduce, $table10),
					22=>new ParserAction($this->reduce, $table10),
					23=>new ParserAction($this->reduce, $table10),
					25=>new ParserAction($this->reduce, $table10)
				);

			$tableDefinition18 = array(
				
					10=>new ParserAction($this->none, $table36),
					20=>new ParserAction($this->shift, $table37)
				);

			$tableDefinition19 = array(
				
					4=>new ParserAction($this->none, $table38),
					8=>new ParserAction($this->none, $table4),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table11),
					20=>new ParserAction($this->reduce, $table7),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition20 = array(
				
					7=>new ParserAction($this->none, $table39),
					8=>new ParserAction($this->none, $table17),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table21),
					20=>new ParserAction($this->reduce, $table6),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition21 = array(
				
					17=>new ParserAction($this->none, $table23),
					18=>new ParserAction($this->shift, $table40),
					21=>new ParserAction($this->none, $table24),
					30=>new ParserAction($this->none, $table25),
					38=>new ParserAction($this->shift, $table28),
					40=>new ParserAction($this->shift, $table27),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition22 = array(
				
					10=>new ParserAction($this->none, $table41),
					20=>new ParserAction($this->shift, $table37)
				);

			$tableDefinition23 = array(
				
					18=>new ParserAction($this->shift, $table42)
				);

			$tableDefinition24 = array(
				
					18=>new ParserAction($this->reduce, $table42),
					24=>new ParserAction($this->reduce, $table42),
					28=>new ParserAction($this->none, $table43),
					32=>new ParserAction($this->reduce, $table42),
					33=>new ParserAction($this->reduce, $table42),
					34=>new ParserAction($this->reduce, $table42),
					38=>new ParserAction($this->reduce, $table42),
					40=>new ParserAction($this->reduce, $table42)
				);

			$tableDefinition25 = array(
				
					18=>new ParserAction($this->reduce, $table25),
					24=>new ParserAction($this->reduce, $table25)
				);

			$tableDefinition26 = array(
				
					18=>new ParserAction($this->reduce, $table37),
					24=>new ParserAction($this->reduce, $table37),
					32=>new ParserAction($this->reduce, $table37),
					33=>new ParserAction($this->reduce, $table37),
					34=>new ParserAction($this->reduce, $table37),
					38=>new ParserAction($this->reduce, $table37),
					40=>new ParserAction($this->reduce, $table37),
					42=>new ParserAction($this->shift, $table44)
				);

			$tableDefinition27 = array(
				
					21=>new ParserAction($this->none, $table45),
					38=>new ParserAction($this->shift, $table28),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition28 = array(
				
					18=>new ParserAction($this->reduce, $table39),
					24=>new ParserAction($this->reduce, $table39),
					32=>new ParserAction($this->reduce, $table39),
					33=>new ParserAction($this->reduce, $table39),
					34=>new ParserAction($this->reduce, $table39),
					38=>new ParserAction($this->reduce, $table39),
					40=>new ParserAction($this->reduce, $table39),
					42=>new ParserAction($this->reduce, $table39)
				);

			$tableDefinition29 = array(
				
					18=>new ParserAction($this->shift, $table46)
				);

			$tableDefinition30 = array(
				
					18=>new ParserAction($this->shift, $table47)
				);

			$tableDefinition31 = array(
				
					24=>new ParserAction($this->shift, $table48)
				);

			$tableDefinition32 = array(
				
					18=>new ParserAction($this->reduce, $table40),
					21=>new ParserAction($this->none, $table50),
					27=>new ParserAction($this->none, $table49),
					38=>new ParserAction($this->shift, $table28),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition33 = array(
				
					18=>new ParserAction($this->reduce, $table33),
					38=>new ParserAction($this->reduce, $table33)
				);

			$tableDefinition34 = array(
				
					18=>new ParserAction($this->reduce, $table34),
					38=>new ParserAction($this->reduce, $table34)
				);

			$tableDefinition35 = array(
				
					18=>new ParserAction($this->reduce, $table35),
					38=>new ParserAction($this->reduce, $table35)
				);

			$tableDefinition36 = array(
				
					5=>new ParserAction($this->reduce, $table11),
					14=>new ParserAction($this->reduce, $table11),
					15=>new ParserAction($this->reduce, $table11),
					16=>new ParserAction($this->reduce, $table11),
					19=>new ParserAction($this->reduce, $table11),
					20=>new ParserAction($this->reduce, $table11),
					22=>new ParserAction($this->reduce, $table11),
					23=>new ParserAction($this->reduce, $table11),
					25=>new ParserAction($this->reduce, $table11)
				);

			$tableDefinition37 = array(
				
					21=>new ParserAction($this->none, $table51),
					38=>new ParserAction($this->shift, $table28),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition38 = array(
				
					8=>new ParserAction($this->none, $table17),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table11),
					20=>new ParserAction($this->reduce, $table3),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition39 = array(
				
					4=>new ParserAction($this->none, $table52),
					8=>new ParserAction($this->none, $table4),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table11),
					20=>new ParserAction($this->reduce, $table5),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition40 = array(
				
					14=>new ParserAction($this->reduce, $table23),
					15=>new ParserAction($this->reduce, $table23),
					16=>new ParserAction($this->reduce, $table23),
					19=>new ParserAction($this->reduce, $table23),
					20=>new ParserAction($this->reduce, $table23),
					22=>new ParserAction($this->reduce, $table23),
					23=>new ParserAction($this->reduce, $table23),
					25=>new ParserAction($this->reduce, $table23)
				);

			$tableDefinition41 = array(
				
					5=>new ParserAction($this->reduce, $table12),
					14=>new ParserAction($this->reduce, $table12),
					15=>new ParserAction($this->reduce, $table12),
					16=>new ParserAction($this->reduce, $table12),
					19=>new ParserAction($this->reduce, $table12),
					20=>new ParserAction($this->reduce, $table12),
					22=>new ParserAction($this->reduce, $table12),
					23=>new ParserAction($this->reduce, $table12),
					25=>new ParserAction($this->reduce, $table12)
				);

			$tableDefinition42 = array(
				
					14=>new ParserAction($this->reduce, $table18),
					15=>new ParserAction($this->reduce, $table18),
					16=>new ParserAction($this->reduce, $table18),
					19=>new ParserAction($this->reduce, $table18),
					20=>new ParserAction($this->reduce, $table18),
					22=>new ParserAction($this->reduce, $table18),
					23=>new ParserAction($this->reduce, $table18),
					25=>new ParserAction($this->reduce, $table18)
				);

			$tableDefinition43 = array(
				
					18=>new ParserAction($this->reduce, $table44),
					21=>new ParserAction($this->none, $table56),
					24=>new ParserAction($this->reduce, $table44),
					29=>new ParserAction($this->none, $table53),
					30=>new ParserAction($this->none, $table60),
					31=>new ParserAction($this->none, $table54),
					32=>new ParserAction($this->shift, $table57),
					33=>new ParserAction($this->shift, $table58),
					34=>new ParserAction($this->shift, $table59),
					35=>new ParserAction($this->none, $table55),
					36=>new ParserAction($this->none, $table61),
					37=>new ParserAction($this->none, $table62),
					38=>new ParserAction($this->shift, $table63),
					40=>new ParserAction($this->shift, $table27),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition44 = array(
				
					38=>new ParserAction($this->shift, $table64)
				);

			$tableDefinition45 = array(
				
					18=>new ParserAction($this->reduce, $table36),
					24=>new ParserAction($this->reduce, $table36),
					32=>new ParserAction($this->reduce, $table36),
					33=>new ParserAction($this->reduce, $table36),
					34=>new ParserAction($this->reduce, $table36),
					38=>new ParserAction($this->reduce, $table36),
					40=>new ParserAction($this->reduce, $table36)
				);

			$tableDefinition46 = array(
				
					14=>new ParserAction($this->reduce, $table17),
					15=>new ParserAction($this->reduce, $table17),
					16=>new ParserAction($this->reduce, $table17),
					19=>new ParserAction($this->reduce, $table17),
					20=>new ParserAction($this->reduce, $table17),
					22=>new ParserAction($this->reduce, $table17),
					23=>new ParserAction($this->reduce, $table17),
					25=>new ParserAction($this->reduce, $table17)
				);

			$tableDefinition47 = array(
				
					5=>new ParserAction($this->reduce, $table20),
					14=>new ParserAction($this->reduce, $table20),
					15=>new ParserAction($this->reduce, $table20),
					16=>new ParserAction($this->reduce, $table20),
					19=>new ParserAction($this->reduce, $table20),
					20=>new ParserAction($this->reduce, $table20),
					22=>new ParserAction($this->reduce, $table20),
					23=>new ParserAction($this->reduce, $table20),
					25=>new ParserAction($this->reduce, $table20)
				);

			$tableDefinition48 = array(
				
					5=>new ParserAction($this->reduce, $table21),
					14=>new ParserAction($this->reduce, $table21),
					15=>new ParserAction($this->reduce, $table21),
					16=>new ParserAction($this->reduce, $table21),
					19=>new ParserAction($this->reduce, $table21),
					20=>new ParserAction($this->reduce, $table21),
					22=>new ParserAction($this->reduce, $table21),
					23=>new ParserAction($this->reduce, $table21),
					25=>new ParserAction($this->reduce, $table21)
				);

			$tableDefinition49 = array(
				
					18=>new ParserAction($this->shift, $table65)
				);

			$tableDefinition50 = array(
				
					18=>new ParserAction($this->reduce, $table41)
				);

			$tableDefinition51 = array(
				
					18=>new ParserAction($this->shift, $table66)
				);

			$tableDefinition52 = array(
				
					8=>new ParserAction($this->none, $table17),
					9=>new ParserAction($this->none, $table5),
					11=>new ParserAction($this->none, $table6),
					12=>new ParserAction($this->none, $table7),
					13=>new ParserAction($this->none, $table8),
					14=>new ParserAction($this->shift, $table9),
					15=>new ParserAction($this->shift, $table10),
					16=>new ParserAction($this->shift, $table12),
					19=>new ParserAction($this->shift, $table11),
					20=>new ParserAction($this->reduce, $table4),
					22=>new ParserAction($this->shift, $table13),
					23=>new ParserAction($this->shift, $table14),
					25=>new ParserAction($this->shift, $table15)
				);

			$tableDefinition53 = array(
				
					18=>new ParserAction($this->reduce, $table24),
					24=>new ParserAction($this->reduce, $table24)
				);

			$tableDefinition54 = array(
				
					18=>new ParserAction($this->reduce, $table43),
					24=>new ParserAction($this->reduce, $table43),
					32=>new ParserAction($this->reduce, $table43),
					33=>new ParserAction($this->reduce, $table43),
					34=>new ParserAction($this->reduce, $table43),
					38=>new ParserAction($this->reduce, $table43),
					40=>new ParserAction($this->reduce, $table43)
				);

			$tableDefinition55 = array(
				
					18=>new ParserAction($this->reduce, $table45),
					24=>new ParserAction($this->reduce, $table45)
				);

			$tableDefinition56 = array(
				
					18=>new ParserAction($this->reduce, $table26),
					24=>new ParserAction($this->reduce, $table26),
					32=>new ParserAction($this->reduce, $table26),
					33=>new ParserAction($this->reduce, $table26),
					34=>new ParserAction($this->reduce, $table26),
					38=>new ParserAction($this->reduce, $table26),
					40=>new ParserAction($this->reduce, $table26)
				);

			$tableDefinition57 = array(
				
					18=>new ParserAction($this->reduce, $table27),
					24=>new ParserAction($this->reduce, $table27),
					32=>new ParserAction($this->reduce, $table27),
					33=>new ParserAction($this->reduce, $table27),
					34=>new ParserAction($this->reduce, $table27),
					38=>new ParserAction($this->reduce, $table27),
					40=>new ParserAction($this->reduce, $table27)
				);

			$tableDefinition58 = array(
				
					18=>new ParserAction($this->reduce, $table28),
					24=>new ParserAction($this->reduce, $table28),
					32=>new ParserAction($this->reduce, $table28),
					33=>new ParserAction($this->reduce, $table28),
					34=>new ParserAction($this->reduce, $table28),
					38=>new ParserAction($this->reduce, $table28),
					40=>new ParserAction($this->reduce, $table28)
				);

			$tableDefinition59 = array(
				
					18=>new ParserAction($this->reduce, $table29),
					24=>new ParserAction($this->reduce, $table29),
					32=>new ParserAction($this->reduce, $table29),
					33=>new ParserAction($this->reduce, $table29),
					34=>new ParserAction($this->reduce, $table29),
					38=>new ParserAction($this->reduce, $table29),
					40=>new ParserAction($this->reduce, $table29)
				);

			$tableDefinition60 = array(
				
					18=>new ParserAction($this->reduce, $table30),
					24=>new ParserAction($this->reduce, $table30),
					32=>new ParserAction($this->reduce, $table30),
					33=>new ParserAction($this->reduce, $table30),
					34=>new ParserAction($this->reduce, $table30),
					38=>new ParserAction($this->reduce, $table30),
					40=>new ParserAction($this->reduce, $table30)
				);

			$tableDefinition61 = array(
				
					18=>new ParserAction($this->reduce, $table31),
					24=>new ParserAction($this->reduce, $table31),
					37=>new ParserAction($this->none, $table67),
					38=>new ParserAction($this->shift, $table68)
				);

			$tableDefinition62 = array(
				
					18=>new ParserAction($this->reduce, $table46),
					24=>new ParserAction($this->reduce, $table46),
					38=>new ParserAction($this->reduce, $table46)
				);

			$tableDefinition63 = array(
				
					18=>new ParserAction($this->reduce, $table39),
					24=>new ParserAction($this->reduce, $table39),
					32=>new ParserAction($this->reduce, $table39),
					33=>new ParserAction($this->reduce, $table39),
					34=>new ParserAction($this->reduce, $table39),
					38=>new ParserAction($this->reduce, $table39),
					39=>new ParserAction($this->shift, $table69),
					40=>new ParserAction($this->reduce, $table39),
					42=>new ParserAction($this->reduce, $table39)
				);

			$tableDefinition64 = array(
				
					18=>new ParserAction($this->reduce, $table38),
					24=>new ParserAction($this->reduce, $table38),
					32=>new ParserAction($this->reduce, $table38),
					33=>new ParserAction($this->reduce, $table38),
					34=>new ParserAction($this->reduce, $table38),
					38=>new ParserAction($this->reduce, $table38),
					40=>new ParserAction($this->reduce, $table38),
					42=>new ParserAction($this->reduce, $table38)
				);

			$tableDefinition65 = array(
				
					5=>new ParserAction($this->reduce, $table22),
					14=>new ParserAction($this->reduce, $table22),
					15=>new ParserAction($this->reduce, $table22),
					16=>new ParserAction($this->reduce, $table22),
					19=>new ParserAction($this->reduce, $table22),
					20=>new ParserAction($this->reduce, $table22),
					22=>new ParserAction($this->reduce, $table22),
					23=>new ParserAction($this->reduce, $table22),
					25=>new ParserAction($this->reduce, $table22)
				);

			$tableDefinition66 = array(
				
					5=>new ParserAction($this->reduce, $table19),
					14=>new ParserAction($this->reduce, $table19),
					15=>new ParserAction($this->reduce, $table19),
					16=>new ParserAction($this->reduce, $table19),
					19=>new ParserAction($this->reduce, $table19),
					20=>new ParserAction($this->reduce, $table19),
					22=>new ParserAction($this->reduce, $table19),
					23=>new ParserAction($this->reduce, $table19),
					25=>new ParserAction($this->reduce, $table19)
				);

			$tableDefinition67 = array(
				
					18=>new ParserAction($this->reduce, $table47),
					24=>new ParserAction($this->reduce, $table47),
					38=>new ParserAction($this->reduce, $table47)
				);

			$tableDefinition68 = array(
				
					39=>new ParserAction($this->shift, $table69)
				);

			$tableDefinition69 = array(
				
					21=>new ParserAction($this->none, $table56),
					30=>new ParserAction($this->none, $table60),
					31=>new ParserAction($this->none, $table70),
					32=>new ParserAction($this->shift, $table57),
					33=>new ParserAction($this->shift, $table58),
					34=>new ParserAction($this->shift, $table59),
					38=>new ParserAction($this->shift, $table28),
					40=>new ParserAction($this->shift, $table27),
					41=>new ParserAction($this->none, $table26)
				);

			$tableDefinition70 = array(
				
					18=>new ParserAction($this->reduce, $table32),
					24=>new ParserAction($this->reduce, $table32),
					38=>new ParserAction($this->reduce, $table32)
				);

			$table0->setActions($tableDefinition0);
			$table1->setActions($tableDefinition1);
			$table2->setActions($tableDefinition2);
			$table3->setActions($tableDefinition3);
			$table4->setActions($tableDefinition4);
			$table5->setActions($tableDefinition5);
			$table6->setActions($tableDefinition6);
			$table7->setActions($tableDefinition7);
			$table8->setActions($tableDefinition8);
			$table9->setActions($tableDefinition9);
			$table10->setActions($tableDefinition10);
			$table11->setActions($tableDefinition11);
			$table12->setActions($tableDefinition12);
			$table13->setActions($tableDefinition13);
			$table14->setActions($tableDefinition14);
			$table15->setActions($tableDefinition15);
			$table16->setActions($tableDefinition16);
			$table17->setActions($tableDefinition17);
			$table18->setActions($tableDefinition18);
			$table19->setActions($tableDefinition19);
			$table20->setActions($tableDefinition20);
			$table21->setActions($tableDefinition21);
			$table22->setActions($tableDefinition22);
			$table23->setActions($tableDefinition23);
			$table24->setActions($tableDefinition24);
			$table25->setActions($tableDefinition25);
			$table26->setActions($tableDefinition26);
			$table27->setActions($tableDefinition27);
			$table28->setActions($tableDefinition28);
			$table29->setActions($tableDefinition29);
			$table30->setActions($tableDefinition30);
			$table31->setActions($tableDefinition31);
			$table32->setActions($tableDefinition32);
			$table33->setActions($tableDefinition33);
			$table34->setActions($tableDefinition34);
			$table35->setActions($tableDefinition35);
			$table36->setActions($tableDefinition36);
			$table37->setActions($tableDefinition37);
			$table38->setActions($tableDefinition38);
			$table39->setActions($tableDefinition39);
			$table40->setActions($tableDefinition40);
			$table41->setActions($tableDefinition41);
			$table42->setActions($tableDefinition42);
			$table43->setActions($tableDefinition43);
			$table44->setActions($tableDefinition44);
			$table45->setActions($tableDefinition45);
			$table46->setActions($tableDefinition46);
			$table47->setActions($tableDefinition47);
			$table48->setActions($tableDefinition48);
			$table49->setActions($tableDefinition49);
			$table50->setActions($tableDefinition50);
			$table51->setActions($tableDefinition51);
			$table52->setActions($tableDefinition52);
			$table53->setActions($tableDefinition53);
			$table54->setActions($tableDefinition54);
			$table55->setActions($tableDefinition55);
			$table56->setActions($tableDefinition56);
			$table57->setActions($tableDefinition57);
			$table58->setActions($tableDefinition58);
			$table59->setActions($tableDefinition59);
			$table60->setActions($tableDefinition60);
			$table61->setActions($tableDefinition61);
			$table62->setActions($tableDefinition62);
			$table63->setActions($tableDefinition63);
			$table64->setActions($tableDefinition64);
			$table65->setActions($tableDefinition65);
			$table66->setActions($tableDefinition66);
			$table67->setActions($tableDefinition67);
			$table68->setActions($tableDefinition68);
			$table69->setActions($tableDefinition69);
			$table70->setActions($tableDefinition70);

			$this->table = array(
				
					0=>$table0,
					1=>$table1,
					2=>$table2,
					3=>$table3,
					4=>$table4,
					5=>$table5,
					6=>$table6,
					7=>$table7,
					8=>$table8,
					9=>$table9,
					10=>$table10,
					11=>$table11,
					12=>$table12,
					13=>$table13,
					14=>$table14,
					15=>$table15,
					16=>$table16,
					17=>$table17,
					18=>$table18,
					19=>$table19,
					20=>$table20,
					21=>$table21,
					22=>$table22,
					23=>$table23,
					24=>$table24,
					25=>$table25,
					26=>$table26,
					27=>$table27,
					28=>$table28,
					29=>$table29,
					30=>$table30,
					31=>$table31,
					32=>$table32,
					33=>$table33,
					34=>$table34,
					35=>$table35,
					36=>$table36,
					37=>$table37,
					38=>$table38,
					39=>$table39,
					40=>$table40,
					41=>$table41,
					42=>$table42,
					43=>$table43,
					44=>$table44,
					45=>$table45,
					46=>$table46,
					47=>$table47,
					48=>$table48,
					49=>$table49,
					50=>$table50,
					51=>$table51,
					52=>$table52,
					53=>$table53,
					54=>$table54,
					55=>$table55,
					56=>$table56,
					57=>$table57,
					58=>$table58,
					59=>$table59,
					60=>$table60,
					61=>$table61,
					62=>$table62,
					63=>$table63,
					64=>$table64,
					65=>$table65,
					66=>$table66,
					67=>$table67,
					68=>$table68,
					69=>$table69,
					70=>$table70
				);

			$this->defaultActions = array(
				
					3=>new ParserAction($this->reduce, $table2),
					16=>new ParserAction($this->reduce, $table1),
					50=>new ParserAction($this->reduce, $table41)
				);

			$this->productions = array(
				
					0=>new ParserProduction($symbol0),
					1=>new ParserProduction($symbol3,2),
					2=>new ParserProduction($symbol3,1),
					3=>new ParserProduction($symbol6,2),
					4=>new ParserProduction($symbol6,3),
					5=>new ParserProduction($symbol6,2),
					6=>new ParserProduction($symbol6,1),
					7=>new ParserProduction($symbol6,1),
					8=>new ParserProduction($symbol6,0),
					9=>new ParserProduction($symbol4,1),
					10=>new ParserProduction($symbol4,2),
					11=>new ParserProduction($symbol8,3),
					12=>new ParserProduction($symbol8,3),
					13=>new ParserProduction($symbol8,1),
					14=>new ParserProduction($symbol8,1),
					15=>new ParserProduction($symbol8,1),
					16=>new ParserProduction($symbol8,1),
					17=>new ParserProduction($symbol11,3),
					18=>new ParserProduction($symbol9,3),
					19=>new ParserProduction($symbol10,3),
					20=>new ParserProduction($symbol12,3),
					21=>new ParserProduction($symbol12,3),
					22=>new ParserProduction($symbol13,4),
					23=>new ParserProduction($symbol7,2),
					24=>new ParserProduction($symbol17,3),
					25=>new ParserProduction($symbol17,1),
					26=>new ParserProduction($symbol31,1),
					27=>new ParserProduction($symbol31,1),
					28=>new ParserProduction($symbol31,1),
					29=>new ParserProduction($symbol31,1),
					30=>new ParserProduction($symbol31,1),
					31=>new ParserProduction($symbol35,1),
					32=>new ParserProduction($symbol37,3),
					33=>new ParserProduction($symbol26,1),
					34=>new ParserProduction($symbol26,1),
					35=>new ParserProduction($symbol26,1),
					36=>new ParserProduction($symbol30,2),
					37=>new ParserProduction($symbol21,1),
					38=>new ParserProduction($symbol41,3),
					39=>new ParserProduction($symbol41,1),
					40=>new ParserProduction($symbol27,0),
					41=>new ParserProduction($symbol27,1),
					42=>new ParserProduction($symbol28,0),
					43=>new ParserProduction($symbol28,2),
					44=>new ParserProduction($symbol29,0),
					45=>new ParserProduction($symbol29,1),
					46=>new ParserProduction($symbol36,1),
					47=>new ParserProduction($symbol36,2)
				);




        //Setup Lexer
        
			$this->rules = array(
				
					0=>'/^(?:[^\x00]*?(?=(\{\{)))/u',
					1=>'/^(?:[^\x00]+)/u',
					2=>'/^(?:[^\x00]{2,}?(?=(\{\{|$)))/u',
					3=>'/^(?:[\s\S]*?--\}\})/u',
					4=>'/^(?:\{\{(~)?>)/u',
					5=>'/^(?:\{\{(~)?#)/u',
					6=>'/^(?:\{\{(~)?\/)/u',
					7=>'/^(?:\{\{(~)?\^)/u',
					8=>'/^(?:\{\{(~)?\s*else\b)/u',
					9=>'/^(?:\{\{(~)?\{)/u',
					10=>'/^(?:\{\{(~)?&)/u',
					11=>'/^(?:\{\{!--)/u',
					12=>'/^(?:\{\{![\s\S]*?\}\})/u',
					13=>'/^(?:\{\{(~)?)/u',
					14=>'/^(?:=)/u',
					15=>'/^(?:\.\.)/u',
					16=>'/^(?:\.(?=([=~}\s\/.])))/u',
					17=>'/^(?:[\/.])/u',
					18=>'/^(?:\s+)/u',
					19=>'/^(?:\}(~)?\}\})/u',
					20=>'/^(?:(~)?\}\})/u',
					21=>'/^(?:"(\\["]|[^"])*")/u',
					22=>'/^(?:\'(\\[\']|[^\'])*\')/u',
					23=>'/^(?:@)/u',
					24=>'/^(?:true(?=([~}\s])))/u',
					25=>'/^(?:false(?=([~}\s])))/u',
					26=>'/^(?:-?[0-9]+(?=([~}\s])))/u',
					27=>'/^(?:([^\s!\"#%-,\.\/;->@\[-\^`\{-~]+(?=([=~}\s\/.]))))/u',
					28=>'/^(?:\[[^\]]*\])/u',
					29=>'/^(?:.)/u',
					30=>'/^(?:$)/u'
				);

			$this->conditions = array(
				
					"mu"=>new LexerConditions(array( 4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30), false),
					"emu"=>new LexerConditions(array( 2), false),
					"com"=>new LexerConditions(array( 3), false),
					"INITIAL"=>new LexerConditions(array( 0,1,30), true)
				);


    }

    function parserPerformAction(&$thisS, &$yy, $yystate, &$s, $o)
    {
        


switch ($yystate) {
case 1: return new $yy->ProgramNode($s[$o-1]->value()); 
break;
case 2: return new $yy->ProgramNode([]); 
break;
case 3:$thisS = new $yy->ProgramNode([], $s[$o-1]->value(), $s[$o]->value());
break;
case 4:$thisS = new $yy->ProgramNode($s[$o-2]->value(), $s[$o-1]->value(), $s[$o]->value());
break;
case 5:$thisS = new $yy->ProgramNode($s[$o-1]->value(), $s[$o]->value(), []);
break;
case 6:$thisS = new $yy->ProgramNode($s[$o]->value());
break;
case 7:$thisS = new $yy->ProgramNode([]);
break;
case 8:$thisS = new $yy->ProgramNode([]);
break;
case 9:$thisS = [$s[$o]->value()];
break;
case 10: $s[$o-1]->value().push($s[$o]->value()); $thisS = $s[$o-1]->value(); 
break;
case 11:$thisS = new $yy->BlockNode($s[$o-2]->value(), $s[$o-1]->value().inverse, $s[$o-1]->value(), $s[$o]->value());
break;
case 12:$thisS = new $yy->BlockNode($s[$o-2]->value(), $s[$o-1]->value(), $s[$o-1]->value().inverse, $s[$o]->value());
break;
case 13:$thisS = $s[$o]->value();
break;
case 14:$thisS = $s[$o]->value();
break;
case 15:$thisS = new $yy->ContentNode($s[$o]->value());
break;
case 16:$thisS = new $yy->CommentNode($s[$o]->value());
break;
case 17:$thisS = new $yy->MustacheNode($s[$o-1]->value()[0], $s[$o-1]->value()[1], $s[$o-2]->value(), stripFlags($s[$o-2]->value(), $s[$o]->value()));
break;
case 18:$thisS = new $yy->MustacheNode($s[$o-1]->value()[0], $s[$o-1]->value()[1], $s[$o-2]->value(), stripFlags($s[$o-2]->value(), $s[$o]->value()));
break;
case 19:  $thisS = (object)array('path' => $s[$o-1]->value(), 'strip' => stripFlags($s[$o-2]->value(), $s[$o]->value()));
                             
break;
case 20:$thisS = new $yy->MustacheNode($s[$o-1]->value()[0], $s[$o-1]->value()[1], $s[$o-2]->value(), stripFlags($s[$o-2]->value(), $s[$o]->value()));
break;
case 21:$thisS = new $yy->MustacheNode($s[$o-1]->value()[0], $s[$o-1]->value()[1], $s[$o-2]->value(), stripFlags($s[$o-2]->value(), $s[$o]->value()));
break;
case 22:$thisS = new $yy->PartialNode($s[$o-2]->value(), $s[$o-1]->value(), stripFlags($s[$o-3]->value(), $s[$o]->value()));
break;
case 23:$thisS = stripFlags($s[$o-1]->value(), $s[$o]->value());
break;
case 24:$thisS = [[$s[$o-2]->value()].concat($s[$o-1]->value()), $s[$o]->value()];
break;
case 25:$thisS = [[$s[$o]->value()], null];
break;
case 26:$thisS = $s[$o]->value();
break;
case 27:$thisS = new $yy->StringNode($s[$o]->value());
break;
case 28:$thisS = new $yy->IntegerNode($s[$o]->value());
break;
case 29:$thisS = new $yy->BooleanNode($s[$o]->value());
break;
case 30:$thisS = $s[$o]->value();
break;
case 31:$thisS = new $yy->HashNode($s[$o]->value());
break;
case 32:$thisS = [$s[$o-2]->value(), $s[$o]->value()];
break;
case 33:$thisS = new $yy->PartialNameNode($s[$o]->value());
break;
case 34:$thisS = new $yy->PartialNameNode(new $yy->StringNode($s[$o]->value()));
break;
case 35:$thisS = new $yy->PartialNameNode(new $yy->IntegerNode($s[$o]->value()));
break;
case 36:$thisS = new $yy->DataNode($s[$o]->value());
break;
case 37:$thisS = new $yy->IdNode($s[$o]->value());
break;
case 38:
                         $s[$o-2]->value().push((object)array('part' => $s[$o]->value(), 'separator' => $s[$o-1]->value())); $thisS = $s[$o-2]->value();
                        
break;
case 39:
   $thisS = array((object)array('part' => $s[$o]->value()));
  
break;
case 42:$thisS = [];
break;
case 43:$s[$o-1]->value().push($s[$o]->value());
break;
case 46:$thisS = [$s[$o]->value()];
break;
case 47:$s[$o-1]->value().push($s[$o]->value());
break;
}

    }

    function parserLex()
    {
        $token = $this->lexerLex(); // $end = 1

        if (isset($token)) {
            return $token;
        }

        return $this->symbols["end"];
    }

    protected function parseError(ParserError $error) {
        throw $error;
    }

    protected function lexerError(LexerError $error) {
        throw $error;
    }

	protected function runTimeError(RunTimeError $error) {
		throw $error;
	}

    function parse($input)
    {
        if (empty($this->table)) {
            throw new Exception("Empty Table");
        }
        $this->eof = new ParserSymbol("Eof", 1);
        $firstAction = new ParserAction(0, $this->table[0]);
        $firstCachedAction = new ParserCachedAction($firstAction);
        $stack = array($firstCachedAction);
        $stackCount = 1;
        $vstack = array(null);
        $vstackCount = 1;
        $yy = null;
        $_yy = null;
        $recovering = 0;
        $symbol = null;
        $action = null;
        $errStr = "";
        $preErrorSymbol = null;
        $state = null;

        $this->setInput($input);

        while (true) {
            // retrieve state number from top of stack
            $state = $stack[$stackCount - 1]->action->state;
            // use default actions if available
            if ($state != null && isset($this->defaultActions[$state->index])) {
                $action = $this->defaultActions[$state->index];
            } else {
                if (empty($symbol) == true) {
                    $symbol = $this->parserLex();
                }
                // read action for current state and first input
                if (isset($state) && isset($state->actions[$symbol->index])) {
                    //$action = $this->table[$state][$symbol];
                    $action = $state->actions[$symbol->index];
                } else {
                    $action = null;
                }
            }
            echo "SYMBOL: "; print_r($symbol);

            if ($action == null) {
                if ($recovering == 0) {
                    // Report error
                    $expected = array();
                    foreach($this->table[$state->index]->actions as $p => $item) {
                        if (!empty($this->terminals[$p]) && $p > 2) {
                            $expected[] = $this->terminals[$p]->name;
                        }
                    }

                    $errStr = "Parse error on line " . ($this->yy->lineNo + 1) . ":\n" . $this->showPosition() . "\nExpecting " . implode(", ", $expected) . ", got '" . (isset($this->terminals[$symbol->index]) ? $this->terminals[$symbol->index]->name : 'NOTHING') . "'";

                    $this->parseError(new ParserError($errStr,$this->match, $state, $symbol, $this->yy->lineNo, $this->yy->loc, $expected));
                }
            }

            if ($state === null || $action === null) {
                break;
            }

            switch ($action->action) {
                case 1:
                    // shift
                    //$this->shiftCount++;
                    $stack[] = new ParserCachedAction($action, $symbol);
                    $stackCount++;

                    $vstack[] = clone($this->yy);
                    $vstackCount++;

                    $symbol = "";
                    if ($preErrorSymbol == null) { // normal execution/no error
                        $yy = clone($this->yy);
                        if ($recovering > 0) $recovering--;
                    } else { // error just occurred, resume old look ahead f/ before error
                        $symbol = $preErrorSymbol;
                        $preErrorSymbol = null;
                    }
                    break;

                case 2:
                    // reduce
                    $len = $this->productions[$action->state->index]->len;
                    // perform semantic action
                    print_r($vstack);
                    $_yy = $vstack[$vstackCount - $len];// default to $S = $1
                    // default location, uses first token for firsts, last for lasts

                    if (isset($this->ranges)) {
                        //TODO: add ranges
                    }
	                try {
                        $r = $this->parserPerformAction($_yy->text, $yy, $action->state->index, $vstack, $vstackCount - 1);
	                }
		            catch (RunTimeError $error) {
			            $newError = new RunTimeError($error->getMessage(). "\n". $this->showPosition());
			            $newError->text = $this->match;
			            $newError->state = $state;
			            $newError->symbol = $symbol;
			            $newError->lineNo = $this->yy->lineNo;
			            $newError->loc = $this->yy->loc;
			            throw $newError;
		            }

	                if (isset($r)) {
                        return $r;
                    }

                    // pop off stack
                    while ($len > 0) {
                        $len--;

                        array_pop($stack);
                        $stackCount--;

                        array_pop($vstack);
                        $vstackCount--;
                    }

                    if (is_null($_yy))
                    {
                        $vstack[] = new ParserValue();
                    }
                    else
                    {
                        $vstack[] = $_yy;
                    }
                    $vstackCount++;

                    $nextSymbol = $this->productions[$action->state->index]->symbol;
                    // goto new state = table[STATE][NONTERMINAL]
                    $nextState = $stack[$stackCount - 1]->action->state;
                    $nextAction = $nextState->actions[$nextSymbol->index];

                    $stack[] = new ParserCachedAction($nextAction, $nextSymbol);
                    $stackCount++;

                    break;

                case 3:
                    // accept
                    return true;
            }

        }

        return true;
    }


    /* Jison generated lexer */
    protected $eof;
    public $yy = null;
    protected $match = "";
    protected $matched = "";
    protected $conditionStack = array();
    protected $conditionStackCount = 0;
    protected $rules = array();
    protected $conditions = array();
    protected $done = false;
    protected $less;
    protected $more;
    protected $input;
    protected $offset;
    protected $ranges;
    protected $flex = false;

    function setInput($input)
    {
        $this->input = $input;
        $this->more = $this->less = $this->done = false;
        $this->yy = new ParserValue();
        $this->conditionStack = array('INITIAL');
        $this->conditionStackCount = 1;

        if (isset($this->ranges)) {
            $loc = $this->yy->loc = new ParserLocation();
            $loc->Range(new ParserRange(0, 0));
        } else {
            $this->yy->loc = new ParserLocation();
        }
        $this->offset = 0;
    }

    function input()
    {
        $ch = $this->input[0];
        $this->yy->text .= $ch;
        $this->yy->leng++;
        $this->offset++;
        $this->match .= $ch;
        $this->matched .= $ch;
        $lines = preg_match("/(?:\r\n?|\n).*/", $ch);
        if (count($lines) > 0) {
            $this->yy->lineNo++;
            $this->yy->lastLine++;
        } else {
            $this->yy->loc->lastColumn++;
        }
        if (isset($this->ranges)) {
            $this->yy->loc->range->y++;
        }

        $this->input = array_slice($this->input, 1);
        return $ch;
    }

    function unput($ch)
    {
        $len = strlen($ch);
        $lines = explode("/(?:\r\n?|\n)/", $ch);
        $linesCount = count($lines);

        $this->input = $ch . $this->input;
        $this->yy->text = substr($this->yy->text, 0, $len - 1);
        //$this->yylen -= $len;
        $this->offset -= $len;
        $oldLines = explode("/(?:\r\n?|\n)/", $this->match);
        $oldLinesCount = count($oldLines);
        $this->match = substr($this->match, 0, strlen($this->match) - 1);
        $this->matched = substr($this->matched, 0, strlen($this->matched) - 1);

        if (($linesCount - 1) > 0) $this->yy->lineNo -= $linesCount - 1;
        $r = $this->yy->loc->range;
        $oldLinesLength = (isset($oldLines[$oldLinesCount - $linesCount]) ? strlen($oldLines[$oldLinesCount - $linesCount]) : 0);

        $this->yy->loc = new ParserLocation(
            $this->yy->loc->firstLine,
            $this->yy->lineNo,
            $this->yy->loc->firstColumn,
            $this->yy->loc->firstLine,
            (empty($lines) ?
                ($linesCount == $oldLinesCount ? $this->yy->loc->firstColumn : 0) + $oldLinesLength :
                $this->yy->loc->firstColumn - $len)
        );

        if (isset($this->ranges)) {
            $this->yy->loc->range = array($r[0], $r[0] + $this->yy->leng - $len);
        }
    }

    function more()
    {
        $this->more = true;
    }

    function pastInput($len)
    {
        $past = mb_substr($this->matched, 0, mb_strlen($this->matched,'utf8') - mb_strlen($this->match,'utf8'),'utf8');
        return (mb_strlen($past,'utf8') > $len ? '...' : '') . str_replace("\n", "", mb_substr($past, -$len, NULL, 'utf8'));
    }

    function upcomingInput($len)
    {
        $next = $this->match;
        if (mb_strlen($next,'utf8') < $len) {
            $next .= mb_substr($this->input, 0, $len - mb_strlen($next,'utf8'));
        }
        return str_replace("\n", "", mb_substr($next, 0, $len,'utf8') . (mb_strlen($next,'utf8') > $len ? '...' : ''));
    }

    function showPosition($len = 20)
    {
        $pre = $this->pastInput($len);

        $c = '';
        for($i = 0, $preLength = mb_strlen($pre, 'utf8'); $i < $preLength; $i++) {
            $c .= '-';
        }

        return $pre . $this->upcomingInput($len) . "\n" . $c . "^";
    }

    function next()
    {
        if ($this->done == true) {
            return $this->eof;
        }

        if ($this->input == '' || $this->input === false) {
            $this->done = true;
        }

        if ($this->more == false) {
            $this->yy->text = '';
            $this->match = '';
        }

        $rules = $this->currentRules();
        for ($i = 0, $j = count($rules); $i < $j; $i++) {
            preg_match($this->rules[$rules[$i]], $this->input, $tempMatch);
            if ($tempMatch && (empty($match) || count($tempMatch[0]) > count($match[0]))) {
                $match = $tempMatch;
                $index = $i;
                if (isset($this->flex) && $this->flex == false) {
                    break;
                }
            }
        }
        if ( $match ) {
            $matchCount = strlen($match[0]);
            $lineCount = preg_match("/(?:\r\n?|\n).*/", $match[0], $lines);
            $line = ($lines ? $lines[$lineCount - 1] : false);
            $this->yy->lineNo += $lineCount;

            $this->yy->loc = new ParserLocation(
                $this->yy->loc->lastLine,
                $this->yy->lineNo + 1,
                $this->yy->loc->lastColumn,
                ($line ?
                    count($line) - preg_match("/\r?\n?/", $line, $na) :
                    $this->yy->loc->lastColumn + $matchCount
                )
            );


            $this->yy->text .= $match[0];
            $this->match .= $match[0];
            $this->matches = $match;
            $this->matched .= $match[0];

            $this->yy->leng = strlen($this->yy->text);
            if (isset($this->ranges)) {
                $this->yy->loc->range = new ParserRange($this->offset, $this->offset += $this->yy->leng);
            }
            $this->more = false;
            $this->input = substr($this->input, $matchCount, strlen($this->input));
            $ruleIndex = $rules[$index];
            $nextCondition = $this->conditionStack[$this->conditionStackCount - 1];

            $token = $this->lexerPerformAction($ruleIndex, $nextCondition);
            if ($this->done == true && $this->input != '' && $this->input !== false) {
                $this->done = false;
            }

            if (empty($token) == false) {
	            if (isset($this->symbols[$token])) return $this->symbols[$token];
            } else {
                return null;
            }
        }

        if ($this->input == '' || $this->input === false) {
            return $this->eof;
        } else {
            $this->lexerError(new LexerError("Lexical error on line " . ($this->yy->lineNo + 1) . ". Unrecognized text.\n" . $this->showPosition(), "", -1, $this->yy->lineNo));
            return null;
        }
    }

    function lexerLex()
    {
        $r = $this->next();

        while (is_null($r) && !$this->done) {
            $r = $this->next();
        }

        return $r;
    }

    function begin($condition)
    {
        $this->conditionStackCount++;
        $this->conditionStack[] = $condition;
    }

    function popState()
    {
        $this->conditionStackCount--;
        return array_pop($this->conditionStack);
    }

    function currentRules()
    {
        $peek = $this->conditionStack[$this->conditionStackCount - 1];
        return $this->conditions[$peek]->rules;
    }

    function LexerPerformAction($avoidingNameCollisions, $YY_START = null)
    {
        


 $strip = function($s, $e) { return $this->yy->text = substr($this->yy->text, $s, $this->yy->leng - $e); };



switch($avoidingNameCollisions) {
case 0:
                                   
                                   if(substr($this->yy->text, -2) === "\\\\") {
                                     $strip(0,1);
                                     $this->begin("mu");
                                   } else if (substr($this->yy->text, -1) === "\\") {
                                     $strip(0,1);
                                     $this->begin("emu");
                                   } else {
                                     $this->begin("mu");
                                   }
                                   if($this->yy->text) return 'CONTENT';
                                   
                                 
break;
case 1:return 14;
break;
case 2:
                                    if (substr($this->yy->text, -1) !== "\\") $this->popState();
                                    if (substr($this->yy->text, -1) === "\\") $strip(0, 1);
                                   return 14;
                                 
break;
case 3:
                                  $strip(0,4); $this->popState(); return 'COMMENT';
                                 
break;
case 4:return 25;
break;
case 5:return 16;
break;
case 6:return 20;
break;
case 7:return 19;
break;
case 8:return 19;
break;
case 9:return 23;
break;
case 10:return 22;
break;
case 11:$this->popState(); $this->begin('com');
break;
case 12:
                                  $strip(3,5); $this->popState(); return 'COMMENT';
                                 
break;
case 13:return 22;
break;
case 14:return 39;
break;
case 15:return 38;
break;
case 16:return 38;
break;
case 17:return 42;
break;
case 18:// ignore whitespace
break;
case 19:$this->popState(); return 24;
break;
case 20:$this->popState(); return 18;
break;
case 21:
                                  $this->yy->text = str_replace('\"', '"', $strip(1,2)); return 'STRING';
                                 
break;
case 22:
                                  $this->yy->text = str_replace("\'", "'", $strip(1,2)); return 'STRING';
                                 
break;
case 23:return 40;
break;
case 24:return 34;
break;
case 25:return 34;
break;
case 26:return 33;
break;
case 27:return 38;
break;
case 28:
                  $this->yy->text = $strip(1,2); return 'ID';
                 
break;
case 29:return 'INVALID';
break;
case 30:return 5;
break;
}

    }
}

class ParserLocation
{
    public $firstLine = 1;
    public $lastLine = 0;
    public $firstColumn = 1;
    public $lastColumn = 0;
    public $range;

    public function __construct($firstLine = 1, $lastLine = 0, $firstColumn = 1, $lastColumn = 0)
    {
        $this->firstLine = $firstLine;
        $this->lastLine = $lastLine;
        $this->firstColumn = $firstColumn;
        $this->lastColumn = $lastColumn;
    }

    public function Range($range)
    {
        $this->range = $range;
    }

    public function __clone()
    {
        return new ParserLocation($this->firstLine, $this->lastLine, $this->firstColumn, $this->lastColumn);
    }
}

class ParserValue
{
    public $leng = 0;
    public $loc;
    public $lineNo = 0;
    public $text;

    function __clone() {
        $clone = new ParserValue();
        $clone->leng = $this->leng;
        if (isset($this->loc)) {
            $clone->loc = clone $this->loc;
        }
        $clone->lineNo = $this->lineNo;
        $clone->text = $this->text;
        return $clone;
    }

	public function value() {
		if ($this->text instanceof ParserValue) return $this->text->value();
		return $this->text;
	}

	public function __toString() {
		return (string) $this->value();
	}

	public $IdNode = "Jison\H_IdNode";
}

class H_IdNode
{
	public $value;
	public function __construct($value)
	{
		echo "New IdNode ";
		print_r($value);
		$this->value = $value;
	}

}

class LexerConditions
{
    public $rules;
    public $inclusive;

    function __construct($rules, $inclusive)
    {
        $this->rules = $rules;
        $this->inclusive = $inclusive;
    }
}

class ParserProduction
{
    public $len = 0;
    public $symbol;

    public function __construct($symbol, $len = 0)
    {
        $this->symbol = $symbol;
        $this->len = $len;
    }
}

class ParserCachedAction
{
    public $action;
    public $symbol;

    function __construct($action, $symbol = null)
    {
        $this->action = $action;
        $this->symbol = $symbol;
    }
}

class ParserAction
{
    public $action;
    public $state;
    public $symbol;

    function __construct($action, &$state = null, &$symbol = null)
    {
        $this->action = $action;
        $this->state = $state;
        $this->symbol = $symbol;
    }
}

class ParserSymbol
{
    public $name;
    public $index = -1;
    public $symbols = array();
    public $symbolsByName = array();

    function __construct($name, $index)
    {
        $this->name = $name;
        $this->index = $index;
    }

    public function addAction($a)
    {
        $this->symbols[$a->index] = $this->symbolsByName[$a->name] = $a;
    }
}

class JisonError extends \Exception {
}

class RunTimeError extends JisonError {
    public $text;
    public $state;
    public $symbol;
    public $lineNo;
    public $loc;
}

class ParserError extends JisonError
{
    public $text;
    public $state;
    public $symbol;
    public $lineNo;
    public $loc;
    public $expected;

    function __construct($msg,$text, $state, $symbol, $lineNo, $loc, $expected)
    {
	    parent::__construct($msg);
        $this->text = $text;
        $this->state = $state;
        $this->symbol = $symbol;
        $this->lineNo = $lineNo;
        $this->loc = $loc;
        $this->expected = $expected;
    }
}

class LexerError extends JisonError
{
    public $text;
    public $token;
    public $lineNo;

    public function __construct($msg, $text, $token, $lineNo)
    {
	    parent::__construct($msg);
        $this->text = $text;
        $this->token = $token;
        $this->lineNo = $lineNo;
    }
}

class ParserState
{
    public $index;
    public $actions = array();

    function __construct($index)
    {
        $this->index = $index;
    }

    public function setActions(&$actions)
    {
        $this->actions = $actions;
    }
}

class ParserRange
{
    public $x;
    public $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}