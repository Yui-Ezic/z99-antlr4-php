grammar Z99;

// Keywords

Begin
    : 'begin'
    ;

End
    : 'end.'
    ;

Var
    : 'var'
    ;

Read
    : 'read'
    ;

Write
    : 'write'
    ;

If
    : 'if'
    ;

Then
    : 'then'
    ;

Fi
    : 'fi'
    ;

Repeat
    : 'repeat'
    ;

Until
    : 'until'
    ;

Program
    : 'program'
    ;

// Main rule

program
    : Program Ident Var declareList Semi Begin statementList Semi End EOF
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
    : Read LBracket identList RBracket
    ;
 
output
    : Write LBracket identList RBracket
    ;

// Branch
branchStatement
    : If expression Then statementList Semi Fi
    ;

// Repeat
repeatStatement
    : Repeat statementList Semi Until boolExpr
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
    | term addOp arithmExpression
    ;

term
    : factor
    | factor multOp term
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