<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/blueprints/modular/item.yaml',
    'modified' => 1644961881,
    'data' => [
        'title' => 'Item',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Item',
                            'fields' => [
                                'header_image' => [
                                    'type' => 'section',
                                    'title' => 'Header Image',
                                    'underline' => true
                                ],
                                'header.header_image' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Display Header Image',
                                    'help' => 'Enabled displaying of a header image',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'header.header_image_file' => [
                                    'type' => 'mediapicker',
                                    'toggleable' => true,
                                    'label' => 'Image File',
                                    'help' => 'image filename that exists in the page folder. If not provided, will use the first image found.',
                                    'placeholder' => 'For example: myimage.jpg'
                                ],
                                'header.header_image_width' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image Width',
                                    'size' => 'small',
                                    'help' => 'Header width in px',
                                    'placeholder' => 'Default is 900',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 5000
                                    ]
                                ],
                                'header.header_image_height' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image Height',
                                    'size' => 'small',
                                    'help' => 'Header height in px',
                                    'placeholder' => 'Default is 300',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 5000
                                    ]
                                ],
                                'header.header_image_alt_text' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Image Alternative Text',
                                    'default' => NULL
                                ],
                                'header.header_image_credit' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Image Caption',
                                    'default' => NULL
                                ],
                                'header.header_image_creditlink' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Image Caption URL',
                                    'default' => NULL,
                                    'validate' => [
                                        'type' => 'URL'
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
