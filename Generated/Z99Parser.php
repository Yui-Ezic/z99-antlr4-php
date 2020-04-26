<?php

/*
 * Generated from Z99.g4 by ANTLR 4.8
 */

namespace Generated {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class Z99Parser extends Parser
	{
		public const Begin = 1, End = 2, Var = 3, Read = 4, Write = 5, If = 6, 
               Then = 7, Fi = 8, Repeat = 9, Until = 10, Program = 11, RealNum = 12, 
               IntNum = 13, BoolConst = 14, Type = 15, Ident = 16, Semi = 17, 
               Colon = 18, Comma = 19, Dot = 20, AssignOp = 21, RelOp = 22, 
               LBracket = 23, RBracket = 24, Plus = 25, Minus = 26, Star = 27, 
               Slash = 28, WS = 29;

		public const RULE_program = 0, RULE_declareList = 1, RULE_declaration = 2, 
               RULE_identList = 3, RULE_statementList = 4, RULE_statement = 5, 
               RULE_input = 6, RULE_output = 7, RULE_branchStatement = 8, 
               RULE_repeatStatement = 9, RULE_assign = 10, RULE_expression = 11, 
               RULE_boolExpr = 12, RULE_arithmExpression = 13, RULE_term = 14, 
               RULE_factor = 15, RULE_addOp = 16, RULE_multOp = 17, RULE_constant = 18;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'declareList', 'declaration', 'identList', 'statementList', 
			'statement', 'input', 'output', 'branchStatement', 'repeatStatement', 
			'assign', 'expression', 'boolExpr', 'arithmExpression', 'term', 'factor', 
			'addOp', 'multOp', 'constant'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'begin'", "'end.'", "'var'", "'read'", "'write'", "'if'", "'then'", 
		    "'fi'", "'repeat'", "'until'", "'program'", null, null, null, null, 
		    null, "';'", "':'", "','", "'.'", "'='", null, "'('", "')'", "'+'", 
		    "'-'", "'*'", "'/'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "Begin", "End", "Var", "Read", "Write", "If", "Then", "Fi", 
		    "Repeat", "Until", "Program", "RealNum", "IntNum", "BoolConst", "Type", 
		    "Ident", "Semi", "Colon", "Comma", "Dot", "AssignOp", "RelOp", "LBracket", 
		    "RBracket", "Plus", "Minus", "Star", "Slash", "WS"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{1F}\u{96}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}" .
		    "\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}" .
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}" .
		    "\u{9}\u{14}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{7}\u{3}\u{37}\u{A}\u{3}\u{C}\u{3}\u{E}\u{3}" .
		    "\u{3A}\u{B}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{5}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{7}\u{5}\u{43}\u{A}\u{5}\u{C}\u{5}\u{E}\u{5}" .
		    "\u{46}\u{B}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{7}\u{6}\u{4B}\u{A}" .
		    "\u{6}\u{C}\u{6}\u{E}\u{6}\u{4E}\u{B}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{3}\u{7}\u{5}\u{7}\u{55}\u{A}\u{7}\u{3}\u{8}\u{3}" .
		    "\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}" .
		    "\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}" .
		    "\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}" .
		    "\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}" .
		    "\u{D}\u{3}\u{D}\u{5}\u{D}\u{74}\u{A}\u{D}\u{3}\u{E}\u{3}\u{E}\u{3}" .
		    "\u{E}\u{3}\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}" .
		    "\u{5}\u{F}\u{7F}\u{A}\u{F}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}" .
		    "\u{3}\u{10}\u{5}\u{10}\u{86}\u{A}\u{10}\u{3}\u{11}\u{3}\u{11}\u{3}" .
		    "\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{5}\u{11}\u{8E}\u{A}\u{11}" .
		    "\u{3}\u{12}\u{3}\u{12}\u{3}\u{13}\u{3}\u{13}\u{3}\u{14}\u{3}\u{14}" .
		    "\u{3}\u{14}\u{2}\u{2}\u{15}\u{2}\u{4}\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}" .
		    "\u{12}\u{14}\u{16}\u{18}\u{1A}\u{1C}\u{1E}\u{20}\u{22}\u{24}\u{26}" .
		    "\u{2}\u{5}\u{3}\u{2}\u{1B}\u{1C}\u{3}\u{2}\u{1D}\u{1E}\u{3}\u{2}\u{E}" .
		    "\u{10}\u{2}\u{8E}\u{2}\u{28}\u{3}\u{2}\u{2}\u{2}\u{4}\u{33}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{6}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{8}\u{3F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{A}\u{47}\u{3}\u{2}\u{2}\u{2}\u{C}\u{54}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E}\u{56}\u{3}\u{2}\u{2}\u{2}\u{10}\u{5B}\u{3}\u{2}\u{2}\u{2}\u{12}" .
		    "\u{60}\u{3}\u{2}\u{2}\u{2}\u{14}\u{67}\u{3}\u{2}\u{2}\u{2}\u{16}\u{6D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{18}\u{73}\u{3}\u{2}\u{2}\u{2}\u{1A}\u{75}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1C}\u{7E}\u{3}\u{2}\u{2}\u{2}\u{1E}\u{85}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{20}\u{8D}\u{3}\u{2}\u{2}\u{2}\u{22}\u{8F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{24}\u{91}\u{3}\u{2}\u{2}\u{2}\u{26}\u{93}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{28}\u{29}\u{7}\u{D}\u{2}\u{2}\u{29}\u{2A}\u{7}\u{12}\u{2}\u{2}" .
		    "\u{2A}\u{2B}\u{7}\u{5}\u{2}\u{2}\u{2B}\u{2C}\u{5}\u{4}\u{3}\u{2}\u{2C}" .
		    "\u{2D}\u{7}\u{13}\u{2}\u{2}\u{2D}\u{2E}\u{7}\u{3}\u{2}\u{2}\u{2E}" .
		    "\u{2F}\u{5}\u{A}\u{6}\u{2}\u{2F}\u{30}\u{7}\u{13}\u{2}\u{2}\u{30}" .
		    "\u{31}\u{7}\u{4}\u{2}\u{2}\u{31}\u{32}\u{7}\u{2}\u{2}\u{3}\u{32}\u{3}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{33}\u{38}\u{5}\u{6}\u{4}\u{2}\u{34}\u{35}\u{7}" .
		    "\u{13}\u{2}\u{2}\u{35}\u{37}\u{5}\u{6}\u{4}\u{2}\u{36}\u{34}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{37}\u{3A}\u{3}\u{2}\u{2}\u{2}\u{38}\u{36}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{38}\u{39}\u{3}\u{2}\u{2}\u{2}\u{39}\u{5}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{3A}\u{38}\u{3}\u{2}\u{2}\u{2}\u{3B}\u{3C}\u{5}\u{8}\u{5}\u{2}" .
		    "\u{3C}\u{3D}\u{7}\u{14}\u{2}\u{2}\u{3D}\u{3E}\u{7}\u{11}\u{2}\u{2}" .
		    "\u{3E}\u{7}\u{3}\u{2}\u{2}\u{2}\u{3F}\u{44}\u{7}\u{12}\u{2}\u{2}\u{40}" .
		    "\u{41}\u{7}\u{15}\u{2}\u{2}\u{41}\u{43}\u{7}\u{12}\u{2}\u{2}\u{42}" .
		    "\u{40}\u{3}\u{2}\u{2}\u{2}\u{43}\u{46}\u{3}\u{2}\u{2}\u{2}\u{44}\u{42}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{44}\u{45}\u{3}\u{2}\u{2}\u{2}\u{45}\u{9}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{46}\u{44}\u{3}\u{2}\u{2}\u{2}\u{47}\u{4C}\u{5}\u{C}" .
		    "\u{7}\u{2}\u{48}\u{49}\u{7}\u{13}\u{2}\u{2}\u{49}\u{4B}\u{5}\u{C}" .
		    "\u{7}\u{2}\u{4A}\u{48}\u{3}\u{2}\u{2}\u{2}\u{4B}\u{4E}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4C}\u{4A}\u{3}\u{2}\u{2}\u{2}\u{4C}\u{4D}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{4D}\u{B}\u{3}\u{2}\u{2}\u{2}\u{4E}\u{4C}\u{3}\u{2}\u{2}\u{2}\u{4F}" .
		    "\u{55}\u{5}\u{16}\u{C}\u{2}\u{50}\u{55}\u{5}\u{E}\u{8}\u{2}\u{51}" .
		    "\u{55}\u{5}\u{10}\u{9}\u{2}\u{52}\u{55}\u{5}\u{12}\u{A}\u{2}\u{53}" .
		    "\u{55}\u{5}\u{14}\u{B}\u{2}\u{54}\u{4F}\u{3}\u{2}\u{2}\u{2}\u{54}" .
		    "\u{50}\u{3}\u{2}\u{2}\u{2}\u{54}\u{51}\u{3}\u{2}\u{2}\u{2}\u{54}\u{52}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{54}\u{53}\u{3}\u{2}\u{2}\u{2}\u{55}\u{D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{56}\u{57}\u{7}\u{6}\u{2}\u{2}\u{57}\u{58}\u{7}\u{19}" .
		    "\u{2}\u{2}\u{58}\u{59}\u{5}\u{8}\u{5}\u{2}\u{59}\u{5A}\u{7}\u{1A}" .
		    "\u{2}\u{2}\u{5A}\u{F}\u{3}\u{2}\u{2}\u{2}\u{5B}\u{5C}\u{7}\u{7}\u{2}" .
		    "\u{2}\u{5C}\u{5D}\u{7}\u{19}\u{2}\u{2}\u{5D}\u{5E}\u{5}\u{8}\u{5}" .
		    "\u{2}\u{5E}\u{5F}\u{7}\u{1A}\u{2}\u{2}\u{5F}\u{11}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{60}\u{61}\u{7}\u{8}\u{2}\u{2}\u{61}\u{62}\u{5}\u{18}\u{D}" .
		    "\u{2}\u{62}\u{63}\u{7}\u{9}\u{2}\u{2}\u{63}\u{64}\u{5}\u{A}\u{6}\u{2}" .
		    "\u{64}\u{65}\u{7}\u{13}\u{2}\u{2}\u{65}\u{66}\u{7}\u{A}\u{2}\u{2}" .
		    "\u{66}\u{13}\u{3}\u{2}\u{2}\u{2}\u{67}\u{68}\u{7}\u{B}\u{2}\u{2}\u{68}" .
		    "\u{69}\u{5}\u{A}\u{6}\u{2}\u{69}\u{6A}\u{7}\u{13}\u{2}\u{2}\u{6A}" .
		    "\u{6B}\u{7}\u{C}\u{2}\u{2}\u{6B}\u{6C}\u{5}\u{1A}\u{E}\u{2}\u{6C}" .
		    "\u{15}\u{3}\u{2}\u{2}\u{2}\u{6D}\u{6E}\u{7}\u{12}\u{2}\u{2}\u{6E}" .
		    "\u{6F}\u{7}\u{17}\u{2}\u{2}\u{6F}\u{70}\u{5}\u{18}\u{D}\u{2}\u{70}" .
		    "\u{17}\u{3}\u{2}\u{2}\u{2}\u{71}\u{74}\u{5}\u{1C}\u{F}\u{2}\u{72}" .
		    "\u{74}\u{5}\u{1A}\u{E}\u{2}\u{73}\u{71}\u{3}\u{2}\u{2}\u{2}\u{73}" .
		    "\u{72}\u{3}\u{2}\u{2}\u{2}\u{74}\u{19}\u{3}\u{2}\u{2}\u{2}\u{75}\u{76}" .
		    "\u{5}\u{1C}\u{F}\u{2}\u{76}\u{77}\u{7}\u{18}\u{2}\u{2}\u{77}\u{78}" .
		    "\u{5}\u{1C}\u{F}\u{2}\u{78}\u{1B}\u{3}\u{2}\u{2}\u{2}\u{79}\u{7F}" .
		    "\u{5}\u{1E}\u{10}\u{2}\u{7A}\u{7B}\u{5}\u{1E}\u{10}\u{2}\u{7B}\u{7C}" .
		    "\u{5}\u{22}\u{12}\u{2}\u{7C}\u{7D}\u{5}\u{1C}\u{F}\u{2}\u{7D}\u{7F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{7E}\u{79}\u{3}\u{2}\u{2}\u{2}\u{7E}\u{7A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{7F}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{80}\u{86}\u{5}\u{20}" .
		    "\u{11}\u{2}\u{81}\u{82}\u{5}\u{20}\u{11}\u{2}\u{82}\u{83}\u{5}\u{24}" .
		    "\u{13}\u{2}\u{83}\u{84}\u{5}\u{1E}\u{10}\u{2}\u{84}\u{86}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{85}\u{80}\u{3}\u{2}\u{2}\u{2}\u{85}\u{81}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{86}\u{1F}\u{3}\u{2}\u{2}\u{2}\u{87}\u{8E}\u{7}\u{12}\u{2}" .
		    "\u{2}\u{88}\u{8E}\u{5}\u{26}\u{14}\u{2}\u{89}\u{8A}\u{7}\u{19}\u{2}" .
		    "\u{2}\u{8A}\u{8B}\u{5}\u{1C}\u{F}\u{2}\u{8B}\u{8C}\u{7}\u{1A}\u{2}" .
		    "\u{2}\u{8C}\u{8E}\u{3}\u{2}\u{2}\u{2}\u{8D}\u{87}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{8D}\u{88}\u{3}\u{2}\u{2}\u{2}\u{8D}\u{89}\u{3}\u{2}\u{2}\u{2}\u{8E}" .
		    "\u{21}\u{3}\u{2}\u{2}\u{2}\u{8F}\u{90}\u{9}\u{2}\u{2}\u{2}\u{90}\u{23}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{91}\u{92}\u{9}\u{3}\u{2}\u{2}\u{92}\u{25}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{93}\u{94}\u{9}\u{4}\u{2}\u{2}\u{94}\u{27}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A}\u{38}\u{44}\u{4C}\u{54}\u{73}\u{7E}\u{85}\u{8D}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.8', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "Z99.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function program() : Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(38);
		        $this->match(self::Program);
		        $this->setState(39);
		        $this->match(self::Ident);
		        $this->setState(40);
		        $this->match(self::Var);
		        $this->setState(41);
		        $this->declareList();
		        $this->setState(42);
		        $this->match(self::Semi);
		        $this->setState(43);
		        $this->match(self::Begin);
		        $this->setState(44);
		        $this->statementList();
		        $this->setState(45);
		        $this->match(self::Semi);
		        $this->setState(46);
		        $this->match(self::End);
		        $this->setState(47);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declareList() : Context\DeclareListContext
		{
		    $localContext = new Context\DeclareListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_declareList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(49);
		        $this->declaration();
		        $this->setState(54);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(50);
		        		$this->match(self::Semi);
		        		$this->setState(51);
		        		$this->declaration(); 
		        	}

		        	$this->setState(56);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaration() : Context\DeclarationContext
		{
		    $localContext = new Context\DeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_declaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(57);
		        $this->identList();
		        $this->setState(58);
		        $this->match(self::Colon);
		        $this->setState(59);
		        $this->match(self::Type);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function identList() : Context\IdentListContext
		{
		    $localContext = new Context\IdentListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_identList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(61);
		        $this->match(self::Ident);
		        $this->setState(66);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::Comma) {
		        	$this->setState(62);
		        	$this->match(self::Comma);
		        	$this->setState(63);
		        	$this->match(self::Ident);
		        	$this->setState(68);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statementList() : Context\StatementListContext
		{
		    $localContext = new Context\StatementListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_statementList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(69);
		        $this->statement();
		        $this->setState(74);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(70);
		        		$this->match(self::Semi);
		        		$this->setState(71);
		        		$this->statement(); 
		        	}

		        	$this->setState(76);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statement() : Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_statement);

		    try {
		        $this->setState(82);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::Ident:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(77);
		            	$this->assign();
		            	break;

		            case self::Read:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(78);
		            	$this->input();
		            	break;

		            case self::Write:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(79);
		            	$this->output();
		            	break;

		            case self::If:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(80);
		            	$this->branchStatement();
		            	break;

		            case self::Repeat:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(81);
		            	$this->repeatStatement();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function input() : Context\InputContext
		{
		    $localContext = new Context\InputContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_input);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(84);
		        $this->match(self::Read);
		        $this->setState(85);
		        $this->match(self::LBracket);
		        $this->setState(86);
		        $this->identList();
		        $this->setState(87);
		        $this->match(self::RBracket);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function output() : Context\OutputContext
		{
		    $localContext = new Context\OutputContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_output);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(89);
		        $this->match(self::Write);
		        $this->setState(90);
		        $this->match(self::LBracket);
		        $this->setState(91);
		        $this->identList();
		        $this->setState(92);
		        $this->match(self::RBracket);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function branchStatement() : Context\BranchStatementContext
		{
		    $localContext = new Context\BranchStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_branchStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(94);
		        $this->match(self::If);
		        $this->setState(95);
		        $this->expression();
		        $this->setState(96);
		        $this->match(self::Then);
		        $this->setState(97);
		        $this->statementList();
		        $this->setState(98);
		        $this->match(self::Semi);
		        $this->setState(99);
		        $this->match(self::Fi);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function repeatStatement() : Context\RepeatStatementContext
		{
		    $localContext = new Context\RepeatStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_repeatStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(101);
		        $this->match(self::Repeat);
		        $this->setState(102);
		        $this->statementList();
		        $this->setState(103);
		        $this->match(self::Semi);
		        $this->setState(104);
		        $this->match(self::Until);
		        $this->setState(105);
		        $this->boolExpr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assign() : Context\AssignContext
		{
		    $localContext = new Context\AssignContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_assign);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(107);
		        $this->match(self::Ident);
		        $this->setState(108);
		        $this->match(self::AssignOp);
		        $this->setState(109);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression() : Context\ExpressionContext
		{
		    $localContext = new Context\ExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_expression);

		    try {
		        $this->setState(113);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(111);
		        	    $this->arithmExpression();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(112);
		        	    $this->boolExpr();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function boolExpr() : Context\BoolExprContext
		{
		    $localContext = new Context\BoolExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_boolExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(115);
		        $this->arithmExpression();
		        $this->setState(116);
		        $this->match(self::RelOp);
		        $this->setState(117);
		        $this->arithmExpression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arithmExpression() : Context\ArithmExpressionContext
		{
		    $localContext = new Context\ArithmExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_arithmExpression);

		    try {
		        $this->setState(124);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(119);
		        	    $this->term();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(120);
		        	    $this->term();
		        	    $this->setState(121);
		        	    $this->addOp();
		        	    $this->setState(122);
		        	    $this->arithmExpression();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function term() : Context\TermContext
		{
		    $localContext = new Context\TermContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_term);

		    try {
		        $this->setState(131);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(126);
		        	    $this->factor();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(127);
		        	    $this->factor();
		        	    $this->setState(128);
		        	    $this->multOp();
		        	    $this->setState(129);
		        	    $this->term();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function factor() : Context\FactorContext
		{
		    $localContext = new Context\FactorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_factor);

		    try {
		        $this->setState(139);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::Ident:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(133);
		            	$this->match(self::Ident);
		            	break;

		            case self::RealNum:
		            case self::IntNum:
		            case self::BoolConst:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(134);
		            	$this->constant();
		            	break;

		            case self::LBracket:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(135);
		            	$this->match(self::LBracket);
		            	$this->setState(136);
		            	$this->arithmExpression();
		            	$this->setState(137);
		            	$this->match(self::RBracket);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function addOp() : Context\AddOpContext
		{
		    $localContext = new Context\AddOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_addOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(141);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::Plus || $_la === self::Minus)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function multOp() : Context\MultOpContext
		{
		    $localContext = new Context\MultOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_multOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(143);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::Star || $_la === self::Slash)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constant() : Context\ConstantContext
		{
		    $localContext = new Context\ConstantContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_constant);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(145);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::RealNum) | (1 << self::IntNum) | (1 << self::BoolConst))) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Generated\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Generated\Z99Parser;
	use Generated\Z99Listener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_program;
	    }

	    public function Program() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Program, 0);
	    }

	    public function Ident() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Ident, 0);
	    }

	    public function Var() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Var, 0);
	    }

	    public function declareList() : ?DeclareListContext
	    {
	    	return $this->getTypedRuleContext(DeclareListContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function Semi(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Z99Parser::Semi);
	    	}

	        return $this->getToken(Z99Parser::Semi, $index);
	    }

	    public function Begin() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Begin, 0);
	    }

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

	    public function End() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::End, 0);
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::EOF, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitProgram($this);
		    }
		}
	} 

	class DeclareListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_declareList;
	    }

	    /**
	     * @return array<DeclarationContext>|DeclarationContext|null
	     */
	    public function declaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(DeclarationContext::class);
	    	}

	        return $this->getTypedRuleContext(DeclarationContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function Semi(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Z99Parser::Semi);
	    	}

	        return $this->getToken(Z99Parser::Semi, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterDeclareList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitDeclareList($this);
		    }
		}
	} 

	class DeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_declaration;
	    }

	    public function identList() : ?IdentListContext
	    {
	    	return $this->getTypedRuleContext(IdentListContext::class, 0);
	    }

	    public function Colon() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Colon, 0);
	    }

	    public function Type() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Type, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitDeclaration($this);
		    }
		}
	} 

	class IdentListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_identList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function Ident(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Z99Parser::Ident);
	    	}

	        return $this->getToken(Z99Parser::Ident, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function Comma(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Z99Parser::Comma);
	    	}

	        return $this->getToken(Z99Parser::Comma, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterIdentList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitIdentList($this);
		    }
		}
	} 

	class StatementListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_statementList;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function Semi(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Z99Parser::Semi);
	    	}

	        return $this->getToken(Z99Parser::Semi, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterStatementList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitStatementList($this);
		    }
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_statement;
	    }

	    public function assign() : ?AssignContext
	    {
	    	return $this->getTypedRuleContext(AssignContext::class, 0);
	    }

	    public function input() : ?InputContext
	    {
	    	return $this->getTypedRuleContext(InputContext::class, 0);
	    }

	    public function output() : ?OutputContext
	    {
	    	return $this->getTypedRuleContext(OutputContext::class, 0);
	    }

	    public function branchStatement() : ?BranchStatementContext
	    {
	    	return $this->getTypedRuleContext(BranchStatementContext::class, 0);
	    }

	    public function repeatStatement() : ?RepeatStatementContext
	    {
	    	return $this->getTypedRuleContext(RepeatStatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitStatement($this);
		    }
		}
	} 

	class InputContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_input;
	    }

	    public function Read() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Read, 0);
	    }

	    public function LBracket() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::LBracket, 0);
	    }

	    public function identList() : ?IdentListContext
	    {
	    	return $this->getTypedRuleContext(IdentListContext::class, 0);
	    }

	    public function RBracket() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::RBracket, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterInput($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitInput($this);
		    }
		}
	} 

	class OutputContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_output;
	    }

	    public function Write() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Write, 0);
	    }

	    public function LBracket() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::LBracket, 0);
	    }

	    public function identList() : ?IdentListContext
	    {
	    	return $this->getTypedRuleContext(IdentListContext::class, 0);
	    }

	    public function RBracket() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::RBracket, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterOutput($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitOutput($this);
		    }
		}
	} 

	class BranchStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_branchStatement;
	    }

	    public function If() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::If, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function Then() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Then, 0);
	    }

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

	    public function Semi() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Semi, 0);
	    }

	    public function Fi() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Fi, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterBranchStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitBranchStatement($this);
		    }
		}
	} 

	class RepeatStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_repeatStatement;
	    }

	    public function Repeat() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Repeat, 0);
	    }

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

	    public function Semi() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Semi, 0);
	    }

	    public function Until() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Until, 0);
	    }

	    public function boolExpr() : ?BoolExprContext
	    {
	    	return $this->getTypedRuleContext(BoolExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterRepeatStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitRepeatStatement($this);
		    }
		}
	} 

	class AssignContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_assign;
	    }

	    public function Ident() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Ident, 0);
	    }

	    public function AssignOp() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::AssignOp, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterAssign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitAssign($this);
		    }
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_expression;
	    }

	    public function arithmExpression() : ?ArithmExpressionContext
	    {
	    	return $this->getTypedRuleContext(ArithmExpressionContext::class, 0);
	    }

	    public function boolExpr() : ?BoolExprContext
	    {
	    	return $this->getTypedRuleContext(BoolExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitExpression($this);
		    }
		}
	} 

	class BoolExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_boolExpr;
	    }

	    /**
	     * @return array<ArithmExpressionContext>|ArithmExpressionContext|null
	     */
	    public function arithmExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArithmExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ArithmExpressionContext::class, $index);
	    }

	    public function RelOp() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::RelOp, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterBoolExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitBoolExpr($this);
		    }
		}
	} 

	class ArithmExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_arithmExpression;
	    }

	    public function term() : ?TermContext
	    {
	    	return $this->getTypedRuleContext(TermContext::class, 0);
	    }

	    public function addOp() : ?AddOpContext
	    {
	    	return $this->getTypedRuleContext(AddOpContext::class, 0);
	    }

	    public function arithmExpression() : ?ArithmExpressionContext
	    {
	    	return $this->getTypedRuleContext(ArithmExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterArithmExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitArithmExpression($this);
		    }
		}
	} 

	class TermContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_term;
	    }

	    public function factor() : ?FactorContext
	    {
	    	return $this->getTypedRuleContext(FactorContext::class, 0);
	    }

	    public function multOp() : ?MultOpContext
	    {
	    	return $this->getTypedRuleContext(MultOpContext::class, 0);
	    }

	    public function term() : ?TermContext
	    {
	    	return $this->getTypedRuleContext(TermContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterTerm($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitTerm($this);
		    }
		}
	} 

	class FactorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_factor;
	    }

	    public function Ident() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Ident, 0);
	    }

	    public function constant() : ?ConstantContext
	    {
	    	return $this->getTypedRuleContext(ConstantContext::class, 0);
	    }

	    public function LBracket() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::LBracket, 0);
	    }

	    public function arithmExpression() : ?ArithmExpressionContext
	    {
	    	return $this->getTypedRuleContext(ArithmExpressionContext::class, 0);
	    }

	    public function RBracket() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::RBracket, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterFactor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitFactor($this);
		    }
		}
	} 

	class AddOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_addOp;
	    }

	    public function Plus() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Plus, 0);
	    }

	    public function Minus() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Minus, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterAddOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitAddOp($this);
		    }
		}
	} 

	class MultOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_multOp;
	    }

	    public function Star() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Star, 0);
	    }

	    public function Slash() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Slash, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterMultOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitMultOp($this);
		    }
		}
	} 

	class ConstantContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_constant;
	    }

	    public function IntNum() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::IntNum, 0);
	    }

	    public function RealNum() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::RealNum, 0);
	    }

	    public function BoolConst() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::BoolConst, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterConstant($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitConstant($this);
		    }
		}
	} 
}