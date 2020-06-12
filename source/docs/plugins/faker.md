---
title: Faker Plugin
description: The Faker Plugin
extends: _layouts.documentation
section: content
---

# Faker Plugin

The Faker Plugin for Pest provides additional functions for using the [Faker](https://github.com/fzaninotto/Faker) library.

Install the plugin using Composer:

```bash
composer require pestphp/pest-plugin-faker --dev
```

This will add the following new global function for your tests.

### `faker()`

The `faker()` function will create an instance of the Faker generator with the default locale (*en_US*).

```php
it('generates a name using faker', function () {
    $name = faker()->name;

    assertIsString($name);
});
```

The `faker()` function also allows you to specify the locale that is used when
creating the instance of the Faker generator.

```php
it('generates a name using faker with locale', function () {
    $name = faker('fr_FR')->name;

    assertIsString($name);
});
```

Remember, for the full list of available Faker methods, please refer to the [Faker documentation](https://github.com/fzaninotto/Faker#formatters).

Next section: [Watch Plugin →](/docs/plugins/watch)
