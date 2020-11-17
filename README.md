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

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```bash
./vendor/bin/phpunit
```

[![Code Climate maintainability](https://img.shields.io/codeclimate/maintainability/YiiRocks/svg-inline-bootstrap.svg)](https://codeclimate.com/github/YiiRocks/svg-inline-bootstrap/maintainability)
[![Codacy branch grade](https://img.shields.io/codacy/grade/1ac06a8fb1fe4d17ba208399381945e2/master.svg)](https://app.codacy.com/gh/YiiRocks/svg-inline-bootstrap)
[![Scrutinizer code quality (GitHub/Bitbucket)](https://img.shields.io/scrutinizer/quality/g/yiirocks/svg-inline-bootstrap/master.svg)](https://scrutinizer-ci.com/g/yiirocks/svg-inline-bootstrap/?branch=master)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/yiirocks/svg-inline-bootstrap/analysis)
