<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/blueprints/admin/pages/new_subsite_list.yaml',
    'modified' => 1644961865,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Subsite List'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Subsite List Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'hidden',
                    'default' => '/'
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'subsitelist'
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
