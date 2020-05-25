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

This will add the following new global functions for your tests.

### `faker()`

The `faker()` function will create an instance of the Faker generator with the default locale (*en_US*).

### `fakerWithLocale()`

The `fakerWithLocale()` function allows you to specify the locale that is used when
creating the instance of the Faker generator.

Next section: [Community →](/docs/community)
