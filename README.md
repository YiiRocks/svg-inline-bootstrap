# Inline Bootstrap Icons for Yii

> **inline**  
> ***/ˈɪnlʌɪn/***  
> *adjective*
>
> included as part of the main text on a page, rather than in a separate section

This extension provides simple functions for [Yii framework 3.0](http://www.yiiframework.com/) applications to add
[Bootstrap](https://getbootstrap.com/) [Icons](https://icons.getbootstrap.com/) inline.

[![Packagist Version](https://img.shields.io/packagist/v/yiirocks/svg-inline-bootstrap.svg)](https://packagist.org/packages/yiirocks/svg-inline-bootstrap)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/yiirocks/svg-inline-bootstrap.svg)](https://php.net/)
[![Packagist](https://img.shields.io/packagist/dt/yiirocks/svg-inline-bootstrap.svg)](https://packagist.org/packages/yiirocks/svg-inline-bootstrap)
[![GitHub](https://img.shields.io/github/license/yiirocks/svg-inline-bootstrap.svg)](https://github.com/yiirocks/svg-inline-bootstrap/blob/master/LICENSE)
[![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/yiirocks/svg-inline-bootstrap/build.yml?branch=master)](https://github.com/yiirocks/svg-inline-bootstrap/actions)

Stats for Nerds

[![Coverage](https://img.shields.io/endpoint?url=https%3A%2F%2Fraw.githubusercontent.com%2Fyiirocks%2Fsvg-inline-bootstrap%2Fbadges%2Fcoverage.json)](https://github.com/yiirocks/svg-inline-bootstrap/tree/badges)
[![MSI](https://img.shields.io/endpoint?url=https%3A%2F%2Fraw.githubusercontent.com%2Fyiirocks%2Fsvg-inline-bootstrap%2Fbadges%2Fmsi.json)](https://github.com/yiirocks/svg-inline-bootstrap/tree/badges)
[![Tests](https://img.shields.io/endpoint?url=https%3A%2F%2Fraw.githubusercontent.com%2Fyiirocks%2Fsvg-inline-bootstrap%2Fbadges%2Ftests.json)](https://github.com/yiirocks/svg-inline-bootstrap/tree/badges)
[![Assertions](https://img.shields.io/endpoint?url=https%3A%2F%2Fraw.githubusercontent.com%2Fyiirocks%2Fsvg-inline-bootstrap%2Fbadges%2Fassertions.json)](https://github.com/yiirocks/svg-inline-bootstrap/tree/badges)

## Installation

The package could be installed via composer:

```bash
composer require yiirocks/svg-inline-bootstrap
```

## Usage

The default configuration will enable `$svg` in any view.

```php
echo $svg->bootstrap('award');
```

Available options can be found in the [documentation](https://www.yii.rocks/svg-inline/bootstrap/).

## Unit testing

The package is tested with [Psalm](https://psalm.dev/), [PHPUnit](https://phpunit.de/) and [Infection](https://infection.github.io/). To run tests:

```bash
composer psalm
composer phpunit
composer infection
```

[![Maintainability](https://qlty.sh/badges/c0c355d2-bfc8-40bf-8611-65e42e856b35/maintainability.svg)](https://qlty.sh/gh/YiiRocks/projects/svg-inline-bootstrap)
[![Codacy branch grade](https://img.shields.io/codacy/grade/1ac06a8fb1fe4d17ba208399381945e2/master.svg)](https://app.codacy.com/gh/YiiRocks/svg-inline-bootstrap)