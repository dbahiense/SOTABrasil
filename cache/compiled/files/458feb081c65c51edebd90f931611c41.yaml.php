<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/config/plugins/admin.yaml',
    'modified' => 1644961865,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'cache_enabled' => false,
        'theme' => 'grav',
        'content_padding' => true,
        'twofa_enabled' => true,
        'sidebar' => [
            'activate' => 'tab',
            'hover_delay' => 100,
            'size' => 'auto'
        ],
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'widgets' => [
            'dashboard-maintenance' => true,
            'dashboard-statistics' => true,
            'dashboard-notifications' => false,
            'dashboard-feed' => false,
            'dashboard-pages' => true
        ],
        'pages' => [
            'show_parents' => 'both'
        ],
        'session' => [
            'timeout' => 1800
        ],
        'warnings' => [
            'delete_page' => true
        ],
        'edit_mode' => 'normal',
        'frontend_pages_target' => '_blank',
        'show_github_msg' => false,
        'pages_list_display_field' => 'title',
        'google_fonts' => false,
        'admin_icons' => 'font-awesome',
        'enable_auto_updates_check' => false,
        'notifications' => [
            'feed' => true,
            'dashboard' => true,
            'plugins' => true,
            'themes' => true
        ],
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => '30',
                'monthly' => '12',
                'visitors' => '20'
            ]
        ],
        'add_modals' => [
            0 => [
                'label' => 'Add Blog Item',
                'blueprint' => 'admin/pages/new_blog_item',
                'show_in' => 'bar'
            ],
            1 => [
                'label' => 'Add Page with Sidebar',
                'blueprint' => 'admin/pages/new_page',
                'show_in' => 'bar'
            ],
            2 => [
                'label' => 'Add Course Subsites List',
                'blueprint' => 'admin/pages/new_subsite_list',
                'show_in' => 'dropdown'
            ],
            3 => [
                'label' => 'Add Course Subsite',
                'blueprint' => 'admin/pages/new_subsite',
                'show_in' => 'dropdown'
            ]
        ],
        'hide_page_types' => [
            0 => 'custompagetypes',
            1 => 'default',
            2 => 'error',
            3 => 'external',
            4 => 'flex-objects',
            5 => 'form',
            6 => 'formdata',
            7 => 'latestcustompagetype',
            8 => 'simplesearch_results',
            9 => 'wcstopnote'
        ]
    ]
];
