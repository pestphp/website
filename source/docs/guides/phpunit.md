---
title: PHPUnit Guide
description: PHPUnit Guide
extends: _layouts.documentation
section: content
---

# PHPUnit Guide

Pest is built on top of PHPUnit, and because Pest is a **progressive testing framework**, you can
have both PHPUnit classes and Pest test files in the same test suite.

In other words, if you have followed the [PHPUnit](https://phpunit.de/) getting started guide, you really just
have to install Pest on top of it - as referenced with the [installation guide](/docs/installation).

Now, in this guide, we are going to transform a PHPUnit test into a Pest test.

> **Disclaimer**: PHPUnit is great! Pest is just an different API of creating tests.

Let's take this PHPUnit test from the [Laravel.io website](https://laravel.io):
```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function users_can_see_the_homepage()
    {
        $this->visit('/')
            ->see('Laravel.io')
            ->see('The Laravel Community Portal');
    }
}
```

Looking at this code, only 2 things are important:

- There is a **home page**
- When users visit that home page they **see** "Laravel.io" and  "The Laravel Community Portal".

So let's put what really matters in our test with Pest:
```php
<?php

use Tests\Feature;
use Illuminate\Foundation\Testing\DatabaseMigrations;

uses(TestCase::class, DatabaseMigrations::class);

it('has home page', function () {
    $this->visit('/')
        ->see('Laravel.io')
        ->see('The Laravel Community Portal');
});
```

Next, remember [higher order tests](/docs/higher-order-tests)? They are shortcuts for
performing common actions while writing your tests. So let's apply this principle in our test:

```php
<?php

use Tests\Feature;
use Illuminate\Foundation\Testing\DatabaseMigrations;

uses(TestCase::class, DatabaseMigrations::class);

it('has home page')
    ->get('/')
    ->see('Laravel.io')
    ->see('The Laravel Community Portal');
```

Finally, the [Underlying Test Case](docs/underlying-test-case/) of this test
is `TestCase` and or test also uses the `DatabaseMigrations` of Laravel. So
let's put those in our `tests/Pest.php` file:
```php
<?php

use Tests\Feature;
use Illuminate\Foundation\Testing\DatabaseMigrations;

uses(TestCase::class, DatabaseMigrations::class)->in('Feature');
```

Let's update our test was we no longer need those `uses`:
```php
<?php

it('has home page')
    ->get('/')
    ->see('Laravel.io')
    ->see('The Laravel Community Portal');
```

This Pest test is equivalent to the PHPUnit test, and it only has 6 lines, down from the
19 original lines. And most importantly, the test contains only what really matters.
