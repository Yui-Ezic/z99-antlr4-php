grammar Z99;

program
    : 'program' Ident 'var' declareList Semi 'begin' statementList Semi 'end.' EOF
    ;      

// DeclareList
declareList
    : declaration (Semi declaration)*
    ;

declaration
    : identList Colon Type
    ;

identList
    : Ident (Comma Ident)*
    ;

// StatementList
statementList
    : statement (Semi statement)*
    ;

statement
    : assign
    | input
    | output
    | ifStatement
    | repeatStatement
    ;

// I/O
input
    : 'read' LBracket identList RBracket
    ;
 
output
    : 'write' LBracket identList RBracket
    ;

// Branch
ifStatement
    : 'if' expression 'then' statementList Semi 'fi'
    ;

// Repeat
repeatStatement
    : 'repeat' statementList Semi 'until' expression
    ;

// Assign
assign
    : Ident AssignOp expression
    ; 

// Expression
expression
    : arithmExpression | boolExpr
    ;

boolExpr
    : arithmExpression RelOp arithmExpression
    ;

arithmExpression
    : term
    | arithmExpression AddOp term
    ;

term
    : factor
    | term MultOp factor
    ; 

factor
    : Ident
    | constant
    | LBracket arithmExpression RBracket
    ;

// Const
constant
    : IntNum
    | RealNum
    | BoolConst
    ;

RealNum
    : Sign? UnsignedReal
    ;

IntNum
    : Sign? UnsignedInt
    ;

BoolConst
    : True
    | False
    ;

UnsignedInt
    : Digit+
    ;

UnsignedReal
    : Dot UnsignedInt
    | UnsignedInt Dot UnsignedInt?
    ;

/*BracketsOp
    : LBracket
    | RBracket
    ;*/

// Tokens

Type 
    : 'int'
    | 'real'
    | 'bool'
    ;

Ident 
    : Letter LetterOrDigit*
    ;


// Common Rules

Semi
    : ';'
    ;

Colon
    : ':'
    ;

Comma
    : ','
    ;

Dot
    : '.'
    ;

AssignOp
    : '='
    ;

RelOp
    : '<'
    | '<='
    | '=='
    | '>'
    | '>='
    | '!='
    ;

AddOp
    : Plus
    | Minus
    ;

MultOp
    : Star
    | Slash
    ;


// Fragment rules

fragment LetterOrDigit
    : Letter
    | Digit
    ;

fragment Letter
    : [a-zA-Z]
    ;

fragment Digit
    : [0-9]
    ;

//TODO:: Unit in "BracketsOp"
LBracket // Left Bracket
    : '('
    ;

RBracket // Right Bracket
    : ')'
    ;

fragment Plus
    : '+'
    ;

fragment Minus
    : '-'
    ;

fragment Star
    : '*'
    ;

fragment Slash
    : '/'
    ;

fragment True
    : 'true'
    ;

fragment False
    : 'false'
    ;

fragment Sign
    : Plus
    | Minus
    ;

// Whitespace
WS
    : [ \t\r\n\u000C]+ -> skip
    ;