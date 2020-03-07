<?php

namespace Z99Parser;

require 'vendor/autoload.php';

use Antlr\Antlr4\Runtime\CommonToken;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\ConsoleErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Utils\StringUtils;
use Generated\Z99Lexer;
use Generated\Z99Parser;

function token_to_string(CommonToken $token, array $tokenMap)
{
    $tokenType = array_key_exists($token->getType(), $tokenMap) ? $tokenMap[$token->getType()] : 'EOF';
    return \sprintf(
        '@%02d:%02d  %-10s %s \'%s\'',
        $token->getLine(),
        $token->getCharPositionInLine(),
        $tokenType,
        $token->getChannel() > 0 ? ',channel=' . $token->getChannel() : '',
        StringUtils::escapeWhitespace($token->getText() ?? '')
    ) . PHP_EOL;
}

$input = InputStream::fromPath('example.z99');
$lexer = new Z99Lexer($input);
$lexer->addErrorListener(new ConsoleErrorListener());
$tokens = new CommonTokenStream($lexer);
$tokens->fill();
$tokenMap = $lexer->getTokenTypeMap();
$tokenMap = array_flip($tokenMap);
foreach ($tokens->getAllTokens() as $token) {
    /* @var $token CommonToken */
    echo token_to_string($token, $tokenMap);
}
$parser = new Z99Parser($tokens);
$parser->addErrorListener(new ConsoleErrorListener());
$parser->setBuildParseTree(true);
$tree = $parser->program();

