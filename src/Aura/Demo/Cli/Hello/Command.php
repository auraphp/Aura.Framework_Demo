<?php
/**
 * 
 * This file is part of the Aura project for PHP.
 * 
 * @package Aura.Demo
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
namespace Aura\Demo\Cli\Hello;

use Aura\Framework\Cli\AbstractCommand;

/**
 * 
 * A simple CLI command to output "Hello, World!"
 * 
 * @package Aura.Demo
 * 
 */
class Command extends AbstractCommand
{
    /**
     * 
     * Sends "Hello World!" to standard output.
     * 
     * @return void
     * 
     */
    public function action()
    {
        $this->stdio->outln("Hello World!");
    }
}
