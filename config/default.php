<?php
/**
 * Loader
 */
$loader->add('Aura\Demo\\', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');

/**
 * Aura\Framework\Cli\Factory
 */
$di->params['Aura\Framework\Cli\Factory']['map']["$system/package/Aura.Demo/cli/hello"] = 'Aura\Demo\Cli\Hello\Command';

/**
 * Aura\Framework\Web\Controller\Factory
 */
$di->params['Aura\Framework\Web\Controller\Factory']['map']['aura.demo.hello'] = 'Aura\Demo\Web\Hello\Page';

/**
 * Aura\Router\Map
 */
$di->params['Aura\Router\Map']['attach']['/'] = $di->lazyRequire("$system/package/Aura.Demo/routes.php");
