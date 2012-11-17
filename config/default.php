<?php
/**
 * Package prefix for autoloader.
 */
$loader->add('Aura\Demo\\', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');

// mappings for the web controller factory
$di->params['Aura\Framework\Web\Controller\Factory']['map']['aura.demo.hello'] = 'Aura\Demo\Web\Hello\Page';
