<?php

declare(strict_types=1);

namespace YiiRocks\SvgInline\Bootstrap\tests;

use Psr\Container\ContainerInterface;
use YiiRocks\SvgInline\SvgInline;
use YiiRocks\SvgInline\SvgInlineInterface;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Config\Config;
use Yiisoft\Config\ConfigPaths;
use Yiisoft\Config\Modifier\RecursiveMerge;
use Yiisoft\Di\Container;
use Yiisoft\Di\ContainerConfig;

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
        $config = new Config(
            new ConfigPaths(dirname(__DIR__), 'config'),
            '/',
            [RecursiveMerge::groups('params')]
        );
        $containerConfig = ContainerConfig::create()
            ->withDefinitions(
                $config->get('di-web')
            );
        $this->container = new Container($containerConfig);
        $this->aliases = $this->container->get(Aliases::class);
        $this->aliases->set('@root', dirname(__DIR__));
        $this->aliases->set('@vendor', '@root/vendor');
        $this->svgInline = $this->container->get(SvgInlineInterface::class);
    }
}
