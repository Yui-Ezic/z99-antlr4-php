// Generated from d:\122\Compilator\php-antlr\Z99.g4 by ANTLR 4.7.1
import org.antlr.v4.runtime.Lexer;
import org.antlr.v4.runtime.CharStream;
import org.antlr.v4.runtime.Token;
import org.antlr.v4.runtime.TokenStream;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.misc.*;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast"})
public class Z99Lexer extends Lexer {
	static { RuntimeMetaData.checkVersion("4.7.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6, T__6=7, T__7=8, T__8=9, 
		T__9=10, T__10=11, RealNum=12, IntNum=13, BoolConst=14, UnsignedInt=15, 
		UnsignedReal=16, Type=17, Ident=18, Semi=19, Colon=20, Comma=21, Dot=22, 
		AssignOp=23, RelOp=24, AddOp=25, MultOp=26, LBracket=27, RBracket=28, 
		WS=29;
	public static String[] channelNames = {
		"DEFAULT_TOKEN_CHANNEL", "HIDDEN"
	};

	public static String[] modeNames = {
		"DEFAULT_MODE"
	};

	public static final String[] ruleNames = {
		"T__0", "T__1", "T__2", "T__3", "T__4", "T__5", "T__6", "T__7", "T__8", 
		"T__9", "T__10", "RealNum", "IntNum", "BoolConst", "UnsignedInt", "UnsignedReal", 
		"Type", "Ident", "Semi", "Colon", "Comma", "Dot", "AssignOp", "RelOp", 
		"AddOp", "MultOp", "LetterOrDigit", "Letter", "Digit", "LBracket", "RBracket", 
		"Plus", "Minus", "Star", "Slash", "True", "False", "Sign", "WS"
	};

	private static final String[] _LITERAL_NAMES = {
		null, "'program'", "'var'", "'begin'", "'end.'", "'read'", "'write'", 
		"'if'", "'then'", "'fi'", "'repeat'", "'until'", null, null, null, null, 
		null, null, null, "';'", "':'", "','", "'.'", "'='", null, null, null, 
		"'('", "')'"
	};
	private static final String[] _SYMBOLIC_NAMES = {
		null, null, null, null, null, null, null, null, null, null, null, null, 
		"RealNum", "IntNum", "BoolConst", "UnsignedInt", "UnsignedReal", "Type", 
		"Ident", "Semi", "Colon", "Comma", "Dot", "AssignOp", "RelOp", "AddOp", 
		"MultOp", "LBracket", "RBracket", "WS"
	};
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}


	public Z99Lexer(CharStream input) {
		super(input);
		_interp = new LexerATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@Override
	public String getGrammarFileName() { return "Z99.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public String[] getChannelNames() { return channelNames; }

	@Override
	public String[] getModeNames() { return modeNames; }

	@Override
	public ATN getATN() { return _ATN; }

	public static final String _serializedATN =
		"\3\u608b\ua72a\u8133\ub9ed\u417c\u3be7\u7786\u5964\2\37\u0104\b\1\4\2"+
		"\t\2\4\3\t\3\4\4\t\4\4\5\t\5\4\6\t\6\4\7\t\7\4\b\t\b\4\t\t\t\4\n\t\n\4"+
		"\13\t\13\4\f\t\f\4\r\t\r\4\16\t\16\4\17\t\17\4\20\t\20\4\21\t\21\4\22"+
		"\t\22\4\23\t\23\4\24\t\24\4\25\t\25\4\26\t\26\4\27\t\27\4\30\t\30\4\31"+
		"\t\31\4\32\t\32\4\33\t\33\4\34\t\34\4\35\t\35\4\36\t\36\4\37\t\37\4 \t"+
		" \4!\t!\4\"\t\"\4#\t#\4$\t$\4%\t%\4&\t&\4\'\t\'\4(\t(\3\2\3\2\3\2\3\2"+
		"\3\2\3\2\3\2\3\2\3\3\3\3\3\3\3\3\3\4\3\4\3\4\3\4\3\4\3\4\3\5\3\5\3\5\3"+
		"\5\3\5\3\6\3\6\3\6\3\6\3\6\3\7\3\7\3\7\3\7\3\7\3\7\3\b\3\b\3\b\3\t\3\t"+
		"\3\t\3\t\3\t\3\n\3\n\3\n\3\13\3\13\3\13\3\13\3\13\3\13\3\13\3\f\3\f\3"+
		"\f\3\f\3\f\3\f\3\r\5\r\u008d\n\r\3\r\3\r\3\16\5\16\u0092\n\16\3\16\3\16"+
		"\3\17\3\17\5\17\u0098\n\17\3\20\6\20\u009b\n\20\r\20\16\20\u009c\3\21"+
		"\3\21\3\21\3\21\3\21\3\21\5\21\u00a5\n\21\5\21\u00a7\n\21\3\22\3\22\3"+
		"\22\3\22\3\22\3\22\3\22\3\22\3\22\3\22\3\22\5\22\u00b4\n\22\3\23\3\23"+
		"\7\23\u00b8\n\23\f\23\16\23\u00bb\13\23\3\24\3\24\3\25\3\25\3\26\3\26"+
		"\3\27\3\27\3\30\3\30\3\31\3\31\3\31\3\31\3\31\3\31\3\31\3\31\3\31\3\31"+
		"\5\31\u00d1\n\31\3\32\3\32\5\32\u00d5\n\32\3\33\3\33\5\33\u00d9\n\33\3"+
		"\34\3\34\5\34\u00dd\n\34\3\35\3\35\3\36\3\36\3\37\3\37\3 \3 \3!\3!\3\""+
		"\3\"\3#\3#\3$\3$\3%\3%\3%\3%\3%\3&\3&\3&\3&\3&\3&\3\'\3\'\5\'\u00fc\n"+
		"\'\3(\6(\u00ff\n(\r(\16(\u0100\3(\3(\2\2)\3\3\5\4\7\5\t\6\13\7\r\b\17"+
		"\t\21\n\23\13\25\f\27\r\31\16\33\17\35\20\37\21!\22#\23%\24\'\25)\26+"+
		"\27-\30/\31\61\32\63\33\65\34\67\29\2;\2=\35?\36A\2C\2E\2G\2I\2K\2M\2"+
		"O\37\3\2\5\4\2C\\c|\3\2\62;\5\2\13\f\16\17\"\"\2\u010c\2\3\3\2\2\2\2\5"+
		"\3\2\2\2\2\7\3\2\2\2\2\t\3\2\2\2\2\13\3\2\2\2\2\r\3\2\2\2\2\17\3\2\2\2"+
		"\2\21\3\2\2\2\2\23\3\2\2\2\2\25\3\2\2\2\2\27\3\2\2\2\2\31\3\2\2\2\2\33"+
		"\3\2\2\2\2\35\3\2\2\2\2\37\3\2\2\2\2!\3\2\2\2\2#\3\2\2\2\2%\3\2\2\2\2"+
		"\'\3\2\2\2\2)\3\2\2\2\2+\3\2\2\2\2-\3\2\2\2\2/\3\2\2\2\2\61\3\2\2\2\2"+
		"\63\3\2\2\2\2\65\3\2\2\2\2=\3\2\2\2\2?\3\2\2\2\2O\3\2\2\2\3Q\3\2\2\2\5"+
		"Y\3\2\2\2\7]\3\2\2\2\tc\3\2\2\2\13h\3\2\2\2\rm\3\2\2\2\17s\3\2\2\2\21"+
		"v\3\2\2\2\23{\3\2\2\2\25~\3\2\2\2\27\u0085\3\2\2\2\31\u008c\3\2\2\2\33"+
		"\u0091\3\2\2\2\35\u0097\3\2\2\2\37\u009a\3\2\2\2!\u00a6\3\2\2\2#\u00b3"+
		"\3\2\2\2%\u00b5\3\2\2\2\'\u00bc\3\2\2\2)\u00be\3\2\2\2+\u00c0\3\2\2\2"+
		"-\u00c2\3\2\2\2/\u00c4\3\2\2\2\61\u00d0\3\2\2\2\63\u00d4\3\2\2\2\65\u00d8"+
		"\3\2\2\2\67\u00dc\3\2\2\29\u00de\3\2\2\2;\u00e0\3\2\2\2=\u00e2\3\2\2\2"+
		"?\u00e4\3\2\2\2A\u00e6\3\2\2\2C\u00e8\3\2\2\2E\u00ea\3\2\2\2G\u00ec\3"+
		"\2\2\2I\u00ee\3\2\2\2K\u00f3\3\2\2\2M\u00fb\3\2\2\2O\u00fe\3\2\2\2QR\7"+
		"r\2\2RS\7t\2\2ST\7q\2\2TU\7i\2\2UV\7t\2\2VW\7c\2\2WX\7o\2\2X\4\3\2\2\2"+
		"YZ\7x\2\2Z[\7c\2\2[\\\7t\2\2\\\6\3\2\2\2]^\7d\2\2^_\7g\2\2_`\7i\2\2`a"+
		"\7k\2\2ab\7p\2\2b\b\3\2\2\2cd\7g\2\2de\7p\2\2ef\7f\2\2fg\7\60\2\2g\n\3"+
		"\2\2\2hi\7t\2\2ij\7g\2\2jk\7c\2\2kl\7f\2\2l\f\3\2\2\2mn\7y\2\2no\7t\2"+
		"\2op\7k\2\2pq\7v\2\2qr\7g\2\2r\16\3\2\2\2st\7k\2\2tu\7h\2\2u\20\3\2\2"+
		"\2vw\7v\2\2wx\7j\2\2xy\7g\2\2yz\7p\2\2z\22\3\2\2\2{|\7h\2\2|}\7k\2\2}"+
		"\24\3\2\2\2~\177\7t\2\2\177\u0080\7g\2\2\u0080\u0081\7r\2\2\u0081\u0082"+
		"\7g\2\2\u0082\u0083\7c\2\2\u0083\u0084\7v\2\2\u0084\26\3\2\2\2\u0085\u0086"+
		"\7w\2\2\u0086\u0087\7p\2\2\u0087\u0088\7v\2\2\u0088\u0089\7k\2\2\u0089"+
		"\u008a\7n\2\2\u008a\30\3\2\2\2\u008b\u008d\5M\'\2\u008c\u008b\3\2\2\2"+
		"\u008c\u008d\3\2\2\2\u008d\u008e\3\2\2\2\u008e\u008f\5!\21\2\u008f\32"+
		"\3\2\2\2\u0090\u0092\5M\'\2\u0091\u0090\3\2\2\2\u0091\u0092\3\2\2\2\u0092"+
		"\u0093\3\2\2\2\u0093\u0094\5\37\20\2\u0094\34\3\2\2\2\u0095\u0098\5I%"+
		"\2\u0096\u0098\5K&\2\u0097\u0095\3\2\2\2\u0097\u0096\3\2\2\2\u0098\36"+
		"\3\2\2\2\u0099\u009b\5;\36\2\u009a\u0099\3\2\2\2\u009b\u009c\3\2\2\2\u009c"+
		"\u009a\3\2\2\2\u009c\u009d\3\2\2\2\u009d \3\2\2\2\u009e\u009f\5-\27\2"+
		"\u009f\u00a0\5\37\20\2\u00a0\u00a7\3\2\2\2\u00a1\u00a2\5\37\20\2\u00a2"+
		"\u00a4\5-\27\2\u00a3\u00a5\5\37\20\2\u00a4\u00a3\3\2\2\2\u00a4\u00a5\3"+
		"\2\2\2\u00a5\u00a7\3\2\2\2\u00a6\u009e\3\2\2\2\u00a6\u00a1\3\2\2\2\u00a7"+
		"\"\3\2\2\2\u00a8\u00a9\7k\2\2\u00a9\u00aa\7p\2\2\u00aa\u00b4\7v\2\2\u00ab"+
		"\u00ac\7t\2\2\u00ac\u00ad\7g\2\2\u00ad\u00ae\7c\2\2\u00ae\u00b4\7n\2\2"+
		"\u00af\u00b0\7d\2\2\u00b0\u00b1\7q\2\2\u00b1\u00b2\7q\2\2\u00b2\u00b4"+
		"\7n\2\2\u00b3\u00a8\3\2\2\2\u00b3\u00ab\3\2\2\2\u00b3\u00af\3\2\2\2\u00b4"+
		"$\3\2\2\2\u00b5\u00b9\59\35\2\u00b6\u00b8\5\67\34\2\u00b7\u00b6\3\2\2"+
		"\2\u00b8\u00bb\3\2\2\2\u00b9\u00b7\3\2\2\2\u00b9\u00ba\3\2\2\2\u00ba&"+
		"\3\2\2\2\u00bb\u00b9\3\2\2\2\u00bc\u00bd\7=\2\2\u00bd(\3\2\2\2\u00be\u00bf"+
		"\7<\2\2\u00bf*\3\2\2\2\u00c0\u00c1\7.\2\2\u00c1,\3\2\2\2\u00c2\u00c3\7"+
		"\60\2\2\u00c3.\3\2\2\2\u00c4\u00c5\7?\2\2\u00c5\60\3\2\2\2\u00c6\u00d1"+
		"\7>\2\2\u00c7\u00c8\7>\2\2\u00c8\u00d1\7?\2\2\u00c9\u00ca\7?\2\2\u00ca"+
		"\u00d1\7?\2\2\u00cb\u00d1\7@\2\2\u00cc\u00cd\7@\2\2\u00cd\u00d1\7?\2\2"+
		"\u00ce\u00cf\7#\2\2\u00cf\u00d1\7?\2\2\u00d0\u00c6\3\2\2\2\u00d0\u00c7"+
		"\3\2\2\2\u00d0\u00c9\3\2\2\2\u00d0\u00cb\3\2\2\2\u00d0\u00cc\3\2\2\2\u00d0"+
		"\u00ce\3\2\2\2\u00d1\62\3\2\2\2\u00d2\u00d5\5A!\2\u00d3\u00d5\5C\"\2\u00d4"+
		"\u00d2\3\2\2\2\u00d4\u00d3\3\2\2\2\u00d5\64\3\2\2\2\u00d6\u00d9\5E#\2"+
		"\u00d7\u00d9\5G$\2\u00d8\u00d6\3\2\2\2\u00d8\u00d7\3\2\2\2\u00d9\66\3"+
		"\2\2\2\u00da\u00dd\59\35\2\u00db\u00dd\5;\36\2\u00dc\u00da\3\2\2\2\u00dc"+
		"\u00db\3\2\2\2\u00dd8\3\2\2\2\u00de\u00df\t\2\2\2\u00df:\3\2\2\2\u00e0"+
		"\u00e1\t\3\2\2\u00e1<\3\2\2\2\u00e2\u00e3\7*\2\2\u00e3>\3\2\2\2\u00e4"+
		"\u00e5\7+\2\2\u00e5@\3\2\2\2\u00e6\u00e7\7-\2\2\u00e7B\3\2\2\2\u00e8\u00e9"+
		"\7/\2\2\u00e9D\3\2\2\2\u00ea\u00eb\7,\2\2\u00ebF\3\2\2\2\u00ec\u00ed\7"+
		"\61\2\2\u00edH\3\2\2\2\u00ee\u00ef\7v\2\2\u00ef\u00f0\7t\2\2\u00f0\u00f1"+
		"\7w\2\2\u00f1\u00f2\7g\2\2\u00f2J\3\2\2\2\u00f3\u00f4\7h\2\2\u00f4\u00f5"+
		"\7c\2\2\u00f5\u00f6\7n\2\2\u00f6\u00f7\7u\2\2\u00f7\u00f8\7g\2\2\u00f8"+
		"L\3\2\2\2\u00f9\u00fc\5A!\2\u00fa\u00fc\5C\"\2\u00fb\u00f9\3\2\2\2\u00fb"+
		"\u00fa\3\2\2\2\u00fcN\3\2\2\2\u00fd\u00ff\t\4\2\2\u00fe\u00fd\3\2\2\2"+
		"\u00ff\u0100\3\2\2\2\u0100\u00fe\3\2\2\2\u0100\u0101\3\2\2\2\u0101\u0102"+
		"\3\2\2\2\u0102\u0103\b(\2\2\u0103P\3\2\2\2\21\2\u008c\u0091\u0097\u009c"+
		"\u00a4\u00a6\u00b3\u00b9\u00d0\u00d4\u00d8\u00dc\u00fb\u0100\3\b\2\2";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}