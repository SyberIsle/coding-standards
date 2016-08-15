# SyberIsle Coding Standards

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

Provides coding standards for SyberIsle projects and libraries.

Inherits from PSR-2 but has the following changes:

- Tabs **not** spaces **MUST** be used for indentation
- PHP 4 style constructors (class name) are not allowed
- Todo or fixme comments belong in an issue tracker. Technical Debt is bad.
- No BOM for UTF-8 files
- `extends` and `implements` are on their own lines for classes

This also provides an xml file that you can import into PhpStorm.

## Install

Via Composer

``` bash
$ composer require syberisle/coding-standards
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email dlundgren@syberisle.net instead of using the issue tracker.

## Credits

- [David Lundgren][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/syberisle/coding-standards.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/syberisle/coding-standards
[link-author]: https://github.com/dlundgren



