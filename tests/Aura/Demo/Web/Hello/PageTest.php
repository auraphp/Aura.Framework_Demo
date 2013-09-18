<?php
namespace Aura\Framework\Web\Hello;

use Aura\Framework\Web\Controller\AbstractPageTest;

class PageTest extends AbstractPageTest
{
    protected $page_class = 'Aura\Framework_Demo\Web\Hello\Page';
    
    public function testActionIndex()
    {
        $page = $this->newPage([
            'action' => 'index',
        ]);
        $xfer = $page->exec();
        
        $this->assertInstanceOf('Aura\Web\Response', $xfer);
        $this->assertSame(200, $xfer->getStatusCode());
        
        $expect = 'Hello World!';
        $actual = trim($xfer->getContent());
        $this->assertSame($expect, $actual);
    }
}
