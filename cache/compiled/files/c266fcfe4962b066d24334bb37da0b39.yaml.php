<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/blueprints/admin/pages/new_subsite.yaml',
    'modified' => 1644961865,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Subsite'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Subsite Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'parents',
                    'label' => 'PLUGIN_ADMIN.PARENT',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'subsite'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => '1'
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
