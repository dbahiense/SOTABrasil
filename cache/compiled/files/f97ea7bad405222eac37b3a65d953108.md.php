<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/sotabrasil.com.br/user/pages/lms-home/page.md',
    'modified' => 1648412460,
    'data' => [
        'header' => [
            'title' => 'Home in LMS',
            'visible' => false,
            'hide_page_title' => true,
            'show_sidebar' => false,
            'cache_enable' => false,
            'hide_git_sync_repo_link' => true,
            'published' => false
        ],
        'frontmatter' => 'title: \'Home in LMS\'
visible: false
hide_page_title: true
show_sidebar: false
cache_enable: false
hide_git_sync_repo_link: true
published: false',
        'markdown' => '[plugin:page-inject](/home/_reminders)

[plugin:page-inject](/home/_preparations)
'
    ]
];
