<?php

declare(strict_types=1);

namespace YiiRocks\SvgInline\Bootstrap;

use Yiisoft\Html\Html;

/**
 * SvgInlineBootstrap provides a quick and easy way to access Bootstrap Icons.
 */
final class SvgInlineBootstrap extends \YiiRocks\SvgInline\SvgInline implements SvgInlineBootstrapInterface
{
    /** @var string CSS class basename */
    /** @psalm-suppress PropertyNotSetInConstructor */
    protected string $prefix;

    /** @var string Path to the Bootstrap Icons folder */
    /** @psalm-suppress PropertyNotSetInConstructor */
    private string $bootstrapIconsFolder;

    /** @var bool `true` for fixed-width class */
    /** @psalm-suppress PropertyNotSetInConstructor */
    private bool $fixedWidth;

    /** @var BootstrapIcon icon properties */
    private ?BootstrapIcon $icon = null;

    /**
     * Sets the name of the icon.
     *
     * @param string $name  name of the icon
     * @return BootstrapIcon component object
     */
    public function name(string $name): BootstrapIcon
    {
        $this->icon = new BootstrapIcon();
        $iconFile = implode(DIRECTORY_SEPARATOR, [$this->bootstrapIconsFolder, "{$name}.svg"]);
        $this->icon->setName($iconFile);

        return $this->icon;
    }

    /**
     * @see $bootstrapIconsFolder
     * @param string $value
     * @return void
     */
    public function setBootstrapIconsFolder(string $value): void
    {
        $this->bootstrapIconsFolder = $this->aliases->get($value);
    }

    /**
     * @see $fixedWidth
     * @param bool $value
     * @return void
     */
    public function setFixedWidth(bool $value): void
    {
        $this->fixedWidth = $value;
    }

    /**
     * @see $prefix
     * @param string $value
     * @return void
     */
    public function setPrefix(string $value): void
    {
        $this->prefix = $value;
    }

    /**
     * Prepares either the class (default) or the width/height if either of these is given manually.
     *
     * @return void
     */
    #[\Override]
    protected function setSvgSize(): void
    {
        parent::setSvgSize();

        /** @psalm-var BootstrapIcon $this->icon */
        $width = $this->icon->get('width');
        $height = $this->icon->get('height');

        if (!$width && !$height) {
            Html::addCssClass($this->class, $this->prefix);
            if ($this->icon->get('fixedWidth')) {
                Html::addCssClass($this->class, "{$this->prefix}-fw");
            }
        }
    }
}
