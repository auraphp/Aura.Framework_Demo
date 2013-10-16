<?php
return [
    'name_prefix' => 'aura.demo.',
    'routes' => [
        'home' => [
            'path' => '/',
            'values' => [
                'controller' => 'aura.demo.hello',
                'action' => 'index',
            ],
        ],
        'hello' => [
            'path' => '/hello',
            'values' => [
                'controller' => 'aura.demo.hello',
                'action' => 'index',
            ],
        ],
        'logo' => [
            'path' => '/logo',
            'values' => [
                'controller' => 'aura.demo.hello',
                'action' => 'logo',
            ],
        ],
        'accept' => [
            'path' => '/accept{:format:(\..+)?}',
            'values' => [
                'controller' => 'aura.demo.hello',
                'action' => 'accept'
            ],
        ],
    ],
];
