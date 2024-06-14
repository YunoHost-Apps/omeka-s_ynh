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
                'username' => 'uid',
                'password' => null,
                'bindRequiresDn' => true,
                'baseDn' => 'ou=users,dc=yunohost,dc=org',
                'accountFilterFormat' => "(&(|(objectclass=posixAccount))(uid={{username}})(permission=cn=__APP__.main,ou=permission,dc=yunohost,dc=org))",
                'accountCanonicalForm' => 4,
                'accountDomainName' => '__DOMAIN__',
            ],
        ],
    ],
];
