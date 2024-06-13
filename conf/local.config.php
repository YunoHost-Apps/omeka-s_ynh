<?php
return [
    'logger' => [
        'log' => false,
        'priority' => \Laminas\Log\Logger::NOTICE,
    ],
    'http_client' => [
        'sslcapath' => null,
        'sslcafile' => null,
    ],
    'cli' => [
        'phpcli_path' => null,
    ],
    'thumbnails' => [
        'types' => [
            'large' => ['constraint' => 800],
            'medium' => ['constraint' => 200],
            'square' => ['constraint' => 200],
        ],
        'thumbnailer_options' => [
            'imagemagick_dir' => null,
        ],
    ],
    'translator' => [
        'locale' => 'en_US',
    ],
    'service_manager' => [
        'aliases' => [
            'Omeka\File\Store' => 'Omeka\File\Store\Local',
            'Omeka\File\Thumbnailer' => 'Omeka\File\Thumbnailer\ImageMagick',
        ],
    ],
    'ldap' => [
        'adapter_options' => [
            'server1' => [
                'host' => 'localhost',
                'username' => 'ou=users,dc=yunohost,dc=org',
                'password' => null,
                'bindRequiresDn' => true,
                'baseDn' => 'ou=users,dc=yunohost,dc=org',
                'accountFilterFormat' => "(&(|(objectclass=posixAccount))(uid={{username}})(permission=cn=__APP__.main,ou=permission,dc=yunohost,dc=org))",
                'accountCanonicalForm' => 4,
                #'accountDomainName' => 'example.com',
            ],
        ],
    ],
    'mail' => [
        'transport' => [
            'type' => 'smtp',
            'options' => [
                'name' => 'localhost',
                'host' => '127.0.0.1',
                'port' => 25, // 465 for 'ssl', and 587 for 'tls'
                'connection_class' => 'smtp', // 'plain', 'login', or 'crammd5'
                'connection_config' => [
                    'username' => null,
                    'password' => null,
                    'ssl' => null, // 'ssl' or 'tls'
                    'use_complete_quit' => true,
                ],
            ],
        ],
    ],

];
