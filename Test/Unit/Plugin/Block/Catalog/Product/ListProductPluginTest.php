<?php
/**
 * @author    Marek Zabrowarny <marek.zabrowarny@creativestyle.pl>
 * @copyright 2017 creativestyle
 */


namespace Creativestyle\CategoryHero\Test\Unit\Plugin\Block\Catalog\Product;

use Creativestyle\CategoryHero\Plugin\Block\Catalog\Product\ListProductPlugin;
use Magento\Framework\Registry;

class ListProductPluginTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var ListProductPlugin
     */
    protected $pluginInstance;

    protected function setUp()
    {
        $registryStub = $this->getMockBuilder(Registry::class)
            ->getMock();

        $this->pluginInstance = new ListProductPlugin($registryStub);
    }

    public function testPluginCanBeInstantiated()
    {
        $this->assertInstanceOf(ListProductPlugin::class, $this->pluginInstance);
    }
}
