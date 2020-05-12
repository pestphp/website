---
title: Skipping Tests
description: Skipping Tests
extends: _layouts.documentation
section: content
---

# Skipping Tests

During development, you may want to temporarily turn off a test. Rather than commenting it out,
you can use the `skip` method.

> This is the equivalent as `markTestSkipped` in PHPUnit.
```php
it('has home', function () {
    // ..
})->skip();
```

Of course, you can also leave the skip reason.
```php
it('has home', function () {
    // ..
})->skip('Home page not available');
```

Also, you may want to skip depending on a condition:
```php
it('has home', function () {
    // ..
})->skip(true === true, 'Home page not available');
```

## Running a single test

If you’d like to run a single test to debug a problem, just use the following syntax.

```php
it('has home', function () {
    // ..
})->only();
```

## Writing a Pending Test

If you’d like to remind yourself to come back and write a test later, just
omit the closure expression to define a pending test.

```php
it('has home');
```

Behind the scenes, Pest will be marked this test as risky as it does not perform any assertions.

Next section: [Datasets →](/docs/datasets)
