// Generated from d:\122\Compilator\php-antlr\Z99copy.g4 by ANTLR 4.7.1
import org.antlr.v4.runtime.Lexer;
import org.antlr.v4.runtime.CharStream;
import org.antlr.v4.runtime.Token;
import org.antlr.v4.runtime.TokenStream;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.misc.*;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast"})
public class Z99copyLexer extends Lexer {
	static { RuntimeMetaData.checkVersion("4.7.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, Ident=3, DeclareList=4, Declaration=5, IdentList=6, Type=7, 
		Semi=8, Colon=9, Comma=10, WS=11;
	public static String[] channelNames = {
		"DEFAULT_TOKEN_CHANNEL", "HIDDEN"
	};

	public static String[] modeNames = {
		"DEFAULT_MODE"
	};

	public static final String[] ruleNames = {
		"T__0", "T__1", "Ident", "DeclareList", "Declaration", "IdentList", "Type", 
		"Semi", "Colon", "Comma", "LetterOrDigit", "Letter", "Digit", "WS"
	};

	private static final String[] _LITERAL_NAMES = {
		null, "'program'", "'var'", null, null, null, null, null, "';'", "':'", 
		"','"
	};
	private static final String[] _SYMBOLIC_NAMES = {
		null, null, null, "Ident", "DeclareList", "Declaration", "IdentList", 
		"Type", "Semi", "Colon", "Comma", "WS"
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


	public Z99copyLexer(CharStream input) {
		super(input);
		_interp = new LexerATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@Override
	public String getGrammarFileName() { return "Z99copy.g4"; }

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
		"\3\u608b\ua72a\u8133\ub9ed\u417c\u3be7\u7786\u5964\2\rj\b\1\4\2\t\2\4"+
		"\3\t\3\4\4\t\4\4\5\t\5\4\6\t\6\4\7\t\7\4\b\t\b\4\t\t\t\4\n\t\n\4\13\t"+
		"\13\4\f\t\f\4\r\t\r\4\16\t\16\4\17\t\17\3\2\3\2\3\2\3\2\3\2\3\2\3\2\3"+
		"\2\3\3\3\3\3\3\3\3\3\4\3\4\7\4.\n\4\f\4\16\4\61\13\4\3\5\3\5\3\5\3\5\7"+
		"\5\67\n\5\f\5\16\5:\13\5\3\6\3\6\3\6\3\6\3\7\3\7\3\7\3\7\7\7D\n\7\f\7"+
		"\16\7G\13\7\3\b\3\b\3\b\3\b\3\b\3\b\3\b\3\b\3\b\3\b\3\b\5\bT\n\b\3\t\3"+
		"\t\3\n\3\n\3\13\3\13\3\f\3\f\5\f^\n\f\3\r\3\r\3\16\3\16\3\17\6\17e\n\17"+
		"\r\17\16\17f\3\17\3\17\2\2\20\3\3\5\4\7\5\t\6\13\7\r\b\17\t\21\n\23\13"+
		"\25\f\27\2\31\2\33\2\35\r\3\2\5\4\2C\\c|\3\2\62;\5\2\13\f\16\17\"\"\2"+
		"m\2\3\3\2\2\2\2\5\3\2\2\2\2\7\3\2\2\2\2\t\3\2\2\2\2\13\3\2\2\2\2\r\3\2"+
		"\2\2\2\17\3\2\2\2\2\21\3\2\2\2\2\23\3\2\2\2\2\25\3\2\2\2\2\35\3\2\2\2"+
		"\3\37\3\2\2\2\5\'\3\2\2\2\7+\3\2\2\2\t\62\3\2\2\2\13;\3\2\2\2\r?\3\2\2"+
		"\2\17S\3\2\2\2\21U\3\2\2\2\23W\3\2\2\2\25Y\3\2\2\2\27]\3\2\2\2\31_\3\2"+
		"\2\2\33a\3\2\2\2\35d\3\2\2\2\37 \7r\2\2 !\7t\2\2!\"\7q\2\2\"#\7i\2\2#"+
		"$\7t\2\2$%\7c\2\2%&\7o\2\2&\4\3\2\2\2\'(\7x\2\2()\7c\2\2)*\7t\2\2*\6\3"+
		"\2\2\2+/\5\31\r\2,.\5\27\f\2-,\3\2\2\2.\61\3\2\2\2/-\3\2\2\2/\60\3\2\2"+
		"\2\60\b\3\2\2\2\61/\3\2\2\2\628\5\13\6\2\63\64\5\21\t\2\64\65\5\13\6\2"+
		"\65\67\3\2\2\2\66\63\3\2\2\2\67:\3\2\2\28\66\3\2\2\289\3\2\2\29\n\3\2"+
		"\2\2:8\3\2\2\2;<\5\r\7\2<=\5\23\n\2=>\5\17\b\2>\f\3\2\2\2?E\5\7\4\2@A"+
		"\5\25\13\2AB\5\7\4\2BD\3\2\2\2C@\3\2\2\2DG\3\2\2\2EC\3\2\2\2EF\3\2\2\2"+
		"F\16\3\2\2\2GE\3\2\2\2HI\7k\2\2IJ\7p\2\2JT\7v\2\2KL\7t\2\2LM\7g\2\2MN"+
		"\7c\2\2NT\7n\2\2OP\7d\2\2PQ\7q\2\2QR\7q\2\2RT\7n\2\2SH\3\2\2\2SK\3\2\2"+
		"\2SO\3\2\2\2T\20\3\2\2\2UV\7=\2\2V\22\3\2\2\2WX\7<\2\2X\24\3\2\2\2YZ\7"+
		".\2\2Z\26\3\2\2\2[^\5\31\r\2\\^\5\33\16\2][\3\2\2\2]\\\3\2\2\2^\30\3\2"+
		"\2\2_`\t\2\2\2`\32\3\2\2\2ab\t\3\2\2b\34\3\2\2\2ce\t\4\2\2dc\3\2\2\2e"+
		"f\3\2\2\2fd\3\2\2\2fg\3\2\2\2gh\3\2\2\2hi\b\17\2\2i\36\3\2\2\2\t\2/8E"+
		"S]f\3\b\2\2";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}