<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/blueprints/item.yaml',
    'modified' => 1644961881,
    'data' => [
        'title' => 'Open Matter Item Options',
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
                            'type' => 'tab',
                            'fields' => [
                                'content' => [
                                    'default' => 'Your page summary goes here.

===

Your page content goes here.'
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog Item',
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
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
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
                                ],
                                'summary' => [
                                    'type' => 'section',
                                    'title' => 'Summary',
                                    'underline' => true
                                ],
                                'header.summary.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Summary',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'header.summary.format' => [
                                    'type' => 'select',
                                    'toggleable' => true,
                                    'label' => 'Format',
                                    'classes' => 'fancy',
                                    'options' => [
                                        'short' => 'Use the first occurence of delimiter or size',
                                        'long' => 'Summary delimiter will be ignored'
                                    ]
                                ],
                                'header.summary.size' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Size',
                                    'classes' => 'large',
                                    'placeholder' => 300,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.summary.delimiter' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Summary delimiter',
                                    'classes' => 'large',
                                    'placeholder' => '==='
                                ],
                                'openmatter1' => [
                                    'type' => 'section',
                                    'title' => 'Title Icon',
                                    'underline' => true
                                ],
                                'header.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon for Blog Item',
                                    'help' => 'Optional Font Awesome icon to override the default blog item title icon',
                                    'default' => NULL,
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'openmatter2' => [
                                    'type' => 'section',
                                    'title' => 'Blog List Options',
                                    'underline' => true
                                ],
                                'header.hide_from_post_list' => [
                                    'type' => 'toggle',
                                    'label' => 'Display this Item in Blog List',
                                    'help' => 'Determines if this page (i.e. post) will appear in the blog index',
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        0 => 'Yes',
                                        1 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.continue_link' => [
                                    'type' => 'toggle',
                                    'label' => 'Display \'View all of...\' Link with Blog Item',
                                    'help' => 'Determines if a \'View all of...\' link is displayed for items listed in the blog index',
                                    'default' => 1,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'openmatter3' => [
                                    'type' => 'section',
                                    'title' => 'Git Sync Link',
                                    'underline' => true
                                ],
                                'header.hide_git_sync_repo_link' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Git Sync Link on Blog Item',
                                    'help' => 'Determines if a Git Sync Link is displayed on this page',
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        0 => 'Yes',
                                        1 => 'No'
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
