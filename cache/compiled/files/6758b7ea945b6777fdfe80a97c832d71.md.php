<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/sotabrasil.com.br/user/pages/04.multi-section-page/sections.md',
    'modified' => 1644961865,
    'data' => [
        'header' => [
            'title' => 'Multi-Section Page',
            'published' => false,
            'hide_page_title' => true,
            'show_sidebar' => false,
            'sections_nav_align' => 'left',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ],
                'limit' => 0,
                'taxonomy' => [
                    'filter' => [
                        0 => 'view1',
                        1 => 'view2'
                    ]
                ]
            ],
            'child_type' => 'section'
        ],
        'frontmatter' => 'title: \'Multi-Section Page\'
published: false
hide_page_title: true
show_sidebar: false
sections_nav_align: left
content:
    items: \'@self.children\'
    order:
        by: folder
        dir: asc
    limit: 0    
    taxonomy:
        filter: [view1,view2]
child_type: section',
        'markdown' => '# Sections

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie iaculis nisl sed interdum. Praesent mi nisl, efficitur in felis vel, molestie sollicitudin eros. Mauris urna quam, euismod nec lacinia non, dignissim eu odio. Donec nisl nibh, facilisis at nisl vitae, porttitor hendrerit libero. Integer vel neque in ante condimentum malesuada. Mauris dictum nunc enim, non tincidunt arcu tincidunt vel. Aliquam gravida, massa id semper tincidunt, tellus sapien accumsan tortor, in placerat arcu justo ac urna. Vestibulum blandit ultrices neque, eget congue tortor vehicula id.
'
    ]
];
