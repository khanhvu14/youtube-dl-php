<?php

$finder = (new PhpCsFixer\Finder())
    ->files()
    ->in(__DIR__ . '/src');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@PHP70Migration' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration:risky' => true,
        '@PHP73Migration' => true,
        'linebreak_after_opening_tag' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'ordered_imports' => [
            'imports_order' => ['class', 'const', 'function'],
        ],
        'yoda_style' => false,
        'static_lambda' => true,
        'align_multiline_comment' => true,
        'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
        'no_superfluous_phpdoc_tags' => false,
    ])
    ->setFinder($finder);
