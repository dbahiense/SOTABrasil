<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/plugins/twigfeeds/blueprints.yaml',
    'modified' => 1644961878,
    'data' => [
        'name' => 'Twig Feeds',
        'version' => '5.0.0-beta.1',
        'description' => 'Parse RSS, Atom, and JSON feeds with Twig.',
        'icon' => 'feed',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.me',
            'url' => 'http://olevik.me'
        ],
        'homepage' => 'https://github.com/olevik/grav-plugin-twigfeeds',
        'keywords' => 'avatar, avatars, identicon, identicons',
        'bugs' => 'https://github.com/olevik/grav-plugin-twigfeeds/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_TWIGFEEDS.ADMIN.TABS.OPTIONS',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cache' => [
                                    'type' => 'toggle',
                                    'label' => 'Cache Feeds',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'static_cache' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.STATIC_CACHE.LABEL',
                                    'description' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.STATIC_CACHE.DESCRIPTION',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'debug' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.DEBUG.LABEL',
                                    'description' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.DEBUG.DESCRIPTION',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'silence_security' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.SILENCE_SECURITY.LABEL',
                                    'description' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.SILENCE_SECURITY.DESCRIPTION',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'twig_feeds' => [
                                    'name' => 'twig_feeds',
                                    'type' => 'list',
                                    'array' => true,
                                    'style' => 'vertical',
                                    'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.LABEL',
                                    'fields' => [
                                        '.source' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.SOURCE.LABEL',
                                            'description' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.SOURCE.DESCRIPTION',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.NAME.LABEL',
                                            'description' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.NAME.DESCRIPTION'
                                        ],
                                        '.start' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.START.LABEL',
                                            'description' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.START.DESCRIPTION',
                                            'validate' => [
                                                'type' => 'int',
                                                'min' => 0,
                                                'max' => 500
                                            ]
                                        ],
                                        '.end' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.END.LABEL',
                                            'description' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.END.DESCRIPTION',
                                            'validate' => [
                                                'type' => 'int',
                                                'min' => 0,
                                                'max' => 500
                                            ]
                                        ],
                                        '.cache_time' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.CACHE_TIME.LABEL',
                                            'description' => 'PLUGIN_TWIGFEEDS.ADMIN.OPTIONS.TWIG_FEEDS.CACHE_TIME.DESCRIPTION',
                                            'validate' => [
                                                'type' => 'int',
                                                'min' => 0
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'request' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_TWIGFEEDS.ADMIN.TABS.REQUEST',
                            'fields' => [
                                'request_options.allow_redirects' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_TWIGFEEDS.ADMIN.REQUEST.ALLOW_REDIRECTS.LABEL',
                                    'description' => 'PLUGIN_TWIGFEEDS.ADMIN.REQUEST.ALLOW_REDIRECTS.DESCRIPTION',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'request_options.connect_timeout' => [
                                    'type' => 'number',
                                    'label' => 'PLUGIN_TWIGFEEDS.ADMIN.REQUEST.CONNECT_TIMEOUT.LABEL',
                                    'description' => 'PLUGIN_TWIGFEEDS.ADMIN.REQUEST.CONNECT_TIMEOUT.DESCRIPTION',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 360,
                                        'step' => 0.5
                                    ]
                                ],
                                'request_options.http_errors' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_TWIGFEEDS.ADMIN.REQUEST.HTTP_ERRORS.LABEL',
                                    'description' => 'PLUGIN_TWIGFEEDS.ADMIN.REQUEST.HTTP_ERRORS.DESCRIPTION',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'request_options.timeout' => [
                                    'type' => 'number',
                                    'label' => 'PLUGIN_TWIGFEEDS.ADMIN.REQUEST.TIMEOUT.LABEL',
                                    'description' => 'PLUGIN_TWIGFEEDS.ADMIN.REQUEST.TIMEOUT.DESCRIPTION',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 360,
                                        'step' => 0.5
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
