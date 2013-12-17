/* lexical grammar */
%lex


%x mu emu com

%{

//js
function strip(start, end) {
  return yytext = yytext.substr(start, yyleng-end);
}
//php $strip = function($s, $e) { return $this->yy->text = substr($this->yy->text, $s, $this->yy->leng - $e); };

%}

LEFT_STRIP    "~"
RIGHT_STRIP   "~"

LOOKAHEAD           [=~}\s\/.]
LITERAL_LOOKAHEAD   [~}\s]

/*
ID is the inverse of control characters.
Control characters ranges:
  [\s]          Whitespace
  [!"#%-,\./]   !, ", #, %, &, ', (, ), *, +, ,, ., /,  Exceptions in range: $, -
  [;->@]        ;, <, =, >, @,                          Exceptions in range: :, ?
  [\[-\^`]      [, \, ], ^, `,                          Exceptions in range: _
  [\{-~]        {, |, }, ~
*/
ID    [^\s!"#%-,\.\/;->@\[-\^`\{-~]+/{LOOKAHEAD}

%%

[^\x00]*?/("{{")                 {
                                   //js
                                   if(yytext.slice(-2) === "\\\\") {
                                     strip(0,1);
                                     this.begin("mu");
                                   } else if(yytext.slice(-1) === "\\") {
                                     strip(0,1);
                                     this.begin("emu");
                                   } else {
                                     this.begin("mu");
                                   }
                                   if(yytext) return 'CONTENT';
                                   /*php
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
                                   */
                                 }

[^\x00]+                         return 'CONTENT';

<emu>[^\x00]{2,}?/("{{"|<<EOF>>) {
                                   //js
                                   if(yytext.slice(-1) !== "\\") this.popState();
                                   if(yytext.slice(-1) === "\\") strip(0,1);
                                   //php if (substr($this->yy->text, -1) !== "\\") $this->popState();
                                   //php if (substr($this->yy->text, -1) === "\\") $strip(0, 1);
                                   return 'CONTENT';
                                 }

<com>[\s\S]*?"--}}"              {
                                 //js
                                 strip(0,4); this.popState(); return 'COMMENT';
                                 //php $strip(0,4); $this->popState(); return 'COMMENT';
                                 }
<mu>"{{"{LEFT_STRIP}?">"         return 'OPEN_PARTIAL';
<mu>"{{"{LEFT_STRIP}?"#"         return 'OPEN_BLOCK';
<mu>"{{"{LEFT_STRIP}?"/"         return 'OPEN_ENDBLOCK';
<mu>"{{"{LEFT_STRIP}?"^"         return 'OPEN_INVERSE';
<mu>"{{"{LEFT_STRIP}?\s*"else"   return 'OPEN_INVERSE';
<mu>"{{"{LEFT_STRIP}?"{"         return 'OPEN_UNESCAPED';
<mu>"{{"{LEFT_STRIP}?"&"         return 'OPEN';
<mu>"{{!--"                      this.popState(); this.begin('com');
<mu>"{{!"[\s\S]*?"}}"            {
                                 //js
                                 strip(3,5); this.popState(); return 'COMMENT';
                                 //php $strip(3,5); this.popState(); return 'COMMENT';
                                 }
<mu>"{{"{LEFT_STRIP}?            return 'OPEN';

<mu>"="                          return 'EQUALS';
<mu>".."                         return 'ID';
<mu>"."/{LOOKAHEAD}              return 'ID';
<mu>[\/.]                        return 'SEP';
<mu>\s+                          // ignore whitespace
<mu>"}"{RIGHT_STRIP}?"}}"        this.popState(); return 'CLOSE_UNESCAPED';
<mu>{RIGHT_STRIP}?"}}"           this.popState(); return 'CLOSE';
<mu>'"'("\\"["]|[^"])*'"'        {
                                 //js
                                 yytext = strip(1,2).replace(/\\"/g,'"'); return 'STRING';
                                 //php $this->yy->text = str_replace('\"', '"', $strip(1,2)); return 'STRING';
                                 }
<mu>"'"("\\"[']|[^'])*"'"        {
                                 //js
                                 yytext = strip(1,2).replace(/\\'/g,"'"); return 'STRING';
                                 //php $this->yy->text = str_replace("\'", "'", $strip(1,2)); return 'STRING';
                                 }
<mu>"@"                          return 'DATA';
<mu>"true"/{LITERAL_LOOKAHEAD}   return 'BOOLEAN';
<mu>"false"/{LITERAL_LOOKAHEAD}  return 'BOOLEAN';
<mu>\-?[0-9]+/{LITERAL_LOOKAHEAD} return 'INTEGER';

<mu>{ID}                         return 'ID';

<mu>'['[^\]]*']'  {
                 //js
                 yytext = strip(1,2); return 'ID';
                 //php $this->yy->text = $strip(1,2); return 'ID';
                 }
<mu>.                            return 'INVALID';

<INITIAL,mu><<EOF>>              return 'EOF';


/lex



/* handlebars.yy: */
%start root

%ebnf

%{

function stripFlags(open, close) {
  return {
    left: open[2] === '~',
    right: close[0] === '~' || close[1] === '~'
  };
}

%}

%%

root
  : statements EOF { return new yy.ProgramNode($1); }
  | EOF { return new yy.ProgramNode([]); }
  ;

program
  : simpleInverse statements -> new yy.ProgramNode([], $1, $2)
  | statements simpleInverse statements -> new yy.ProgramNode($1, $2, $3)
  | statements simpleInverse -> new yy.ProgramNode($1, $2, [])
  | statements -> new yy.ProgramNode($1)
  | simpleInverse -> new yy.ProgramNode([])
  | "" -> new yy.ProgramNode([])
  ;

statements
  : statement -> [$1]
  | statements statement { $1.push($2); $$ = $1; }
  ;

statement
  : openInverse program closeBlock -> new yy.BlockNode($1, $2.inverse, $2, $3)
  | openBlock program closeBlock -> new yy.BlockNode($1, $2, $2.inverse, $3)
  | mustache -> $1
  | partial -> $1
  | CONTENT -> new yy.ContentNode($1)
  | COMMENT -> new yy.CommentNode($1)
  ;

openBlock
  : OPEN_BLOCK inMustache CLOSE -> new yy.MustacheNode($2[0], $2[1], $1, stripFlags($1, $3))
  ;

openInverse
  : OPEN_INVERSE inMustache CLOSE -> new yy.MustacheNode($2[0], $2[1], $1, stripFlags($1, $3))
  ;

closeBlock
  : OPEN_ENDBLOCK path CLOSE { //js
                             $$ = {path: $2, strip: stripFlags($1, $3)};
                             //php $$ = (object)array('path' => $2, 'strip' => $stripFlags($1, $3));
                             }
  ;

mustache
  // Parsing out the '&' escape token at AST level saves ~500 bytes after min due to the removal of one parser node.
  // This also allows for handler unification as all mustache node instances can utilize the same handler
  : OPEN inMustache CLOSE -> new yy.MustacheNode($2[0], $2[1], $1, stripFlags($1, $3))
  | OPEN_UNESCAPED inMustache CLOSE_UNESCAPED -> new yy.MustacheNode($2[0], $2[1], $1, stripFlags($1, $3))
  ;


partial
  : OPEN_PARTIAL partialName path? CLOSE -> new yy.PartialNode($2, $3, stripFlags($1, $4))
  ;

simpleInverse
  : OPEN_INVERSE CLOSE -> stripFlags($1, $2)
  ;

inMustache
  : path param* hash? -> [[$1].concat($2), $3]
  | dataName -> [[$1], null]
  ;

param
  : path -> $1
  | STRING -> new yy.StringNode($1)
  | INTEGER -> new yy.IntegerNode($1)
  | BOOLEAN -> new yy.BooleanNode($1)
  | dataName -> $1
  ;

hash
  : hashSegment+ -> new yy.HashNode($1)
  ;

hashSegment
  : ID EQUALS param -> [$1, $3]
  ;

partialName
  : path -> new yy.PartialNameNode($1)
  | STRING -> new yy.PartialNameNode(new yy.StringNode($1))
  | INTEGER -> new yy.PartialNameNode(new yy.IntegerNode($1))
  ;

dataName
  : DATA path -> new yy.DataNode($2)
  ;

path
  : pathSegments -> new yy.IdNode($1)
  ;

pathSegments
  : pathSegments SEP ID {
                        //js
                        $1.push({part: $3, separator: $2}); $$ = $1;
                        //php $1.push((object)array('part' => $3, 'separator' => $2)); $$ = $1;
                        }
  | ID {
  //js
  $$ = [{part: $1}];
  //php $$ = array((object)array('part' => $1));
  }
  ;




