<?php
namespace Aura\Demo\Cli\HelloWorld;

use Aura\Framework\Cli\AbstractCommandTest;

/**
 * Test class for Command.
 * Generated by PHPUnit on 2011-05-27 at 11:01:31.
 */
class CommandTest extends AbstractCommandTest
{
    protected $command_class = '\Aura\Demo\Cli\Hello\Command';
    
    public function test()
    {
        $command = $this->newCommand();
        $command->exec();
        
        // there should have been no errors
        $actual = file_get_contents($this->errfile);
        $this->assertSame('', $actual);
        
        // there should have been output
        $actual = file_get_contents($this->outfile);
        $this->assertSame('Hello World!' . PHP_EOL, $actual);
    }
}