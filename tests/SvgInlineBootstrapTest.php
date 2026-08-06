<?php

namespace YiiRocks\SvgInline\Bootstrap\tests;

use YiiRocks\SvgInline\Bootstrap\BootstrapIcon;
use YiiRocks\SvgInline\Bootstrap\SvgInlineBootstrapInterface;

class SvgInlineBootstrapTest extends TestCase
{
    public function testBasic(): void
    {
        $this->assertStringContainsString('viewBox="0 0 16 16" aria-hidden="true" role="img" class="bi"', $this->svgInline->bootstrap('award'));
        $this->assertStringContainsString('role="img" class="bi"', $this->svgInline->bootstrap('nonexistent'));
    }

    public function testBootstrapIconDirectInstantiation(): void
    {
        $icon = new BootstrapIcon();
        $icon->setName('test');
        $this->assertSame('test', $icon->get('name'));
    }

    public function testBootstrapIconFixedWidthSetter(): void
    {
        $icon = new BootstrapIcon();
        $icon->setFixedWidth(true);
        $this->assertTrue($icon->get('fixedWidth'));
    }

    public function testClass(): void
    {
        $this->assertStringContainsString('class="yourClass bi"', $this->svgInline->bootstrap('award')->class('yourClass'));
    }

    public function testCloneImmutabilityDoesNotLeakPropertyChanges(): void
    {
        $award = $this->svgInline->bootstrap('award');
        $awardWithWidth = $award->width(42);

        $this->assertStringNotContainsString('width', $award);
        $this->assertStringContainsString('width="42" height="42"', $awardWithWidth);
        $this->assertStringNotContainsString('class="bi"', $awardWithWidth);
    }

    public function testCss(): void
    {
        $this->assertStringContainsString('style="text-align: center;"', $this->svgInline->bootstrap('award')->css(['text-align' => 'center']));
    }

    public function testFileAfterBootstrapKeepsWidthAndClassConsistent(): void
    {
        // Mixing file() into a bootstrap() chain is an unusual pattern, but SvgInlineBootstrap's own
        // setSvgSize() override must still see the same icon that width() set on the base class - not a
        // stale one - or it would wrongly add the "bi" class alongside an explicit width.
        $rendered = $this->svgInline
            ->bootstrap('award')
            ->file('@vendor/twbs/bootstrap-icons/icons/activity.svg')
            ->width(42);

        $this->assertStringContainsString('width="42" height="42"', $rendered);
        $this->assertStringNotContainsString('class="bi"', $rendered);
    }

    public function testFill(): void
    {
        $this->assertStringContainsString('fill="currentColor"', $this->svgInline->bootstrap('award'));
        $this->assertStringNotContainsString('fill="currentColor"', $this->svgInline->bootstrap('award')->fill(''));
        $this->assertStringContainsString('fill="#003865"', $this->svgInline->bootstrap('award')->fill('#003865'));
    }

    public function testFixedWidth(): void
    {
        $this->assertStringNotContainsString('bi-fw', $this->svgInline->bootstrap('award'));
        //        $this->assertStringNotContainsString('bi-w-16', $this->svgInline->bootstrap('award')->fixedWidth(true));
        $this->assertStringContainsString('bi bi-fw', $this->svgInline->bootstrap('award')->fixedWidth(true));
    }

    public function testHeight(): void
    {
        $this->assertStringContainsString('width="42" height="42"', $this->svgInline->bootstrap('award')->height(42));
        $this->assertStringNotContainsString('class="bi"', (string) $this->svgInline->bootstrap('award')->height(42));
    }

    public function testName(): void
    {
        /** @var SvgInlineBootstrapInterface $bootstrap */
        $bootstrap = $this->container->get(SvgInlineBootstrapInterface::class);
        $icon = $bootstrap->name('award');

        $this->assertStringEndsWith(
            'bootstrap-icons/icons' . DIRECTORY_SEPARATOR . 'award.svg',
            (string) $icon->get('name'),
        );
    }

    public function testReset(): void
    {
        $firstRun = $this->svgInline->bootstrap('award')->class('yourClass')->render();
        $secondRun = $this->svgInline->bootstrap('award')->render();

        $this->assertNotEquals($firstRun, $secondRun);
    }

    public function testTitle(): void
    {
        $this->assertStringContainsString('<title>Demo Title</title>', $this->svgInline->bootstrap('award')->title('Demo Title'));
    }

    public function testWidth(): void
    {
        $this->assertStringContainsString('width="42" height="42"', $this->svgInline->bootstrap('award')->width(42));
        $this->assertStringNotContainsString('class="bi"', (string) $this->svgInline->bootstrap('award')->width(42));
    }
}
