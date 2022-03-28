<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sotabrasil.com.br/user/config/plugins/git-sync.yaml',
    'modified' => 1648415883,
    'data' => [
        'enabled' => true,
        'SyncNotice' => NULL,
        'sync' => [
            'on_save' => false,
            'on_delete' => false,
            'on_media' => false,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'local_repository' => NULL,
        'repository' => 'https://github.com/dbahiense/SOTABrasil.git',
        'no_user' => '0',
        'user' => 'dbahiense',
        'password' => 'gitsync-def50200dc23cea003982f41df1712bdce37decb6db828e7e91e712b17d2586354ce4fc635947d80485103b5a97d07c4f30db23655027b87c6e45bfe342b36d5ceb002f480a2746147fad4540ef20933a9722794bec58ec8b2eb5f4f0909e897b4a494b166fd882ddbce6e87b05bb6682148e3c1560f00727e689225',
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
