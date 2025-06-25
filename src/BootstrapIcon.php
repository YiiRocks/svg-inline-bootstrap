<?php

declare(strict_types=1);

namespace YiiRocks\SvgInline\Bootstrap;

/**
 * Icon class to store all icon properties.
 */
final class BootstrapIcon extends \YiiRocks\SvgInline\Icon
{
    /** @var bool Set to `true` to have a fixed width icon */
	/** @psalm-suppress PropertyNotSetInConstructor */
    protected bool $fixedWidth;

    public function setFixedWidth(bool $value): void
    {
        $this->fixedWidth = $value;
    }
}
