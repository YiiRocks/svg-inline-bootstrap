<?php

declare(strict_types=1);

use YiiRocks\SvgInline\Bootstrap\SvgInlineBootstrap;
use YiiRocks\SvgInline\Bootstrap\SvgInlineBootstrapInterface;

/* @var array $params */

return [
    SvgInlineBootstrapInterface::class => [
        'class' => SvgInlineBootstrap::class,
        'setBootstrapIconsFolder()' => [$params['yiirocks/svg-inline-bootstrap']['bootstrapIconsFolder']],
        'setFallbackIcon()' => [$params['yiirocks/svg-inline-bootstrap']['fallbackIcon']],
        'setFill()' => [$params['yiirocks/svg-inline-bootstrap']['fill']],
        'setPrefix()' => [$params['yiirocks/svg-inline-bootstrap']['prefix']],
        'setFixedWidth()' => [$params['yiirocks/svg-inline-bootstrap']['fixedWidth']],
    ],
];
