<?php
/**
 * Package prefix for autoloader.
 */
$loader->add('Aura\Demo\\', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');

// set up a simple "hello world" route
$di->get('router_map')->add('aura.demo.hello.index', '/hello', [
    'values' => [
        'controller' => 'aura.demo.hello',
        'action' => 'index',
    ],
]);

// mappings for the web controller factory
$di->params['Aura\Framework\Web\Controller\Factory']['map']['aura.demo.hello'] = 'Aura\Demo\Web\Hello\Page';
