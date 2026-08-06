<?php

declare(strict_types=1);

use YiiRocks\SvgInline\Bootstrap\SvgInlineBootstrapInterface;

return [
    'yiirocks/svg-inline-bootstrap' => [
        'bootstrapIconsFolder' => '@vendor/twbs/bootstrap-icons/icons',
        'fallbackIcon' => '@vendor/twbs/bootstrap-icons/icons/question.svg',
        'fill' => 'currentColor',
        'fixedWidth' => false,
        'prefix' => 'bi',
    ],

    'yiirocks/svg-inline' => [
        'iconSets' => [
            'bootstrap' => SvgInlineBootstrapInterface::class,
        ],
    ],
];
