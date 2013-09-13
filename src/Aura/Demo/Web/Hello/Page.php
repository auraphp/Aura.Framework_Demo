<?php
/**
 * 
 * This file is part of the Aura Project for PHP.
 * 
 * @package Aura.Demo
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
namespace Aura\Demo\Web\Hello;

use Aura\Framework\Web\Controller\AbstractPage;

/**
 * 
 * A basic controller to show "Hello world" or an image asset.
 * 
 * @package Aura.Demo
 * 
 */
class Page extends AbstractPage
{
    /**
     * 
     * Sets the inner view to "index" and does nothing else.
     * 
     * @return void
     * 
     */
    public function actionIndex()
    {
        $this->view = 'index';
    }
    
    /**
     * 
     * Sets the inner view to "logo" and does nothing else.
     * 
     * @return void
     * 
     */
    public function actionLogo()
    {
        $this->view = 'logo';
    }
    
    /**
     * 
     * Shows how to deliver different content-types on a per-format basis.
     * 
     * @return void
     * 
     */
    public function actionAccept()
    {
        $this->view = [
            '.json' => function () {
                return '{ value : "json" }';
            },
            '.html' => function () {
                return '<dl><dt>value</dt><dd>html</dd></dl>';
            },
        ];
    }
}
