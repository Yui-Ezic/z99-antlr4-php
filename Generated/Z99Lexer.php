<?php

/*
 * Generated from Z99.g4 by ANTLR 4.8
 */

namespace Generated {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class Z99Lexer extends Lexer
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, RealNum = 12, 
               IntNum = 13, BoolConst = 14, UnsignedInt = 15, UnsignedReal = 16, 
               Type = 17, Ident = 18, Semi = 19, Colon = 20, Comma = 21, 
               Dot = 22, AssignOp = 23, RelOp = 24, LBracket = 25, RBracket = 26, 
               Plus = 27, Minus = 28, Star = 29, Slash = 30, WS = 31;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'T__0', 'T__1', 'T__2', 'T__3', 'T__4', 'T__5', 'T__6', 'T__7', 'T__8', 
			'T__9', 'T__10', 'RealNum', 'IntNum', 'BoolConst', 'UnsignedInt', 'UnsignedReal', 
			'Type', 'Ident', 'Semi', 'Colon', 'Comma', 'Dot', 'AssignOp', 'RelOp', 
			'LBracket', 'RBracket', 'Plus', 'Minus', 'Star', 'Slash', 'LetterOrDigit', 
			'Letter', 'Digit', 'True', 'False', 'Sign', 'WS'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'program'", "'var'", "'begin'", "'end.'", "'read'", "'write'", 
		    "'if'", "'then'", "'fi'", "'repeat'", "'until'", null, null, null, 
		    null, null, null, null, "';'", "':'", "','", "'.'", "'='", null, "'('", 
		    "')'", "'+'", "'-'", "'*'", "'/'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, "RealNum", "IntNum", "BoolConst", "UnsignedInt", "UnsignedReal", 
		    "Type", "Ident", "Semi", "Colon", "Comma", "Dot", "AssignOp", "RelOp", 
		    "LBracket", "RBracket", "Plus", "Minus", "Star", "Slash", "WS"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{2}\u{21}\u{F8}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}" .
		    "\u{4}\u{4}\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}" .
		    "\u{7}\u{9}\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}" .
		    "\u{9}\u{A}\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}" .
		    "\u{D}\u{4}\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}" .
		    "\u{4}\u{11}\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}" .
		    "\u{4}\u{14}\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}" .
		    "\u{4}\u{17}\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{4}\u{19}\u{9}\u{19}" .
		    "\u{4}\u{1A}\u{9}\u{1A}\u{4}\u{1B}\u{9}\u{1B}\u{4}\u{1C}\u{9}\u{1C}" .
		    "\u{4}\u{1D}\u{9}\u{1D}\u{4}\u{1E}\u{9}\u{1E}\u{4}\u{1F}\u{9}\u{1F}" .
		    "\u{4}\u{20}\u{9}\u{20}\u{4}\u{21}\u{9}\u{21}\u{4}\u{22}\u{9}\u{22}" .
		    "\u{4}\u{23}\u{9}\u{23}\u{4}\u{24}\u{9}\u{24}\u{4}\u{25}\u{9}\u{25}" .
		    "\u{4}\u{26}\u{9}\u{26}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}" .
		    "\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}" .
		    "\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}" .
		    "\u{A}\u{3}\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}" .
		    "\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}" .
		    "\u{C}\u{3}\u{C}\u{3}\u{D}\u{5}\u{D}\u{89}\u{A}\u{D}\u{3}\u{D}\u{3}" .
		    "\u{D}\u{3}\u{E}\u{5}\u{E}\u{8E}\u{A}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}" .
		    "\u{F}\u{3}\u{F}\u{5}\u{F}\u{94}\u{A}\u{F}\u{3}\u{10}\u{6}\u{10}\u{97}" .
		    "\u{A}\u{10}\u{D}\u{10}\u{E}\u{10}\u{98}\u{3}\u{11}\u{3}\u{11}\u{3}" .
		    "\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{5}\u{11}\u{A1}\u{A}\u{11}" .
		    "\u{5}\u{11}\u{A3}\u{A}\u{11}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}" .
		    "\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}" .
		    "\u{12}\u{3}\u{12}\u{5}\u{12}\u{B0}\u{A}\u{12}\u{3}\u{13}\u{3}\u{13}" .
		    "\u{7}\u{13}\u{B4}\u{A}\u{13}\u{C}\u{13}\u{E}\u{13}\u{B7}\u{B}\u{13}" .
		    "\u{3}\u{14}\u{3}\u{14}\u{3}\u{15}\u{3}\u{15}\u{3}\u{16}\u{3}\u{16}" .
		    "\u{3}\u{17}\u{3}\u{17}\u{3}\u{18}\u{3}\u{18}\u{3}\u{19}\u{3}\u{19}" .
		    "\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}" .
		    "\u{3}\u{19}\u{3}\u{19}\u{5}\u{19}\u{CD}\u{A}\u{19}\u{3}\u{1A}\u{3}" .
		    "\u{1A}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1C}\u{3}\u{1C}\u{3}\u{1D}\u{3}" .
		    "\u{1D}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{20}\u{3}" .
		    "\u{20}\u{5}\u{20}\u{DD}\u{A}\u{20}\u{3}\u{21}\u{3}\u{21}\u{3}\u{22}" .
		    "\u{3}\u{22}\u{3}\u{23}\u{3}\u{23}\u{3}\u{23}\u{3}\u{23}\u{3}\u{23}" .
		    "\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}" .
		    "\u{3}\u{25}\u{3}\u{25}\u{5}\u{25}\u{F0}\u{A}\u{25}\u{3}\u{26}\u{6}" .
		    "\u{26}\u{F3}\u{A}\u{26}\u{D}\u{26}\u{E}\u{26}\u{F4}\u{3}\u{26}\u{3}" .
		    "\u{26}\u{2}\u{2}\u{27}\u{3}\u{3}\u{5}\u{4}\u{7}\u{5}\u{9}\u{6}\u{B}" .
		    "\u{7}\u{D}\u{8}\u{F}\u{9}\u{11}\u{A}\u{13}\u{B}\u{15}\u{C}\u{17}\u{D}" .
		    "\u{19}\u{E}\u{1B}\u{F}\u{1D}\u{10}\u{1F}\u{11}\u{21}\u{12}\u{23}\u{13}" .
		    "\u{25}\u{14}\u{27}\u{15}\u{29}\u{16}\u{2B}\u{17}\u{2D}\u{18}\u{2F}" .
		    "\u{19}\u{31}\u{1A}\u{33}\u{1B}\u{35}\u{1C}\u{37}\u{1D}\u{39}\u{1E}" .
		    "\u{3B}\u{1F}\u{3D}\u{20}\u{3F}\u{2}\u{41}\u{2}\u{43}\u{2}\u{45}\u{2}" .
		    "\u{47}\u{2}\u{49}\u{2}\u{4B}\u{21}\u{3}\u{2}\u{5}\u{4}\u{2}\u{43}" .
		    "\u{5C}\u{63}\u{7C}\u{3}\u{2}\u{32}\u{3B}\u{5}\u{2}\u{B}\u{C}\u{E}" .
		    "\u{F}\u{22}\u{22}\u{2}\u{102}\u{2}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2}\u{5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{7}\u{3}\u{2}\u{2}\u{2}\u{2}\u{9}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{11}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{13}\u{3}\u{2}\u{2}\u{2}\u{2}\u{15}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{17}\u{3}\u{2}\u{2}\u{2}\u{2}\u{19}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{1B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{21}\u{3}\u{2}\u{2}\u{2}\u{2}\u{23}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{25}\u{3}\u{2}\u{2}\u{2}\u{2}\u{27}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{29}\u{3}\u{2}\u{2}\u{2}\u{2}\u{2B}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{2F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{31}\u{3}\u{2}\u{2}\u{2}\u{2}\u{33}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{35}\u{3}\u{2}\u{2}\u{2}\u{2}\u{37}\u{3}\u{2}\u{2}\u{2}\u{2}\u{39}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{3D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{3}\u{4D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{5}\u{55}\u{3}\u{2}\u{2}\u{2}\u{7}\u{59}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{9}\u{5F}\u{3}\u{2}\u{2}\u{2}\u{B}\u{64}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D}\u{69}\u{3}\u{2}\u{2}\u{2}\u{F}\u{6F}\u{3}\u{2}\u{2}\u{2}\u{11}" .
		    "\u{72}\u{3}\u{2}\u{2}\u{2}\u{13}\u{77}\u{3}\u{2}\u{2}\u{2}\u{15}\u{7A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{17}\u{81}\u{3}\u{2}\u{2}\u{2}\u{19}\u{88}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1B}\u{8D}\u{3}\u{2}\u{2}\u{2}\u{1D}\u{93}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1F}\u{96}\u{3}\u{2}\u{2}\u{2}\u{21}\u{A2}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{23}\u{AF}\u{3}\u{2}\u{2}\u{2}\u{25}\u{B1}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{27}\u{B8}\u{3}\u{2}\u{2}\u{2}\u{29}\u{BA}\u{3}\u{2}\u{2}\u{2}\u{2B}" .
		    "\u{BC}\u{3}\u{2}\u{2}\u{2}\u{2D}\u{BE}\u{3}\u{2}\u{2}\u{2}\u{2F}\u{C0}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{31}\u{CC}\u{3}\u{2}\u{2}\u{2}\u{33}\u{CE}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{35}\u{D0}\u{3}\u{2}\u{2}\u{2}\u{37}\u{D2}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{39}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{3B}\u{D6}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{3D}\u{D8}\u{3}\u{2}\u{2}\u{2}\u{3F}\u{DC}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{41}\u{DE}\u{3}\u{2}\u{2}\u{2}\u{43}\u{E0}\u{3}\u{2}\u{2}\u{2}\u{45}" .
		    "\u{E2}\u{3}\u{2}\u{2}\u{2}\u{47}\u{E7}\u{3}\u{2}\u{2}\u{2}\u{49}\u{EF}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{4B}\u{F2}\u{3}\u{2}\u{2}\u{2}\u{4D}\u{4E}\u{7}" .
		    "\u{72}\u{2}\u{2}\u{4E}\u{4F}\u{7}\u{74}\u{2}\u{2}\u{4F}\u{50}\u{7}" .
		    "\u{71}\u{2}\u{2}\u{50}\u{51}\u{7}\u{69}\u{2}\u{2}\u{51}\u{52}\u{7}" .
		    "\u{74}\u{2}\u{2}\u{52}\u{53}\u{7}\u{63}\u{2}\u{2}\u{53}\u{54}\u{7}" .
		    "\u{6F}\u{2}\u{2}\u{54}\u{4}\u{3}\u{2}\u{2}\u{2}\u{55}\u{56}\u{7}\u{78}" .
		    "\u{2}\u{2}\u{56}\u{57}\u{7}\u{63}\u{2}\u{2}\u{57}\u{58}\u{7}\u{74}" .
		    "\u{2}\u{2}\u{58}\u{6}\u{3}\u{2}\u{2}\u{2}\u{59}\u{5A}\u{7}\u{64}\u{2}" .
		    "\u{2}\u{5A}\u{5B}\u{7}\u{67}\u{2}\u{2}\u{5B}\u{5C}\u{7}\u{69}\u{2}" .
		    "\u{2}\u{5C}\u{5D}\u{7}\u{6B}\u{2}\u{2}\u{5D}\u{5E}\u{7}\u{70}\u{2}" .
		    "\u{2}\u{5E}\u{8}\u{3}\u{2}\u{2}\u{2}\u{5F}\u{60}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{60}\u{61}\u{7}\u{70}\u{2}\u{2}\u{61}\u{62}\u{7}\u{66}\u{2}\u{2}" .
		    "\u{62}\u{63}\u{7}\u{30}\u{2}\u{2}\u{63}\u{A}\u{3}\u{2}\u{2}\u{2}\u{64}" .
		    "\u{65}\u{7}\u{74}\u{2}\u{2}\u{65}\u{66}\u{7}\u{67}\u{2}\u{2}\u{66}" .
		    "\u{67}\u{7}\u{63}\u{2}\u{2}\u{67}\u{68}\u{7}\u{66}\u{2}\u{2}\u{68}" .
		    "\u{C}\u{3}\u{2}\u{2}\u{2}\u{69}\u{6A}\u{7}\u{79}\u{2}\u{2}\u{6A}\u{6B}" .
		    "\u{7}\u{74}\u{2}\u{2}\u{6B}\u{6C}\u{7}\u{6B}\u{2}\u{2}\u{6C}\u{6D}" .
		    "\u{7}\u{76}\u{2}\u{2}\u{6D}\u{6E}\u{7}\u{67}\u{2}\u{2}\u{6E}\u{E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{6F}\u{70}\u{7}\u{6B}\u{2}\u{2}\u{70}\u{71}" .
		    "\u{7}\u{68}\u{2}\u{2}\u{71}\u{10}\u{3}\u{2}\u{2}\u{2}\u{72}\u{73}" .
		    "\u{7}\u{76}\u{2}\u{2}\u{73}\u{74}\u{7}\u{6A}\u{2}\u{2}\u{74}\u{75}" .
		    "\u{7}\u{67}\u{2}\u{2}\u{75}\u{76}\u{7}\u{70}\u{2}\u{2}\u{76}\u{12}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{77}\u{78}\u{7}\u{68}\u{2}\u{2}\u{78}\u{79}" .
		    "\u{7}\u{6B}\u{2}\u{2}\u{79}\u{14}\u{3}\u{2}\u{2}\u{2}\u{7A}\u{7B}" .
		    "\u{7}\u{74}\u{2}\u{2}\u{7B}\u{7C}\u{7}\u{67}\u{2}\u{2}\u{7C}\u{7D}" .
		    "\u{7}\u{72}\u{2}\u{2}\u{7D}\u{7E}\u{7}\u{67}\u{2}\u{2}\u{7E}\u{7F}" .
		    "\u{7}\u{63}\u{2}\u{2}\u{7F}\u{80}\u{7}\u{76}\u{2}\u{2}\u{80}\u{16}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{81}\u{82}\u{7}\u{77}\u{2}\u{2}\u{82}\u{83}" .
		    "\u{7}\u{70}\u{2}\u{2}\u{83}\u{84}\u{7}\u{76}\u{2}\u{2}\u{84}\u{85}" .
		    "\u{7}\u{6B}\u{2}\u{2}\u{85}\u{86}\u{7}\u{6E}\u{2}\u{2}\u{86}\u{18}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{87}\u{89}\u{5}\u{49}\u{25}\u{2}\u{88}\u{87}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{88}\u{89}\u{3}\u{2}\u{2}\u{2}\u{89}\u{8A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{8A}\u{8B}\u{5}\u{21}\u{11}\u{2}\u{8B}\u{1A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{8C}\u{8E}\u{5}\u{49}\u{25}\u{2}\u{8D}\u{8C}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{8D}\u{8E}\u{3}\u{2}\u{2}\u{2}\u{8E}\u{8F}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{8F}\u{90}\u{5}\u{1F}\u{10}\u{2}\u{90}\u{1C}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{91}\u{94}\u{5}\u{45}\u{23}\u{2}\u{92}\u{94}\u{5}\u{47}" .
		    "\u{24}\u{2}\u{93}\u{91}\u{3}\u{2}\u{2}\u{2}\u{93}\u{92}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{94}\u{1E}\u{3}\u{2}\u{2}\u{2}\u{95}\u{97}\u{5}\u{43}" .
		    "\u{22}\u{2}\u{96}\u{95}\u{3}\u{2}\u{2}\u{2}\u{97}\u{98}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{98}\u{96}\u{3}\u{2}\u{2}\u{2}\u{98}\u{99}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{99}\u{20}\u{3}\u{2}\u{2}\u{2}\u{9A}\u{9B}\u{5}\u{2D}\u{17}" .
		    "\u{2}\u{9B}\u{9C}\u{5}\u{1F}\u{10}\u{2}\u{9C}\u{A3}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{9D}\u{9E}\u{5}\u{1F}\u{10}\u{2}\u{9E}\u{A0}\u{5}\u{2D}\u{17}" .
		    "\u{2}\u{9F}\u{A1}\u{5}\u{1F}\u{10}\u{2}\u{A0}\u{9F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{A0}\u{A1}\u{3}\u{2}\u{2}\u{2}\u{A1}\u{A3}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{A2}\u{9A}\u{3}\u{2}\u{2}\u{2}\u{A2}\u{9D}\u{3}\u{2}\u{2}\u{2}\u{A3}" .
		    "\u{22}\u{3}\u{2}\u{2}\u{2}\u{A4}\u{A5}\u{7}\u{6B}\u{2}\u{2}\u{A5}" .
		    "\u{A6}\u{7}\u{70}\u{2}\u{2}\u{A6}\u{B0}\u{7}\u{76}\u{2}\u{2}\u{A7}" .
		    "\u{A8}\u{7}\u{74}\u{2}\u{2}\u{A8}\u{A9}\u{7}\u{67}\u{2}\u{2}\u{A9}" .
		    "\u{AA}\u{7}\u{63}\u{2}\u{2}\u{AA}\u{B0}\u{7}\u{6E}\u{2}\u{2}\u{AB}" .
		    "\u{AC}\u{7}\u{64}\u{2}\u{2}\u{AC}\u{AD}\u{7}\u{71}\u{2}\u{2}\u{AD}" .
		    "\u{AE}\u{7}\u{71}\u{2}\u{2}\u{AE}\u{B0}\u{7}\u{6E}\u{2}\u{2}\u{AF}" .
		    "\u{A4}\u{3}\u{2}\u{2}\u{2}\u{AF}\u{A7}\u{3}\u{2}\u{2}\u{2}\u{AF}\u{AB}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{B0}\u{24}\u{3}\u{2}\u{2}\u{2}\u{B1}\u{B5}\u{5}" .
		    "\u{41}\u{21}\u{2}\u{B2}\u{B4}\u{5}\u{3F}\u{20}\u{2}\u{B3}\u{B2}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{B4}\u{B7}\u{3}\u{2}\u{2}\u{2}\u{B5}\u{B3}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B5}\u{B6}\u{3}\u{2}\u{2}\u{2}\u{B6}\u{26}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{B7}\u{B5}\u{3}\u{2}\u{2}\u{2}\u{B8}\u{B9}\u{7}\u{3D}\u{2}" .
		    "\u{2}\u{B9}\u{28}\u{3}\u{2}\u{2}\u{2}\u{BA}\u{BB}\u{7}\u{3C}\u{2}" .
		    "\u{2}\u{BB}\u{2A}\u{3}\u{2}\u{2}\u{2}\u{BC}\u{BD}\u{7}\u{2E}\u{2}" .
		    "\u{2}\u{BD}\u{2C}\u{3}\u{2}\u{2}\u{2}\u{BE}\u{BF}\u{7}\u{30}\u{2}" .
		    "\u{2}\u{BF}\u{2E}\u{3}\u{2}\u{2}\u{2}\u{C0}\u{C1}\u{7}\u{3F}\u{2}" .
		    "\u{2}\u{C1}\u{30}\u{3}\u{2}\u{2}\u{2}\u{C2}\u{CD}\u{7}\u{3E}\u{2}" .
		    "\u{2}\u{C3}\u{C4}\u{7}\u{3E}\u{2}\u{2}\u{C4}\u{CD}\u{7}\u{3F}\u{2}" .
		    "\u{2}\u{C5}\u{C6}\u{7}\u{3F}\u{2}\u{2}\u{C6}\u{CD}\u{7}\u{3F}\u{2}" .
		    "\u{2}\u{C7}\u{CD}\u{7}\u{40}\u{2}\u{2}\u{C8}\u{C9}\u{7}\u{40}\u{2}" .
		    "\u{2}\u{C9}\u{CD}\u{7}\u{3F}\u{2}\u{2}\u{CA}\u{CB}\u{7}\u{23}\u{2}" .
		    "\u{2}\u{CB}\u{CD}\u{7}\u{3F}\u{2}\u{2}\u{CC}\u{C2}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{CC}\u{C3}\u{3}\u{2}\u{2}\u{2}\u{CC}\u{C5}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{CC}\u{C7}\u{3}\u{2}\u{2}\u{2}\u{CC}\u{C8}\u{3}\u{2}\u{2}\u{2}\u{CC}" .
		    "\u{CA}\u{3}\u{2}\u{2}\u{2}\u{CD}\u{32}\u{3}\u{2}\u{2}\u{2}\u{CE}\u{CF}" .
		    "\u{7}\u{2A}\u{2}\u{2}\u{CF}\u{34}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{D1}" .
		    "\u{7}\u{2B}\u{2}\u{2}\u{D1}\u{36}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D3}" .
		    "\u{7}\u{2D}\u{2}\u{2}\u{D3}\u{38}\u{3}\u{2}\u{2}\u{2}\u{D4}\u{D5}" .
		    "\u{7}\u{2F}\u{2}\u{2}\u{D5}\u{3A}\u{3}\u{2}\u{2}\u{2}\u{D6}\u{D7}" .
		    "\u{7}\u{2C}\u{2}\u{2}\u{D7}\u{3C}\u{3}\u{2}\u{2}\u{2}\u{D8}\u{D9}" .
		    "\u{7}\u{31}\u{2}\u{2}\u{D9}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{DA}\u{DD}" .
		    "\u{5}\u{41}\u{21}\u{2}\u{DB}\u{DD}\u{5}\u{43}\u{22}\u{2}\u{DC}\u{DA}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{DC}\u{DB}\u{3}\u{2}\u{2}\u{2}\u{DD}\u{40}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{DE}\u{DF}\u{9}\u{2}\u{2}\u{2}\u{DF}\u{42}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{E0}\u{E1}\u{9}\u{3}\u{2}\u{2}\u{E1}\u{44}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E2}\u{E3}\u{7}\u{76}\u{2}\u{2}\u{E3}\u{E4}\u{7}\u{74}\u{2}" .
		    "\u{2}\u{E4}\u{E5}\u{7}\u{77}\u{2}\u{2}\u{E5}\u{E6}\u{7}\u{67}\u{2}" .
		    "\u{2}\u{E6}\u{46}\u{3}\u{2}\u{2}\u{2}\u{E7}\u{E8}\u{7}\u{68}\u{2}" .
		    "\u{2}\u{E8}\u{E9}\u{7}\u{63}\u{2}\u{2}\u{E9}\u{EA}\u{7}\u{6E}\u{2}" .
		    "\u{2}\u{EA}\u{EB}\u{7}\u{75}\u{2}\u{2}\u{EB}\u{EC}\u{7}\u{67}\u{2}" .
		    "\u{2}\u{EC}\u{48}\u{3}\u{2}\u{2}\u{2}\u{ED}\u{F0}\u{5}\u{37}\u{1C}" .
		    "\u{2}\u{EE}\u{F0}\u{5}\u{39}\u{1D}\u{2}\u{EF}\u{ED}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{EF}\u{EE}\u{3}\u{2}\u{2}\u{2}\u{F0}\u{4A}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{F1}\u{F3}\u{9}\u{4}\u{2}\u{2}\u{F2}\u{F1}\u{3}\u{2}\u{2}\u{2}\u{F3}" .
		    "\u{F4}\u{3}\u{2}\u{2}\u{2}\u{F4}\u{F2}\u{3}\u{2}\u{2}\u{2}\u{F4}\u{F5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F5}\u{F6}\u{3}\u{2}\u{2}\u{2}\u{F6}\u{F7}\u{8}" .
		    "\u{26}\u{2}\u{2}\u{F7}\u{4C}\u{3}\u{2}\u{2}\u{2}\u{F}\u{2}\u{88}\u{8D}" .
		    "\u{93}\u{98}\u{A0}\u{A2}\u{AF}\u{B5}\u{CC}\u{DC}\u{EF}\u{F4}\u{3}" .
		    "\u{8}\u{2}\u{2}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public static function vocabulary() : Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName() : string
		{
			return 'Z99.g4';
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames() : array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames() : array
		{
			return self::MODE_NAMES;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
		{
			return self::vocabulary();
		}
	}
}