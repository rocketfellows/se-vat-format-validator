# Sweden vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Sweden vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/se-vat-format-validator
```

## Usage example

Valid Sweden vat number:

```php
$validator = new SEVatFormatValidator();
$validator->isValid('SE123456789012');
$validator->isValid('123456789012');
```

Returns:

```shell
true
true
```

Invalid Sweden vat number:

```php
$validator = new SEVatFormatValidator();
$validator->isValid('SE12345678901');
$validator->isValid('SE1234567890123');
$validator->isValid('DE123456789012');
$validator->isValid('1234567890123');
$validator->isValid('12345678901');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
