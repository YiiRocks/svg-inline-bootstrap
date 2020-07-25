<?php
return YiiRocks\SvgInline\Bootstrap\cs\Config::create()
    ->setCacheFile(__DIR__ . '/tests/runtime/php_cs.cache')
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->exclude('docs')
);