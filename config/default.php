<?php
/**
 * Loader
 */
$loader->add('Aura\Framework_Demo\\', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');

/**
 * Router
 */
$di->params['Aura\Router\Map']['attach']['/'] = $di->lazyRequire("$system/package/Aura.Framework_Demo/routes.php");

/**
 * Aura\Framework\Cli\Factory
 */
$di->params['Aura\Framework\Cli\Factory']['map']["$system/package/Aura.Framework_Demo/cli/hello"] = 'Aura\Framework_Demo\Cli\Hello\Command';

/**
 * Aura\Framework\Web\Controller\Factory
 */
$di->params['Aura\Framework\Web\Controller\Factory']['map']['aura.demo.hello'] = 'Aura\Framework_Demo\Web\Hello\Page';
