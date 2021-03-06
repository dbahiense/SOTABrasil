<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/blueprints/sections.yaml',
    'modified' => 1644961881,
    'data' => [
        'title' => 'Course Hub Page Options',
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
                        'sectionpages' => [
                            'type' => 'tab',
                            'title' => 'Sections Pages',
                            'fields' => [
                                'header.content.items' => [
                                    'type' => 'hidden',
                                    'default' => '@self.children'
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'Order By',
                                    'default' => 'date',
                                    'options' => [
                                        'folder' => 'Folder',
                                        'title' => 'Title',
                                        'date' => 'Date',
                                        'default' => 'Default'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'Order',
                                    'default' => 'asc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ]
                                ],
                                'appearance' => [
                                    'type' => 'section',
                                    'title' => 'Appearance',
                                    'underline' => true
                                ],
                                'header.sections_nav_align' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'Section Navbar Alignment',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'Left',
                                        'right' => 'Right'
                                    ]
                                ],
                                'header.hide_next_prev_page_buttons' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Next/Prev Section Buttons',
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
