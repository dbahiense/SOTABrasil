<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/config/themes/mytheme.yaml',
    'modified' => 1648414664,
    'data' => [
        'navbar_style' => 'navbar-dark',
        'navbar_position' => 'sticky-top',
        'navbar_breakpoint' => 'md',
        'git_sync.edit_theme_link_location' => 'none',
        'dropdown' => [
            'enabled' => false
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/mytheme',
                            1 => 'user/themes/bootstrap4-open-matter',
                            2 => 'user/themes/bootstrap4'
                        ]
                    ]
                ]
            ]
        ],
        'chromeless' => [
            'enabled' => false
        ],
        'display_of_git_sync_repo_link' => 'menu',
        'type_of_git_sync_repo_link' => 'view',
        'git_sync_edit_note_text' => 'Have a suggestion or correction?',
        'git_sync' => [
            'edit_theme_link_location' => 'none',
            'edit_theme_link_text' => 'Site Theme Files'
        ],
        'h5pembedrootpath' => 'https://h5p.org/h5p/embed/',
        'cc_license' => [
            'enabled' => false,
            'type' => 'ccby',
            'icon' => false,
            'text' => NULL
        ],
        'displaycustommenus' => [
            'enabled' => false
        ],
        'custommenu' => [
            0 => [
                'text' => 'Grav',
                'icon' => 'arrow-circle-right',
                'url' => 'https://getgrav.org/',
                'target' => '_blank'
            ]
        ],
        'theme_stylesheet' => 'default',
        'navbar_bg' => 'default',
        'navbar_bg_color' => '#009c3b',
        'git_sync_edit_theme_link_location' => 'none',
        'custom_git_sync_repo_link_icon' => NULL,
        'custom_git_sync_repo_link_text' => NULL,
        'custom_git_sync_repo_presentation_link_text' => NULL,
        'git_sync_repo_link' => NULL
    ]
];
