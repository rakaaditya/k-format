# KFormat
[![Build Status](https://travis-ci.org/rakaaditya/k-format.svg?branch=master)](https://travis-ci.org/rakaaditya/k-format)

A library to shorten long number to K, M, and B format.

```php
Format::convert(1000); // 1K
Format::convert(10000000); // 10M
Format::convert(12500000); // 12.5M
```

## Installation

The recommended way to install KFormat is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest version of KFormat:

```bash
composer.phar require rakaaditya/k-format
```

### Use Format class:
```php
use Rakaaditya\KFormat\Format;
```
