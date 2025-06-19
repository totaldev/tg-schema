# Schema

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Code Quality][ico-quality]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]

[![Email][ico-email]][link-email]

The PHP TD Gram Schema generated TdLib Schema Classes using [totaldev/schema-generator][link-generator] from [td_api.tl][link-td-api] file.

#### Based on TdLib `td_api` v1.8.36 schema version

## Install

Via Composer

```bash
$ composer require totaldev/tg-schema
```

## Usage

```php
<?php

use Totaldev\TgSchema\TdSchemaRegistry;

$input = [
    '@type' => 'updateOption',
    'name' => 'version',
    'value' => [
        '@type' => 'optionValueString',
        'value' => '1.6.0',
    ],
];

TdSchemaRegistry::fromArray($input);
```

Will parse TdLib response to PHP Objects

```php
class Totaldev\TgSchema\UpdateOption#3 (3) {
  protected string $name =>
  string(7) "version"
  protected Totaldev\TgSchema\OptionValue $value =>
  class Totaldev\TgSchema\OptionValueString#2 (2) {
    protected string $value =>
    string(5) "1.6.0"
    public ?string $tdExtra =>
    NULL
  }
  public ?string $tdExtra =>
  NULL
}
```

Another example:

```php
<?php

use Totaldev\TgSchema\TdSchemaRegistry;

$input = [
    '@extra' => 'foo',
    '@type' => 'updateAuthorizationState',
    'authorization_state' => [
        '@type' => 'authorizationStateWaitTdlibParameters',
    ],
];

TdSchemaRegistry::fromArray($input);
```

Will produce:

```php
class Totaldev\TgSchema\UpdateAuthorizationState#3 (2) {
  protected Totaldev\TgSchema\AuthorizationState $authorizationState =>
  class Totaldev\TgSchema\AuthorizationStateWaitTdlibParameters#2 (1) {
    public ?string $tdExtra =>
    NULL
  }
  public ?string $tdExtra =>
  string(3) "foo"
}
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## License

Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/totaldev/schema.svg?style=flat-square

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[ico-travis]: https://img.shields.io/travis/com/totaldev/schema/master.svg?style=flat-square

[ico-quality]: https://img.shields.io/scrutinizer/quality/g/totaldev/schema?style=flat-square

[ico-downloads]: https://img.shields.io/packagist/dt/totaldev/schema.svg?style=flat-square

[ico-email]: https://img.shields.io/badge/email-aurimas@niekis.lt-blue.svg?style=flat-square

[link-travis]: https://travis-ci.com/totaldev/schema

[link-packagist]: https://packagist.org/packages/totaldev/schema

[link-scrutinizer]: https://scrutinizer-ci.com/g/totaldev/schema

[link-downloads]: https://packagist.org/packages/totaldev/schema/stats

[link-generator]: https://github.com/totaldev/schema-generator

[link-td-api]: https://github.com/tdlib/td/blob/v1.8.15/td/generate/scheme/td_api.tl
