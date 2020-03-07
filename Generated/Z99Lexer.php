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
               Dot = 22, AssignOp = 23, RelOp = 24, AddOp = 25, MultOp = 26, 
               LBracket = 27, RBracket = 28, WS = 29;

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
			'AddOp', 'MultOp', 'LetterOrDigit', 'Letter', 'Digit', 'LBracket', 'RBracket', 
			'Plus', 'Minus', 'Star', 'Slash', 'True', 'False', 'Sign', 'WS'
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
		    "\u{2}\u{1F}\u{104}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}" .
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
		    "\u{4}\u{26}\u{9}\u{26}\u{4}\u{27}\u{9}\u{27}\u{4}\u{28}\u{9}\u{28}" .
		    "\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{5}\u{3}" .
		    "\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}" .
		    "\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}\u{9}" .
		    "\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}" .
		    "\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}" .
		    "\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}" .
		    "\u{D}\u{5}\u{D}\u{8D}\u{A}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{E}\u{5}" .
		    "\u{E}\u{92}\u{A}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{F}\u{3}\u{F}\u{5}" .
		    "\u{F}\u{98}\u{A}\u{F}\u{3}\u{10}\u{6}\u{10}\u{9B}\u{A}\u{10}\u{D}" .
		    "\u{10}\u{E}\u{10}\u{9C}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}" .
		    "\u{3}\u{11}\u{3}\u{11}\u{5}\u{11}\u{A5}\u{A}\u{11}\u{5}\u{11}\u{A7}" .
		    "\u{A}\u{11}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}" .
		    "\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}" .
		    "\u{5}\u{12}\u{B4}\u{A}\u{12}\u{3}\u{13}\u{3}\u{13}\u{7}\u{13}\u{B8}" .
		    "\u{A}\u{13}\u{C}\u{13}\u{E}\u{13}\u{BB}\u{B}\u{13}\u{3}\u{14}\u{3}" .
		    "\u{14}\u{3}\u{15}\u{3}\u{15}\u{3}\u{16}\u{3}\u{16}\u{3}\u{17}\u{3}" .
		    "\u{17}\u{3}\u{18}\u{3}\u{18}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}" .
		    "\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}" .
		    "\u{19}\u{5}\u{19}\u{D1}\u{A}\u{19}\u{3}\u{1A}\u{3}\u{1A}\u{5}\u{1A}" .
		    "\u{D5}\u{A}\u{1A}\u{3}\u{1B}\u{3}\u{1B}\u{5}\u{1B}\u{D9}\u{A}\u{1B}" .
		    "\u{3}\u{1C}\u{3}\u{1C}\u{5}\u{1C}\u{DD}\u{A}\u{1C}\u{3}\u{1D}\u{3}" .
		    "\u{1D}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{20}\u{3}" .
		    "\u{20}\u{3}\u{21}\u{3}\u{21}\u{3}\u{22}\u{3}\u{22}\u{3}\u{23}\u{3}" .
		    "\u{23}\u{3}\u{24}\u{3}\u{24}\u{3}\u{25}\u{3}\u{25}\u{3}\u{25}\u{3}" .
		    "\u{25}\u{3}\u{25}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}" .
		    "\u{26}\u{3}\u{26}\u{3}\u{27}\u{3}\u{27}\u{5}\u{27}\u{FC}\u{A}\u{27}" .
		    "\u{3}\u{28}\u{6}\u{28}\u{FF}\u{A}\u{28}\u{D}\u{28}\u{E}\u{28}\u{100}" .
		    "\u{3}\u{28}\u{3}\u{28}\u{2}\u{2}\u{29}\u{3}\u{3}\u{5}\u{4}\u{7}\u{5}" .
		    "\u{9}\u{6}\u{B}\u{7}\u{D}\u{8}\u{F}\u{9}\u{11}\u{A}\u{13}\u{B}\u{15}" .
		    "\u{C}\u{17}\u{D}\u{19}\u{E}\u{1B}\u{F}\u{1D}\u{10}\u{1F}\u{11}\u{21}" .
		    "\u{12}\u{23}\u{13}\u{25}\u{14}\u{27}\u{15}\u{29}\u{16}\u{2B}\u{17}" .
		    "\u{2D}\u{18}\u{2F}\u{19}\u{31}\u{1A}\u{33}\u{1B}\u{35}\u{1C}\u{37}" .
		    "\u{2}\u{39}\u{2}\u{3B}\u{2}\u{3D}\u{1D}\u{3F}\u{1E}\u{41}\u{2}\u{43}" .
		    "\u{2}\u{45}\u{2}\u{47}\u{2}\u{49}\u{2}\u{4B}\u{2}\u{4D}\u{2}\u{4F}" .
		    "\u{1F}\u{3}\u{2}\u{5}\u{4}\u{2}\u{43}\u{5C}\u{63}\u{7C}\u{3}\u{2}" .
		    "\u{32}\u{3B}\u{5}\u{2}\u{B}\u{C}\u{E}\u{F}\u{22}\u{22}\u{2}\u{10C}" .
		    "\u{2}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2}\u{5}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{7}\u{3}\u{2}\u{2}\u{2}\u{2}\u{9}\u{3}\u{2}\u{2}\u{2}\u{2}\u{B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{11}\u{3}\u{2}\u{2}\u{2}\u{2}\u{13}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{15}\u{3}\u{2}\u{2}\u{2}\u{2}\u{17}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{19}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1B}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1F}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{21}\u{3}\u{2}\u{2}\u{2}\u{2}\u{23}\u{3}\u{2}\u{2}\u{2}\u{2}\u{25}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{27}\u{3}\u{2}\u{2}\u{2}\u{2}\u{29}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{2D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{31}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{33}\u{3}\u{2}\u{2}\u{2}\u{2}\u{35}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{3D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{3F}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{4F}\u{3}\u{2}\u{2}\u{2}\u{3}\u{51}\u{3}\u{2}\u{2}\u{2}\u{5}\u{59}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{7}\u{5D}\u{3}\u{2}\u{2}\u{2}\u{9}\u{63}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{B}\u{68}\u{3}\u{2}\u{2}\u{2}\u{D}\u{6D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{F}\u{73}\u{3}\u{2}\u{2}\u{2}\u{11}\u{76}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{13}\u{7B}\u{3}\u{2}\u{2}\u{2}\u{15}\u{7E}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{17}\u{85}\u{3}\u{2}\u{2}\u{2}\u{19}\u{8C}\u{3}\u{2}\u{2}\u{2}\u{1B}" .
		    "\u{91}\u{3}\u{2}\u{2}\u{2}\u{1D}\u{97}\u{3}\u{2}\u{2}\u{2}\u{1F}\u{9A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{21}\u{A6}\u{3}\u{2}\u{2}\u{2}\u{23}\u{B3}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{25}\u{B5}\u{3}\u{2}\u{2}\u{2}\u{27}\u{BC}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{29}\u{BE}\u{3}\u{2}\u{2}\u{2}\u{2B}\u{C0}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2D}\u{C2}\u{3}\u{2}\u{2}\u{2}\u{2F}\u{C4}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{31}\u{D0}\u{3}\u{2}\u{2}\u{2}\u{33}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{35}" .
		    "\u{D8}\u{3}\u{2}\u{2}\u{2}\u{37}\u{DC}\u{3}\u{2}\u{2}\u{2}\u{39}\u{DE}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3B}\u{E0}\u{3}\u{2}\u{2}\u{2}\u{3D}\u{E2}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{3F}\u{E4}\u{3}\u{2}\u{2}\u{2}\u{41}\u{E6}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{43}\u{E8}\u{3}\u{2}\u{2}\u{2}\u{45}\u{EA}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{47}\u{EC}\u{3}\u{2}\u{2}\u{2}\u{49}\u{EE}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{4B}\u{F3}\u{3}\u{2}\u{2}\u{2}\u{4D}\u{FB}\u{3}\u{2}\u{2}\u{2}\u{4F}" .
		    "\u{FE}\u{3}\u{2}\u{2}\u{2}\u{51}\u{52}\u{7}\u{72}\u{2}\u{2}\u{52}" .
		    "\u{53}\u{7}\u{74}\u{2}\u{2}\u{53}\u{54}\u{7}\u{71}\u{2}\u{2}\u{54}" .
		    "\u{55}\u{7}\u{69}\u{2}\u{2}\u{55}\u{56}\u{7}\u{74}\u{2}\u{2}\u{56}" .
		    "\u{57}\u{7}\u{63}\u{2}\u{2}\u{57}\u{58}\u{7}\u{6F}\u{2}\u{2}\u{58}" .
		    "\u{4}\u{3}\u{2}\u{2}\u{2}\u{59}\u{5A}\u{7}\u{78}\u{2}\u{2}\u{5A}\u{5B}" .
		    "\u{7}\u{63}\u{2}\u{2}\u{5B}\u{5C}\u{7}\u{74}\u{2}\u{2}\u{5C}\u{6}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{5D}\u{5E}\u{7}\u{64}\u{2}\u{2}\u{5E}\u{5F}" .
		    "\u{7}\u{67}\u{2}\u{2}\u{5F}\u{60}\u{7}\u{69}\u{2}\u{2}\u{60}\u{61}" .
		    "\u{7}\u{6B}\u{2}\u{2}\u{61}\u{62}\u{7}\u{70}\u{2}\u{2}\u{62}\u{8}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{63}\u{64}\u{7}\u{67}\u{2}\u{2}\u{64}\u{65}" .
		    "\u{7}\u{70}\u{2}\u{2}\u{65}\u{66}\u{7}\u{66}\u{2}\u{2}\u{66}\u{67}" .
		    "\u{7}\u{30}\u{2}\u{2}\u{67}\u{A}\u{3}\u{2}\u{2}\u{2}\u{68}\u{69}\u{7}" .
		    "\u{74}\u{2}\u{2}\u{69}\u{6A}\u{7}\u{67}\u{2}\u{2}\u{6A}\u{6B}\u{7}" .
		    "\u{63}\u{2}\u{2}\u{6B}\u{6C}\u{7}\u{66}\u{2}\u{2}\u{6C}\u{C}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{6D}\u{6E}\u{7}\u{79}\u{2}\u{2}\u{6E}\u{6F}\u{7}" .
		    "\u{74}\u{2}\u{2}\u{6F}\u{70}\u{7}\u{6B}\u{2}\u{2}\u{70}\u{71}\u{7}" .
		    "\u{76}\u{2}\u{2}\u{71}\u{72}\u{7}\u{67}\u{2}\u{2}\u{72}\u{E}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{73}\u{74}\u{7}\u{6B}\u{2}\u{2}\u{74}\u{75}\u{7}" .
		    "\u{68}\u{2}\u{2}\u{75}\u{10}\u{3}\u{2}\u{2}\u{2}\u{76}\u{77}\u{7}" .
		    "\u{76}\u{2}\u{2}\u{77}\u{78}\u{7}\u{6A}\u{2}\u{2}\u{78}\u{79}\u{7}" .
		    "\u{67}\u{2}\u{2}\u{79}\u{7A}\u{7}\u{70}\u{2}\u{2}\u{7A}\u{12}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{7B}\u{7C}\u{7}\u{68}\u{2}\u{2}\u{7C}\u{7D}\u{7}" .
		    "\u{6B}\u{2}\u{2}\u{7D}\u{14}\u{3}\u{2}\u{2}\u{2}\u{7E}\u{7F}\u{7}" .
		    "\u{74}\u{2}\u{2}\u{7F}\u{80}\u{7}\u{67}\u{2}\u{2}\u{80}\u{81}\u{7}" .
		    "\u{72}\u{2}\u{2}\u{81}\u{82}\u{7}\u{67}\u{2}\u{2}\u{82}\u{83}\u{7}" .
		    "\u{63}\u{2}\u{2}\u{83}\u{84}\u{7}\u{76}\u{2}\u{2}\u{84}\u{16}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{85}\u{86}\u{7}\u{77}\u{2}\u{2}\u{86}\u{87}\u{7}" .
		    "\u{70}\u{2}\u{2}\u{87}\u{88}\u{7}\u{76}\u{2}\u{2}\u{88}\u{89}\u{7}" .
		    "\u{6B}\u{2}\u{2}\u{89}\u{8A}\u{7}\u{6E}\u{2}\u{2}\u{8A}\u{18}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{8B}\u{8D}\u{5}\u{4D}\u{27}\u{2}\u{8C}\u{8B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{8C}\u{8D}\u{3}\u{2}\u{2}\u{2}\u{8D}\u{8E}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{8E}\u{8F}\u{5}\u{21}\u{11}\u{2}\u{8F}\u{1A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{90}\u{92}\u{5}\u{4D}\u{27}\u{2}\u{91}\u{90}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{91}\u{92}\u{3}\u{2}\u{2}\u{2}\u{92}\u{93}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{93}\u{94}\u{5}\u{1F}\u{10}\u{2}\u{94}\u{1C}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{95}\u{98}\u{5}\u{49}\u{25}\u{2}\u{96}\u{98}\u{5}\u{4B}\u{26}" .
		    "\u{2}\u{97}\u{95}\u{3}\u{2}\u{2}\u{2}\u{97}\u{96}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{98}\u{1E}\u{3}\u{2}\u{2}\u{2}\u{99}\u{9B}\u{5}\u{3B}\u{1E}\u{2}" .
		    "\u{9A}\u{99}\u{3}\u{2}\u{2}\u{2}\u{9B}\u{9C}\u{3}\u{2}\u{2}\u{2}\u{9C}" .
		    "\u{9A}\u{3}\u{2}\u{2}\u{2}\u{9C}\u{9D}\u{3}\u{2}\u{2}\u{2}\u{9D}\u{20}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{9E}\u{9F}\u{5}\u{2D}\u{17}\u{2}\u{9F}\u{A0}" .
		    "\u{5}\u{1F}\u{10}\u{2}\u{A0}\u{A7}\u{3}\u{2}\u{2}\u{2}\u{A1}\u{A2}" .
		    "\u{5}\u{1F}\u{10}\u{2}\u{A2}\u{A4}\u{5}\u{2D}\u{17}\u{2}\u{A3}\u{A5}" .
		    "\u{5}\u{1F}\u{10}\u{2}\u{A4}\u{A3}\u{3}\u{2}\u{2}\u{2}\u{A4}\u{A5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{A5}\u{A7}\u{3}\u{2}\u{2}\u{2}\u{A6}\u{9E}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{A6}\u{A1}\u{3}\u{2}\u{2}\u{2}\u{A7}\u{22}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A8}\u{A9}\u{7}\u{6B}\u{2}\u{2}\u{A9}\u{AA}\u{7}\u{70}" .
		    "\u{2}\u{2}\u{AA}\u{B4}\u{7}\u{76}\u{2}\u{2}\u{AB}\u{AC}\u{7}\u{74}" .
		    "\u{2}\u{2}\u{AC}\u{AD}\u{7}\u{67}\u{2}\u{2}\u{AD}\u{AE}\u{7}\u{63}" .
		    "\u{2}\u{2}\u{AE}\u{B4}\u{7}\u{6E}\u{2}\u{2}\u{AF}\u{B0}\u{7}\u{64}" .
		    "\u{2}\u{2}\u{B0}\u{B1}\u{7}\u{71}\u{2}\u{2}\u{B1}\u{B2}\u{7}\u{71}" .
		    "\u{2}\u{2}\u{B2}\u{B4}\u{7}\u{6E}\u{2}\u{2}\u{B3}\u{A8}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B3}\u{AB}\u{3}\u{2}\u{2}\u{2}\u{B3}\u{AF}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{B4}\u{24}\u{3}\u{2}\u{2}\u{2}\u{B5}\u{B9}\u{5}\u{39}\u{1D}" .
		    "\u{2}\u{B6}\u{B8}\u{5}\u{37}\u{1C}\u{2}\u{B7}\u{B6}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{B8}\u{BB}\u{3}\u{2}\u{2}\u{2}\u{B9}\u{B7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{B9}\u{BA}\u{3}\u{2}\u{2}\u{2}\u{BA}\u{26}\u{3}\u{2}\u{2}\u{2}\u{BB}" .
		    "\u{B9}\u{3}\u{2}\u{2}\u{2}\u{BC}\u{BD}\u{7}\u{3D}\u{2}\u{2}\u{BD}" .
		    "\u{28}\u{3}\u{2}\u{2}\u{2}\u{BE}\u{BF}\u{7}\u{3C}\u{2}\u{2}\u{BF}" .
		    "\u{2A}\u{3}\u{2}\u{2}\u{2}\u{C0}\u{C1}\u{7}\u{2E}\u{2}\u{2}\u{C1}" .
		    "\u{2C}\u{3}\u{2}\u{2}\u{2}\u{C2}\u{C3}\u{7}\u{30}\u{2}\u{2}\u{C3}" .
		    "\u{2E}\u{3}\u{2}\u{2}\u{2}\u{C4}\u{C5}\u{7}\u{3F}\u{2}\u{2}\u{C5}" .
		    "\u{30}\u{3}\u{2}\u{2}\u{2}\u{C6}\u{D1}\u{7}\u{3E}\u{2}\u{2}\u{C7}" .
		    "\u{C8}\u{7}\u{3E}\u{2}\u{2}\u{C8}\u{D1}\u{7}\u{3F}\u{2}\u{2}\u{C9}" .
		    "\u{CA}\u{7}\u{3F}\u{2}\u{2}\u{CA}\u{D1}\u{7}\u{3F}\u{2}\u{2}\u{CB}" .
		    "\u{D1}\u{7}\u{40}\u{2}\u{2}\u{CC}\u{CD}\u{7}\u{40}\u{2}\u{2}\u{CD}" .
		    "\u{D1}\u{7}\u{3F}\u{2}\u{2}\u{CE}\u{CF}\u{7}\u{23}\u{2}\u{2}\u{CF}" .
		    "\u{D1}\u{7}\u{3F}\u{2}\u{2}\u{D0}\u{C6}\u{3}\u{2}\u{2}\u{2}\u{D0}" .
		    "\u{C7}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{C9}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{CB}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{D0}\u{CC}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{CE}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{D1}\u{32}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D5}\u{5}\u{41}" .
		    "\u{21}\u{2}\u{D3}\u{D5}\u{5}\u{43}\u{22}\u{2}\u{D4}\u{D2}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{D4}\u{D3}\u{3}\u{2}\u{2}\u{2}\u{D5}\u{34}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{D6}\u{D9}\u{5}\u{45}\u{23}\u{2}\u{D7}\u{D9}\u{5}\u{47}\u{24}" .
		    "\u{2}\u{D8}\u{D6}\u{3}\u{2}\u{2}\u{2}\u{D8}\u{D7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D9}\u{36}\u{3}\u{2}\u{2}\u{2}\u{DA}\u{DD}\u{5}\u{39}\u{1D}\u{2}" .
		    "\u{DB}\u{DD}\u{5}\u{3B}\u{1E}\u{2}\u{DC}\u{DA}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{DC}\u{DB}\u{3}\u{2}\u{2}\u{2}\u{DD}\u{38}\u{3}\u{2}\u{2}\u{2}\u{DE}" .
		    "\u{DF}\u{9}\u{2}\u{2}\u{2}\u{DF}\u{3A}\u{3}\u{2}\u{2}\u{2}\u{E0}\u{E1}" .
		    "\u{9}\u{3}\u{2}\u{2}\u{E1}\u{3C}\u{3}\u{2}\u{2}\u{2}\u{E2}\u{E3}\u{7}" .
		    "\u{2A}\u{2}\u{2}\u{E3}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{E4}\u{E5}\u{7}" .
		    "\u{2B}\u{2}\u{2}\u{E5}\u{40}\u{3}\u{2}\u{2}\u{2}\u{E6}\u{E7}\u{7}" .
		    "\u{2D}\u{2}\u{2}\u{E7}\u{42}\u{3}\u{2}\u{2}\u{2}\u{E8}\u{E9}\u{7}" .
		    "\u{2F}\u{2}\u{2}\u{E9}\u{44}\u{3}\u{2}\u{2}\u{2}\u{EA}\u{EB}\u{7}" .
		    "\u{2C}\u{2}\u{2}\u{EB}\u{46}\u{3}\u{2}\u{2}\u{2}\u{EC}\u{ED}\u{7}" .
		    "\u{31}\u{2}\u{2}\u{ED}\u{48}\u{3}\u{2}\u{2}\u{2}\u{EE}\u{EF}\u{7}" .
		    "\u{76}\u{2}\u{2}\u{EF}\u{F0}\u{7}\u{74}\u{2}\u{2}\u{F0}\u{F1}\u{7}" .
		    "\u{77}\u{2}\u{2}\u{F1}\u{F2}\u{7}\u{67}\u{2}\u{2}\u{F2}\u{4A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{F3}\u{F4}\u{7}\u{68}\u{2}\u{2}\u{F4}\u{F5}\u{7}" .
		    "\u{63}\u{2}\u{2}\u{F5}\u{F6}\u{7}\u{6E}\u{2}\u{2}\u{F6}\u{F7}\u{7}" .
		    "\u{75}\u{2}\u{2}\u{F7}\u{F8}\u{7}\u{67}\u{2}\u{2}\u{F8}\u{4C}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{F9}\u{FC}\u{5}\u{41}\u{21}\u{2}\u{FA}\u{FC}\u{5}" .
		    "\u{43}\u{22}\u{2}\u{FB}\u{F9}\u{3}\u{2}\u{2}\u{2}\u{FB}\u{FA}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{FC}\u{4E}\u{3}\u{2}\u{2}\u{2}\u{FD}\u{FF}\u{9}\u{4}" .
		    "\u{2}\u{2}\u{FE}\u{FD}\u{3}\u{2}\u{2}\u{2}\u{FF}\u{100}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{100}\u{FE}\u{3}\u{2}\u{2}\u{2}\u{100}\u{101}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{101}\u{102}\u{3}\u{2}\u{2}\u{2}\u{102}\u{103}\u{8}\u{28}" .
		    "\u{2}\u{2}\u{103}\u{50}\u{3}\u{2}\u{2}\u{2}\u{11}\u{2}\u{8C}\u{91}" .
		    "\u{97}\u{9C}\u{A4}\u{A6}\u{B3}\u{B9}\u{D0}\u{D4}\u{D8}\u{DC}\u{FB}" .
		    "\u{100}\u{3}\u{8}\u{2}\u{2}";

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