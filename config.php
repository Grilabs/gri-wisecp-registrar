<?php
// Gri decides per domain (not per extension) whether documents are needed, so no static doc-fields here.
return [
    'meta'     => [
        'name'    => 'Gri',
        'version' => '2.0.0',
        'logo'    => 'logo.svg',
    ],
    'settings' => [
        // whois-types : true when (registrant, administrative, technical, billing) contact types are supported.
        'whois-types'   => true,
        'username'      => '',
        'password'      => '',
        'api_client'    => '',
        'api_secret'    => '',
        'test-mode'     => 0,
        'debug-mode'    => 0,
        'adp'           => false,
        'cost-currency' => 4,
        'nameservers'   => [],
        'doc-fields'    => [],
    ],
];
