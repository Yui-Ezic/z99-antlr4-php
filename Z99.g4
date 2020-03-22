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
    | branchStatement
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
branchStatement
    : 'if' expression 'then' statementList Semi 'fi'
    ;

// Repeat
repeatStatement
    : 'repeat' statementList Semi 'until' boolExpr
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

// Tokens

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

fragment UnsignedInt
    : Digit+
    ;

fragment UnsignedReal
    : Dot UnsignedInt
    | UnsignedInt Dot UnsignedInt?
    ;

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