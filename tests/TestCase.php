<?php

declare(strict_types=1);

namespace YiiRocks\SvgInline\Bootstrap\tests;

use Psr\Container\ContainerInterface;
use YiiRocks\SvgInline\SvgInline;
use YiiRocks\SvgInline\SvgInlineInterface;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Composer\Config\Builder;
use Yiisoft\Di\Container;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Aliases $aliases
     */
    protected $aliases;

    /**
     * @var SvgInline $svgInline
     */
    protected $svgInline;

    /**
     * @var ContainerInterface $container
     */
    private $container;

    protected function setUp(): void
    {
        parent::setUp();
        $config = require Builder::path('web');
        $this->container = new Container($config);
        $this->aliases = $this->container->get(Aliases::class);
        $this->aliases->set('@root', dirname(__DIR__, 1));
        $this->aliases->set('@assets', '@root/tests/assets');
        $this->aliases->set('@assetsUrl', '/baseUrl');
        $this->aliases->set('@vendor', '@root/vendor');
        $this->svgInline = $this->container->get(SvgInlineInterface::class);
    }
}
