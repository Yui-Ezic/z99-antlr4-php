<?php

/*
 * Generated from Z99.g4 by ANTLR 4.8
 */

namespace Generated;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see Z99Parser}.
 */
interface Z99Listener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see Z99Parser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::declareList()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclareList(Context\DeclareListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::declareList()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclareList(Context\DeclareListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaration(Context\DeclarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaration(Context\DeclarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::identList()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentList(Context\IdentListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::identList()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentList(Context\IdentListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::statementList()}.
	 * @param $context The parse tree.
	 */
	public function enterStatementList(Context\StatementListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::statementList()}.
	 * @param $context The parse tree.
	 */
	public function exitStatementList(Context\StatementListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::input()}.
	 * @param $context The parse tree.
	 */
	public function enterInput(Context\InputContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::input()}.
	 * @param $context The parse tree.
	 */
	public function exitInput(Context\InputContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::output()}.
	 * @param $context The parse tree.
	 */
	public function enterOutput(Context\OutputContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::output()}.
	 * @param $context The parse tree.
	 */
	public function exitOutput(Context\OutputContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::branchStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterBranchStatement(Context\BranchStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::branchStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitBranchStatement(Context\BranchStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::repeatStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterRepeatStatement(Context\RepeatStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::repeatStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitRepeatStatement(Context\RepeatStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::assign()}.
	 * @param $context The parse tree.
	 */
	public function enterAssign(Context\AssignContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::assign()}.
	 * @param $context The parse tree.
	 */
	public function exitAssign(Context\AssignContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::boolExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterBoolExpr(Context\BoolExprContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::boolExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitBoolExpr(Context\BoolExprContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::arithmExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterArithmExpression(Context\ArithmExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::arithmExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitArithmExpression(Context\ArithmExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::term()}.
	 * @param $context The parse tree.
	 */
	public function enterTerm(Context\TermContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::term()}.
	 * @param $context The parse tree.
	 */
	public function exitTerm(Context\TermContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterFactor(Context\FactorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitFactor(Context\FactorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::addOp()}.
	 * @param $context The parse tree.
	 */
	public function enterAddOp(Context\AddOpContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::addOp()}.
	 * @param $context The parse tree.
	 */
	public function exitAddOp(Context\AddOpContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::multOp()}.
	 * @param $context The parse tree.
	 */
	public function enterMultOp(Context\MultOpContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::multOp()}.
	 * @param $context The parse tree.
	 */
	public function exitMultOp(Context\MultOpContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Z99Parser::constant()}.
	 * @param $context The parse tree.
	 */
	public function enterConstant(Context\ConstantContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Z99Parser::constant()}.
	 * @param $context The parse tree.
	 */
	public function exitConstant(Context\ConstantContext $context) : void;
}