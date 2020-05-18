---
title: Installation
description: Installation
extends: _layouts.documentation
section: content
---

# Installation

**Requires [PHP 7.3+](https://php.net/releases/)**

The early access to **Pest is available to sponsors**: [github.com/sponsors/nunomaduro](https://github.com/sponsors/nunomaduro).
> Pest will be open-sourced once the author reaches **75 GitHub Sponsors**.

Once you’ve subscribed to the GitHub sponsors, you should receive an email with an invitation to the private repository of Pest.

1. Add the Pest private repository to your list of composer repositories:
```bash
composer config repositories.pest vcs https://github.com/pestphp/pest
```

2. Make sure your PHPUnit dependency is `^9.0`:
```bash
composer require phpunit/phpunit:"^9.0" --dev --update-with-dependencies
```

> **Pest** will use your current `phpunit.xml`. If you don't have one, make you sure
you [download this file](https://github.com/pestphp/pest/blob/master/stubs/phpunit.xml) and
place it on the root of your project.

3. **If you are using Laravel**, make sure you Collision dependency is `^5.0`:
```bash
composer require nunomaduro/collision:"^5.0" --dev --update-with-dependencies
```

4. Next, require **Pest**:
```bash
composer require pestphp/pest --dev
```

5. **If you are using Laravel**, install Pest in your test suite using the `pest:install` Artisan command:
```bash
php artisan pest:install
```

6. Finally, you can run Pest directly from the command line:
```bash
./vendor/bin/pest
```

![Install](/assets/img/install.png)
On the next section, we are going to learn how to write tests with Pest: [Writing Tests →](/docs/writing-tests)
