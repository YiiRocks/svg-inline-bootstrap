<?php

namespace YiiRocks\SvgInline\Bootstrap\tests;

class SvgInlineBootstrapTest extends TestCase
{
    public function testBasic(): void
    {
        $this->assertStringContainsString('viewBox="0 0 16 16" aria-hidden="true" role="img" class="bi bi-w-16"', $this->svgInline->bootstrap('award'));
        $this->assertStringContainsString('role="img" class="bi bi-w-16"', $this->svgInline->bootstrap('nonexistent'));
    }

    public function testClass(): void
    {
        $this->assertStringContainsString('class="yourClass bi bi-w-16"', $this->svgInline->bootstrap('award')->class('yourClass'));
    }

    public function testCss(): void
    {
        $this->assertStringContainsString('style="text-align: center;"', $this->svgInline->bootstrap('award')->css(['text-align' => 'center']));
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
        $this->assertStringNotContainsString('bi-w-16', $this->svgInline->bootstrap('award')->fixedWidth(true));
        $this->assertStringContainsString('bi bi-fw', $this->svgInline->bootstrap('award')->fixedWidth(true));
    }

    public function testHeight(): void
    {
        $this->assertStringContainsString('width="42" height="42"', $this->svgInline->bootstrap('award')->height(42));
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
    }
}
