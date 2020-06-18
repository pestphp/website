---
title: Installation
description: Installation
extends: _layouts.documentation
section: content
---

# Installation

> **Note:** Pest requires [PHP 7.3+](https://php.net/releases/) to work.

1. Make sure your existing `composer.json` file contains the following options:

```json
"minimum-stability": "dev",
"prefer-stable": true,
```

2. Then, make sure your _PHPUnit_ dependency is set to `^9.0`:

```bash
composer require phpunit/phpunit:"^9.0" --dev --update-with-dependencies
```

3. If you don't already have a `phpunit.xml` file, [download this file](https://github.com/pestphp/pest/blob/master/stubs/Laravel/phpunit.xml) and place it on the root of your project.

4. **If you are using Laravel**, make sure your _Collision_ dependency is set to `^5.0`:

```bash
composer require nunomaduro/collision:"^5.0" --dev --update-with-dependencies
```

5. Next, require **Pest**:

```bash
composer require pestphp/pest --dev
```

6. **If you are using Laravel**, also require the `pest-plugin-laravel` and run the `pest:install` _Artisan_ command to install Pest in your test suite:

```bash
composer require pestphp/pest-plugin-laravel --dev && php artisan pest:install
```

**Otherwise**, run the `pest --init` command to install Pest in your test suite:

```bash
./vendor/bin/pest --init
```

7. Finally, you can run Pest directly from the command line:

```bash
./vendor/bin/pest
```

![Install](/assets/img/install.png)

On the next section, we are going to learn how to write tests with Pest: [Writing Tests →](/docs/writing-tests)
