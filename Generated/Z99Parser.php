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
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, RealNum = 12, 
               IntNum = 13, BoolConst = 14, UnsignedInt = 15, UnsignedReal = 16, 
               Type = 17, Ident = 18, Semi = 19, Colon = 20, Comma = 21, 
               Dot = 22, AssignOp = 23, RelOp = 24, AddOp = 25, MultOp = 26, 
               LBracket = 27, RBracket = 28, WS = 29;

		public const RULE_program = 0, RULE_declareList = 1, RULE_declaration = 2, 
               RULE_identList = 3, RULE_statementList = 4, RULE_statement = 5, 
               RULE_input = 6, RULE_output = 7, RULE_ifStatement = 8, RULE_repeatStatement = 9, 
               RULE_assign = 10, RULE_expression = 11, RULE_boolExpr = 12, 
               RULE_arithmExpression = 13, RULE_term = 14, RULE_factor = 15, 
               RULE_constant = 16;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'declareList', 'declaration', 'identList', 'statementList', 
			'statement', 'input', 'output', 'ifStatement', 'repeatStatement', 'assign', 
			'expression', 'boolExpr', 'arithmExpression', 'term', 'factor', 'constant'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'program'", "'var'", "'begin'", "'end.'", "'read'", "'write'", 
		    "'if'", "'then'", "'fi'", "'repeat'", "'until'", null, null, null, 
		    null, null, null, null, "';'", "':'", "','", "'.'", "'='", null, null, 
		    null, "'('", "')'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, "RealNum", "IntNum", "BoolConst", "UnsignedInt", "UnsignedReal", 
		    "Type", "Ident", "Semi", "Colon", "Comma", "Dot", "AssignOp", "RelOp", 
		    "AddOp", "MultOp", "LBracket", "RBracket", "WS"
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
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}" .
		    "\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{7}\u{3}\u{33}\u{A}\u{3}" .
		    "\u{C}\u{3}\u{E}\u{3}\u{36}\u{B}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{7}\u{5}\u{3F}\u{A}\u{5}" .
		    "\u{C}\u{5}\u{E}\u{5}\u{42}\u{B}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}" .
		    "\u{7}\u{6}\u{47}\u{A}\u{6}\u{C}\u{6}\u{E}\u{6}\u{4A}\u{B}\u{6}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{5}\u{7}\u{51}\u{A}" .
		    "\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}" .
		    "\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}" .
		    "\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{B}\u{3}\u{B}" .
		    "\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}" .
		    "\u{C}\u{3}\u{C}\u{3}\u{D}\u{3}\u{D}\u{5}\u{D}\u{70}\u{A}\u{D}\u{3}" .
		    "\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}" .
		    "\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}\u{7}\u{F}\u{7C}\u{A}\u{F}\u{C}\u{F}" .
		    "\u{E}\u{F}\u{7F}\u{B}\u{F}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}" .
		    "\u{3}\u{10}\u{3}\u{10}\u{7}\u{10}\u{87}\u{A}\u{10}\u{C}\u{10}\u{E}" .
		    "\u{10}\u{8A}\u{B}\u{10}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}" .
		    "\u{3}\u{11}\u{3}\u{11}\u{5}\u{11}\u{92}\u{A}\u{11}\u{3}\u{12}\u{3}" .
		    "\u{12}\u{3}\u{12}\u{2}\u{4}\u{1C}\u{1E}\u{13}\u{2}\u{4}\u{6}\u{8}" .
		    "\u{A}\u{C}\u{E}\u{10}\u{12}\u{14}\u{16}\u{18}\u{1A}\u{1C}\u{1E}\u{20}" .
		    "\u{22}\u{2}\u{3}\u{3}\u{2}\u{E}\u{10}\u{2}\u{90}\u{2}\u{24}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{4}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{6}\u{37}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{8}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{A}\u{43}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{C}\u{50}\u{3}\u{2}\u{2}\u{2}\u{E}\u{52}\u{3}\u{2}\u{2}\u{2}\u{10}" .
		    "\u{57}\u{3}\u{2}\u{2}\u{2}\u{12}\u{5C}\u{3}\u{2}\u{2}\u{2}\u{14}\u{63}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{16}\u{69}\u{3}\u{2}\u{2}\u{2}\u{18}\u{6F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1A}\u{71}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{75}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1E}\u{80}\u{3}\u{2}\u{2}\u{2}\u{20}\u{91}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{22}\u{93}\u{3}\u{2}\u{2}\u{2}\u{24}\u{25}\u{7}\u{3}\u{2}\u{2}" .
		    "\u{25}\u{26}\u{7}\u{14}\u{2}\u{2}\u{26}\u{27}\u{7}\u{4}\u{2}\u{2}" .
		    "\u{27}\u{28}\u{5}\u{4}\u{3}\u{2}\u{28}\u{29}\u{7}\u{15}\u{2}\u{2}" .
		    "\u{29}\u{2A}\u{7}\u{5}\u{2}\u{2}\u{2A}\u{2B}\u{5}\u{A}\u{6}\u{2}\u{2B}" .
		    "\u{2C}\u{7}\u{15}\u{2}\u{2}\u{2C}\u{2D}\u{7}\u{6}\u{2}\u{2}\u{2D}" .
		    "\u{2E}\u{7}\u{2}\u{2}\u{3}\u{2E}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2F}\u{34}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{30}\u{31}\u{7}\u{15}\u{2}\u{2}\u{31}\u{33}" .
		    "\u{5}\u{6}\u{4}\u{2}\u{32}\u{30}\u{3}\u{2}\u{2}\u{2}\u{33}\u{36}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{34}\u{32}\u{3}\u{2}\u{2}\u{2}\u{34}\u{35}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{35}\u{5}\u{3}\u{2}\u{2}\u{2}\u{36}\u{34}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{37}\u{38}\u{5}\u{8}\u{5}\u{2}\u{38}\u{39}\u{7}\u{16}\u{2}" .
		    "\u{2}\u{39}\u{3A}\u{7}\u{13}\u{2}\u{2}\u{3A}\u{7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{3B}\u{40}\u{7}\u{14}\u{2}\u{2}\u{3C}\u{3D}\u{7}\u{17}\u{2}\u{2}" .
		    "\u{3D}\u{3F}\u{7}\u{14}\u{2}\u{2}\u{3E}\u{3C}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{3F}\u{42}\u{3}\u{2}\u{2}\u{2}\u{40}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{40}" .
		    "\u{41}\u{3}\u{2}\u{2}\u{2}\u{41}\u{9}\u{3}\u{2}\u{2}\u{2}\u{42}\u{40}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{43}\u{48}\u{5}\u{C}\u{7}\u{2}\u{44}\u{45}\u{7}" .
		    "\u{15}\u{2}\u{2}\u{45}\u{47}\u{5}\u{C}\u{7}\u{2}\u{46}\u{44}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{47}\u{4A}\u{3}\u{2}\u{2}\u{2}\u{48}\u{46}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{48}\u{49}\u{3}\u{2}\u{2}\u{2}\u{49}\u{B}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4A}\u{48}\u{3}\u{2}\u{2}\u{2}\u{4B}\u{51}\u{5}\u{16}\u{C}" .
		    "\u{2}\u{4C}\u{51}\u{5}\u{E}\u{8}\u{2}\u{4D}\u{51}\u{5}\u{10}\u{9}" .
		    "\u{2}\u{4E}\u{51}\u{5}\u{12}\u{A}\u{2}\u{4F}\u{51}\u{5}\u{14}\u{B}" .
		    "\u{2}\u{50}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{50}\u{4C}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{50}\u{4D}\u{3}\u{2}\u{2}\u{2}\u{50}\u{4E}\u{3}\u{2}\u{2}\u{2}\u{50}" .
		    "\u{4F}\u{3}\u{2}\u{2}\u{2}\u{51}\u{D}\u{3}\u{2}\u{2}\u{2}\u{52}\u{53}" .
		    "\u{7}\u{7}\u{2}\u{2}\u{53}\u{54}\u{7}\u{1D}\u{2}\u{2}\u{54}\u{55}" .
		    "\u{5}\u{8}\u{5}\u{2}\u{55}\u{56}\u{7}\u{1E}\u{2}\u{2}\u{56}\u{F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{57}\u{58}\u{7}\u{8}\u{2}\u{2}\u{58}\u{59}\u{7}\u{1D}" .
		    "\u{2}\u{2}\u{59}\u{5A}\u{5}\u{8}\u{5}\u{2}\u{5A}\u{5B}\u{7}\u{1E}" .
		    "\u{2}\u{2}\u{5B}\u{11}\u{3}\u{2}\u{2}\u{2}\u{5C}\u{5D}\u{7}\u{9}\u{2}" .
		    "\u{2}\u{5D}\u{5E}\u{5}\u{18}\u{D}\u{2}\u{5E}\u{5F}\u{7}\u{A}\u{2}" .
		    "\u{2}\u{5F}\u{60}\u{5}\u{A}\u{6}\u{2}\u{60}\u{61}\u{7}\u{15}\u{2}" .
		    "\u{2}\u{61}\u{62}\u{7}\u{B}\u{2}\u{2}\u{62}\u{13}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{63}\u{64}\u{7}\u{C}\u{2}\u{2}\u{64}\u{65}\u{5}\u{A}\u{6}\u{2}\u{65}" .
		    "\u{66}\u{7}\u{15}\u{2}\u{2}\u{66}\u{67}\u{7}\u{D}\u{2}\u{2}\u{67}" .
		    "\u{68}\u{5}\u{18}\u{D}\u{2}\u{68}\u{15}\u{3}\u{2}\u{2}\u{2}\u{69}" .
		    "\u{6A}\u{7}\u{14}\u{2}\u{2}\u{6A}\u{6B}\u{7}\u{19}\u{2}\u{2}\u{6B}" .
		    "\u{6C}\u{5}\u{18}\u{D}\u{2}\u{6C}\u{17}\u{3}\u{2}\u{2}\u{2}\u{6D}" .
		    "\u{70}\u{5}\u{1C}\u{F}\u{2}\u{6E}\u{70}\u{5}\u{1A}\u{E}\u{2}\u{6F}" .
		    "\u{6D}\u{3}\u{2}\u{2}\u{2}\u{6F}\u{6E}\u{3}\u{2}\u{2}\u{2}\u{70}\u{19}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{71}\u{72}\u{5}\u{1C}\u{F}\u{2}\u{72}\u{73}" .
		    "\u{7}\u{1A}\u{2}\u{2}\u{73}\u{74}\u{5}\u{1C}\u{F}\u{2}\u{74}\u{1B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{75}\u{76}\u{8}\u{F}\u{1}\u{2}\u{76}\u{77}\u{5}" .
		    "\u{1E}\u{10}\u{2}\u{77}\u{7D}\u{3}\u{2}\u{2}\u{2}\u{78}\u{79}\u{C}" .
		    "\u{3}\u{2}\u{2}\u{79}\u{7A}\u{7}\u{1B}\u{2}\u{2}\u{7A}\u{7C}\u{5}" .
		    "\u{1E}\u{10}\u{2}\u{7B}\u{78}\u{3}\u{2}\u{2}\u{2}\u{7C}\u{7F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{7D}\u{7B}\u{3}\u{2}\u{2}\u{2}\u{7D}\u{7E}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{7E}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{7F}\u{7D}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{80}\u{81}\u{8}\u{10}\u{1}\u{2}\u{81}\u{82}\u{5}\u{20}\u{11}" .
		    "\u{2}\u{82}\u{88}\u{3}\u{2}\u{2}\u{2}\u{83}\u{84}\u{C}\u{3}\u{2}\u{2}" .
		    "\u{84}\u{85}\u{7}\u{1C}\u{2}\u{2}\u{85}\u{87}\u{5}\u{20}\u{11}\u{2}" .
		    "\u{86}\u{83}\u{3}\u{2}\u{2}\u{2}\u{87}\u{8A}\u{3}\u{2}\u{2}\u{2}\u{88}" .
		    "\u{86}\u{3}\u{2}\u{2}\u{2}\u{88}\u{89}\u{3}\u{2}\u{2}\u{2}\u{89}\u{1F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{8A}\u{88}\u{3}\u{2}\u{2}\u{2}\u{8B}\u{92}\u{7}" .
		    "\u{14}\u{2}\u{2}\u{8C}\u{92}\u{5}\u{22}\u{12}\u{2}\u{8D}\u{8E}\u{7}" .
		    "\u{1D}\u{2}\u{2}\u{8E}\u{8F}\u{5}\u{1C}\u{F}\u{2}\u{8F}\u{90}\u{7}" .
		    "\u{1E}\u{2}\u{2}\u{90}\u{92}\u{3}\u{2}\u{2}\u{2}\u{91}\u{8B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{91}\u{8C}\u{3}\u{2}\u{2}\u{2}\u{91}\u{8D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{92}\u{21}\u{3}\u{2}\u{2}\u{2}\u{93}\u{94}\u{9}\u{2}\u{2}" .
		    "\u{2}\u{94}\u{23}\u{3}\u{2}\u{2}\u{2}\u{A}\u{34}\u{40}\u{48}\u{50}" .
		    "\u{6F}\u{7D}\u{88}\u{91}";

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
		        $this->setState(34);
		        $this->match(self::T__0);
		        $this->setState(35);
		        $this->match(self::Ident);
		        $this->setState(36);
		        $this->match(self::T__1);
		        $this->setState(37);
		        $this->declareList();
		        $this->setState(38);
		        $this->match(self::Semi);
		        $this->setState(39);
		        $this->match(self::T__2);
		        $this->setState(40);
		        $this->statementList();
		        $this->setState(41);
		        $this->match(self::Semi);
		        $this->setState(42);
		        $this->match(self::T__3);
		        $this->setState(43);
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
		        $this->setState(45);
		        $this->declaration();
		        $this->setState(50);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(46);
		        		$this->match(self::Semi);
		        		$this->setState(47);
		        		$this->declaration(); 
		        	}

		        	$this->setState(52);
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
		        $this->setState(53);
		        $this->identList();
		        $this->setState(54);
		        $this->match(self::Colon);
		        $this->setState(55);
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
		        $this->setState(57);
		        $this->match(self::Ident);
		        $this->setState(62);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::Comma) {
		        	$this->setState(58);
		        	$this->match(self::Comma);
		        	$this->setState(59);
		        	$this->match(self::Ident);
		        	$this->setState(64);
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
		        $this->setState(65);
		        $this->statement();
		        $this->setState(70);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(66);
		        		$this->match(self::Semi);
		        		$this->setState(67);
		        		$this->statement(); 
		        	}

		        	$this->setState(72);
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
		        $this->setState(78);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::Ident:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(73);
		            	$this->assign();
		            	break;

		            case self::T__4:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(74);
		            	$this->input();
		            	break;

		            case self::T__5:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(75);
		            	$this->output();
		            	break;

		            case self::T__6:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(76);
		            	$this->ifStatement();
		            	break;

		            case self::T__9:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(77);
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
		        $this->setState(80);
		        $this->match(self::T__4);
		        $this->setState(81);
		        $this->match(self::LBracket);
		        $this->setState(82);
		        $this->identList();
		        $this->setState(83);
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
		        $this->setState(85);
		        $this->match(self::T__5);
		        $this->setState(86);
		        $this->match(self::LBracket);
		        $this->setState(87);
		        $this->identList();
		        $this->setState(88);
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
		public function ifStatement() : Context\IfStatementContext
		{
		    $localContext = new Context\IfStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_ifStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(90);
		        $this->match(self::T__6);
		        $this->setState(91);
		        $this->expression();
		        $this->setState(92);
		        $this->match(self::T__7);
		        $this->setState(93);
		        $this->statementList();
		        $this->setState(94);
		        $this->match(self::Semi);
		        $this->setState(95);
		        $this->match(self::T__8);
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
		        $this->setState(97);
		        $this->match(self::T__9);
		        $this->setState(98);
		        $this->statementList();
		        $this->setState(99);
		        $this->match(self::Semi);
		        $this->setState(100);
		        $this->match(self::T__10);
		        $this->setState(101);
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
		public function assign() : Context\AssignContext
		{
		    $localContext = new Context\AssignContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_assign);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(103);
		        $this->match(self::Ident);
		        $this->setState(104);
		        $this->match(self::AssignOp);
		        $this->setState(105);
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
		        $this->setState(109);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(107);
		        	    $this->recursiveArithmExpression(0);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(108);
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
		        $this->setState(111);
		        $this->recursiveArithmExpression(0);
		        $this->setState(112);
		        $this->match(self::RelOp);
		        $this->setState(113);
		        $this->recursiveArithmExpression(0);
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
			return $this->recursiveArithmExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveArithmExpression(int $precedence) : Context\ArithmExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ArithmExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 26;
			$this->enterRecursionRule($localContext, 26, self::RULE_arithmExpression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(116);
				$this->recursiveTerm(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(123);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\ArithmExpressionContext($parentContext, $parentState);
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_arithmExpression);
						$this->setState(118);

						if (!($this->precpred($this->ctx, 1))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
						}
						$this->setState(119);
						$this->match(self::AddOp);
						$this->setState(120);
						$this->recursiveTerm(0); 
					}

					$this->setState(125);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function term() : Context\TermContext
		{
			return $this->recursiveTerm(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveTerm(int $precedence) : Context\TermContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\TermContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 28;
			$this->enterRecursionRule($localContext, 28, self::RULE_term, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(127);
				$this->factor();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(134);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\TermContext($parentContext, $parentState);
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_term);
						$this->setState(129);

						if (!($this->precpred($this->ctx, 1))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
						}
						$this->setState(130);
						$this->match(self::MultOp);
						$this->setState(131);
						$this->factor(); 
					}

					$this->setState(136);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
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
		        $this->setState(143);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::Ident:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(137);
		            	$this->match(self::Ident);
		            	break;

		            case self::RealNum:
		            case self::IntNum:
		            case self::BoolConst:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(138);
		            	$this->constant();
		            	break;

		            case self::LBracket:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(139);
		            	$this->match(self::LBracket);
		            	$this->setState(140);
		            	$this->recursiveArithmExpression(0);
		            	$this->setState(141);
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
		public function constant() : Context\ConstantContext
		{
		    $localContext = new Context\ConstantContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_constant);

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

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex) : bool
		{
			switch ($ruleIndex) {
					case 13:
						return $this->sempredArithmExpression($localContext, $predicateIndex);

					case 14:
						return $this->sempredTerm($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredArithmExpression(?Context\ArithmExpressionContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
		}

		private function sempredTerm(?Context\TermContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 1:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
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

	    public function Ident() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Ident, 0);
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

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
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

	    public function ifStatement() : ?IfStatementContext
	    {
	    	return $this->getTypedRuleContext(IfStatementContext::class, 0);
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

	class IfStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Z99Parser::RULE_ifStatement;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

	    public function Semi() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Semi, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->enterIfStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof Z99Listener) {
			    $listener->exitIfStatement($this);
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

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

	    public function Semi() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::Semi, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
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

	    public function arithmExpression() : ?ArithmExpressionContext
	    {
	    	return $this->getTypedRuleContext(ArithmExpressionContext::class, 0);
	    }

	    public function AddOp() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::AddOp, 0);
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

	    public function term() : ?TermContext
	    {
	    	return $this->getTypedRuleContext(TermContext::class, 0);
	    }

	    public function MultOp() : ?TerminalNode
	    {
	        return $this->getToken(Z99Parser::MultOp, 0);
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