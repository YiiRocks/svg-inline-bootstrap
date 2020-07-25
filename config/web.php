<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use YiiRocks\SvgInline\Bootstrap\SvgInlineBootstrap;
use YiiRocks\SvgInline\Bootstrap\SvgInlineBootstrapInterface;
use Yiisoft\Aliases\Aliases;

/* @var array $params */

return [
    SvgInlineBootstrapInterface::class => static function (ContainerInterface $container) use ($params) {
        $bootstrap = new SvgInlineBootstrap($container->get(Aliases::class), $container);
        $bootstrap->setBootstrapIconsFolder($params['yiirocks/svg-inline-bootstrap']['bootstrapIconsFolder']);
        $bootstrap->setFallbackIcon($params['yiirocks/svg-inline-bootstrap']['fallbackIcon']);
        $bootstrap->setFill($params['yiirocks/svg-inline-bootstrap']['fill']);
        $bootstrap->setPrefix($params['yiirocks/svg-inline-bootstrap']['prefix']);
        $bootstrap->setFixedWidth($params['yiirocks/svg-inline-bootstrap']['fixedWidth']);

        return $bootstrap;
    },
];
