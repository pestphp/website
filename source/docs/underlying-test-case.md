---
title: Underlying Test Case
description: Underlying Test Case
extends: _layouts.documentation
section: content
---

# Underlying Test Case

The closure you provide to your test function is always bound to a specific
test case class. By default, that class is `PHPUnit\Framework\TestCase`:

```php
<?php

it('has home', function () {
    $this->assertTrue(true);

    // \PHPUnit\Framework\TestCase
    echo get_class($this); 
});
```

In real-world applications, you may need to change it, and for that, you
can use the `uses` function:

### `uses()`

The `uses` function binds a class and/or trait to your test files.
Please note that you can only call it once. This how you would bind a trait to your current file:

```php
<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

// Uses the given trait in the current file
uses(RefreshDatabase::class);
```

The `in()` function lets you use the given class and/or trait recursively inside the specified folder:

```php
// Uses the given test case in the "Feature" folder recursively
uses(TestCase::class)->in('Feature');
```

To bind multiple classes and/or traits, group them in your `uses()` call like so:

```php
// Uses the given test case and trait in the current folder recursively
uses(TestCase::class, RefreshDatabase::class)->in(__DIR__);
```

## `tests/Pest.php`

Please consider creating a file with the name `tests/Pest.php` on the
root directory of your tests folder. No worries, that file
is autoloaded automatically.

```
tests
    - Unit/ComponentTest.php
    - Feature/HomeTest.php
    - Pest.php <--
phpunit.xml
```

Next section: [Assertions →](/docs/assertions)

