<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/sotabrasil.com.br/user/pages/04.contact/sections.md',
    'modified' => 1648485513,
    'data' => [
        'header' => [
            'title' => 'Contato',
            'form' => [
                'name' => 'contact',
                'fields' => [
                    'name' => [
                        'label' => 'Nome',
                        'placeholder' => 'Digite o seu nome',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'email' => [
                        'label' => 'E-mail',
                        'placeholder' => 'E-mail',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'message' => [
                        'label' => 'Mensagem',
                        'placeholder' => 'Mensagem',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    'submit' => [
                        'type' => 'submit',
                        'value' => 'Enviar'
                    ],
                    'reset' => [
                        'type' => 'reset',
                        'value' => 'Limpar'
                    ]
                ],
                'process' => [
                    'save' => [
                        'fileprefix' => 'contact-',
                        'dateformat' => 'Ymd-His-u',
                        'extension' => 'txt',
                        'body' => '{% include \'forms/data.txt.twig\' %}'
                    ],
                    'email' => [
                        'subject' => '[Contato | SOTA Brasil] {{ form.value.name|e }}',
                        'body' => '{% include \'forms/data.html.twig\' %}'
                    ],
                    'message' => 'TNX FER QSO DR OM = 73 ES HPE CUAGN DE SOTA BR SK',
                    'display' => 'thankyou'
                ]
            ],
            'hide_page_title' => false,
            'hide_git_sync_repo_link' => true,
            'show_sidebar' => true
        ],
        'frontmatter' => 'title: Contato
form:
    name: contact
    fields:
        name:
            label: Nome
            placeholder: \'Digite o seu nome\'
            autocomplete: \'on\'
            type: text
            validate:
                required: true
        email:
            label: E-mail
            placeholder: E-mail
            type: email
            validate:
                required: true
        message:
            label: Mensagem
            placeholder: Mensagem
            type: textarea
            validate:
                required: true
    buttons:
        submit:
            type: submit
            value: Enviar
        reset:
            type: reset
            value: Limpar
    process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: \'{% include \'\'forms/data.txt.twig\'\' %}\'
        email:
            subject: \'[Contato | SOTA Brasil] {{ form.value.name|e }}\'
            body: \'{% include \'\'forms/data.html.twig\'\' %}\'
        message: \'TNX FER QSO DR OM = 73 ES HPE CUAGN DE SOTA BR SK\'
        display: thankyou
hide_page_title: false
hide_git_sync_repo_link: true
show_sidebar: true',
        'markdown' => ''
    ]
];
