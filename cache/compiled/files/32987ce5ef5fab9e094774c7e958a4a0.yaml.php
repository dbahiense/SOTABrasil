<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/blueprints/blog.yaml',
    'modified' => 1644961881,
    'data' => [
        'title' => 'Open Matter Blog Options',
        '@extends' => [
            'type' => 'blog',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'fields' => [
                        'blog' => [
                            'fields' => [
                                'hero_title' => [
                                    'type' => 'section',
                                    'title' => 'Hero Section',
                                    'underline' => true
                                ],
                                'header.hero_classes' => [
                                    'type' => 'text',
                                    'label' => 'Hero Classes',
                                    'markdown' => true,
                                    'description' => 'There are several Hero class options that can be listed here (space separated):<br />`hero-small`, `hero-medium`, `hero-large`, `hero-fullscreen`'
                                ],
                                'header.hero_image' => [
                                    'type' => 'filepicker',
                                    'label' => 'Hero Image',
                                    'preview_images' => true,
                                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                                ],
                                'header.hero_scroll' => [
                                    'type' => 'toggle',
                                    'label' => 'Hero Scroll',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'appearanceoptions' => [
                                    'type' => 'section',
                                    'title' => 'Appearance',
                                    'underline' => true
                                ],
                                'header.hide_post_summary' => [
                                    'type' => 'toggle',
                                    'label' => 'Hide Summaries on Blog Post Pages',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.post_icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Default Font Awesome Icon for Blog List Items',
                                    'description' => 'Short name, e.g. \'newspaper-o\'.',
                                    'help' => 'Determines the default Font Awesome icon used for the blog posts.',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'header.hide_post_date' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Date on Blog List Items',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        0 => 'Yes',
                                        1 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.hide_post_taxonomy' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Taxonomy on Blog List Items',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        0 => 'Yes',
                                        1 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.continue_link_as_button' => [
                                    'type' => 'toggle',
                                    'label' => 'Display \'View all of...\' Links as Buttons',
                                    'help' => 'Determines if \'View all of...\' links are displayed as buttons',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
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
