<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/sotabrasil.com.br/user/pages/01.home/blog.md',
    'modified' => 1648410785,
    'data' => [
        'header' => [
            'title' => 'Home',
            'published' => false,
            'visible' => false,
            'hide_page_title' => true,
            'modular_content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ]
            ],
            'content' => [
                'items' => '@self.children',
                'limit' => 7,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => '1'
            ],
            'hide_post_summary' => true,
            'post_icon' => 'calendar-o',
            'hide_post_date' => true,
            'hide_post_taxonomy' => true,
            'feed' => [
                'description' => 'Grav CMS Open Matter Course Hub Description',
                'limit' => 10
            ],
            'child_type' => 'item',
            'show_sidebar' => true,
            'hide_git_sync_repo_link' => false,
            'hero_scroll' => false,
            'continue_link_as_button' => false
        ],
        'frontmatter' => 'title: Home
published: false
visible: false
hide_page_title: true
modular_content:
    items: \'@self.modular\'
    order:
        by: folder
        dir: asc
content:
    items: \'@self.children\'
    limit: 7
    order:
        by: date
        dir: desc
    pagination: \'1\'
hide_post_summary: true
post_icon: calendar-o
hide_post_date: true
hide_post_taxonomy: true
feed:
    description: \'Grav CMS Open Matter Course Hub Description\'
    limit: 10
child_type: item
show_sidebar: true
hide_git_sync_repo_link: false
hero_scroll: false
continue_link_as_button: false',
        'markdown' => ''
    ]
];
