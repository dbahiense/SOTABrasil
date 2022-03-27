<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/config/site.yaml',
    'modified' => 1648411097,
    'data' => [
        'title' => 'SOTA Brasil',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Douglas Bahiense, PY1II',
            'email' => 'douglas@rohling.com.br'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author',
            3 => 'filter'
        ],
        'metadata' => [
            'description' => 'A short description of your course would go here'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/home'
        ]
    ]
];
