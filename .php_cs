<?php
return PhpCsFixer\Config::create()
    ->setCacheFile(__DIR__ . '/tests/runtime/php_cs.cache')
    ->setUsingCache(false)
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'ordered_class_elements' => [
            'sortAlgorithm' => 'alpha',
        ],
        'no_unused_imports' => true,
        'ordered_imports' => [
            'imports_order' => [
                'class', 'function', 'const',
            ],
            'sortAlgorithm' => 'alpha',
        ],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    )
;
