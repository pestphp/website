---
title: Installation
description: Installation
extends: _layouts.documentation
section: content
---

# Installation

**Requires [PHP 7.3+](https://php.net/releases/)**

1. Make sure your PHPUnit dependency is `^9.0`:
```bash
composer require phpunit/phpunit:"^9.0" --dev --update-with-dependencies
```

> **Pest** will use your current `phpunit.xml`. If you don't have one, make you sure
you [download this file](https://github.com/pestphp/pest/blob/master/stubs/Laravel/phpunit.xml) and
place it on the root of your project.

2. **If you are using Laravel**, make sure your Collision dependency is `^5.0`:
```bash
composer require nunomaduro/collision:"^5.0" --dev --update-with-dependencies
```

3. Next, require **Pest**:
```bash
composer require pestphp/pest --dev
```

4. **If you are using Laravel**, install Pest in your test suite using the `pest:install` Artisan command:
```bash
php artisan pest:install
```

5. Finally, you can run Pest directly from the command line:
```bash
./vendor/bin/pest
```

![Install](/assets/img/install.png)
On the next section, we are going to learn how to write tests with Pest: [Writing Tests →](/docs/writing-tests)
