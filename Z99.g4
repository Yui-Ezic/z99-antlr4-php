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
    | arithmExpression addOp term
    ;

term
    : factor
    | term multOp factor
    ; 

factor
    : Ident
    | constant
    | LBracket arithmExpression RBracket
    ;

addOp
    : Plus
    | Minus
    ;

multOp
    : Star
    | Slash
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

LBracket // Left Bracket
    : '('
    ;

RBracket // Right Bracket
    : ')'
    ;

Plus
    : '+'
    ;

Minus
    : '-'
    ;

Star
    : '*'
    ;

Slash
    : '/'
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