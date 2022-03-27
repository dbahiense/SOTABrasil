<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/config/plugins/git-sync.yaml',
    'modified' => 1648414787,
    'data' => [
        'enabled' => true,
        'SyncNotice' => NULL,
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'local_repository' => NULL,
        'repository' => 'https://github.com/dbahiense/SOTABrasil.git',
        'no_user' => '0',
        'user' => 'dbahiense',
        'password' => 'gitsync-def502009215213545ac7e68dfbf9de902c7c5e78089bb90df6036e85f5527169c140bee8dabd4c56a8093b3c5634d0b32f7e06c25f1c181c576dbe7caa38fa69652b06bdfbdfe57d42f8f73982611b89a20b4ac53a100f50cceb90eb39f1fa19e3b732ce3',
        'webhook' => '/_git-sync-98439a70a90f',
        'webhook_enabled' => '0',
        'webhook_secret' => '1803c5d30ac69abb130ddd47f0239ef9b1d40dcbac4b8052',
        'branch' => 'main',
        'remote' => [
            'name' => 'origin',
            'branch' => 'main'
        ],
        'git' => [
            'author' => 'gituser',
            'message' => '(Grav GitSync) Automatic Commit',
            'name' => 'Douglas Bahiense, PY1II',
            'email' => 'py1ii@sotabrasil.com.br',
            'bin' => 'git',
            'ignore' => NULL,
            'private_key' => NULL
        ],
        'logging' => false,
        'folders' => [
            0 => 'pages'
        ]
    ]
];
