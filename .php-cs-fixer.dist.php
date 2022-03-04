<?php

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP71Migration' => true,
        '@PHP73Migration' => true,
        '@PHPUnit48Migration:risky' => true,
        '@PhpCsFixer' => true,
        'align_multiline_comment' => true,
        'array_syntax' => ['syntax' => 'short'],
        'comment_to_phpdoc' => [
            'ignored_tags' => ['todo'],
        ],
        'concat_space' => ['spacing' => 'one'],
        'constant_case' => true,
        'declare_strict_types' => false,
        'dir_constant' => true,
        'echo_tag_syntax' => true,
        'general_phpdoc_annotation_remove' => ['annotations' => ['author', 'package']],
        'heredoc_to_nowdoc' => true,
        'increment_style' => ['style' => 'post'],
        'fully_qualified_strict_types' => true,
        'line_ending' => true,
        'linebreak_after_opening_tag' => true,
        'mb_str_functions' => true,
        'modernize_types_casting' => true,
        'multiline_whitespace_before_semicolons' => true,
        'native_function_invocation' => [
            'include' => [
                '@internal',
            ],
            'scope' => 'all',
            'strict' => false,
        ],
        'no_closing_tag' => true,
        'no_php4_constructor' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_trailing_whitespace' => true,
        'ordered_imports' => true,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_order' => true,
        'phpdoc_summary' => false,
        'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
        'protected_to_private' => false,
        'semicolon_after_instruction' => true,
        'single_line_comment_style' => [
            'comment_types' => ['hash'],
        ],
        'strict_param' => true,
        'yoda_style' => [
            'always_move_variable' => false,
            'equal' => false,
            'identical' => false,
        ],
    ])
    ->setFinder($finder);
