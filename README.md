# PhpSha256Lc

[![PHP Tests](https://github.com/paulhenri-l/php-sha256-lc/actions/workflows/php-tests.yml/badge.svg)](https://github.com/paulhenri-l/laravel-encryptable/actions/workflows/php-tests.yml)
[![PHP Code Style](https://github.com/paulhenri-l/php-sha256-lc/actions/workflows/php-code-style.yml/badge.svg)](https://github.com/paulhenri-l/laravel-encryptable/actions/workflows/php-code-style.yml)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

This package exists because I am too lazy to write `hash('sha256', mb_strtolower('some value'))`
when I need a case-insensitive hash.

## Installation

```
composer require paulhenri-l/php-sha256-lc
```

## Usage

The function will be autoloaded thanks to composer so you'll only have to call
it.

```php
sha256_lc('some value');
```
