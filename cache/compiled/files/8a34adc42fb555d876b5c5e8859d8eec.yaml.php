<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/blueprints/modular/alert.yaml',
    'modified' => 1644961881,
    'data' => [
        'title' => 'Alert Style Options',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.title' => [
                                    'replace@' => true,
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Page Title'
                                ],
                                'header.alert_style' => [
                                    'ordering@' => 1,
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'Alert Style',
                                    'default' => 'alert-secondary',
                                    'options' => [
                                        'alert-success' => 'Success',
                                        'alert-info' => 'Info',
                                        'alert-warning' => 'Warning',
                                        'alert-danger' => 'Danger',
                                        'alert-primary' => 'Primary',
                                        'alert-secondary' => 'Secondary',
                                        'alert-light' => 'Light',
                                        'alert-dark' => 'Dark'
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'fields' => [
                                'publishing' => [
                                    'fields' => [
                                        'header.published' => [
                                            'default' => 1
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.visible' => [
                                            'default' => 0
                                        ]
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
