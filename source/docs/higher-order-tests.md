---
title: Higher Order Tests
description: Higher Order Tests
extends: _layouts.documentation
section: content
---

# Higher Order Tests

Pest also provides support for **higher order tests**, which are shortcuts for performing
common actions while writing your tests.

The best way of thinking about this is: If you
don't provide a closure, the chained methods are going to create a closure for
you. Here is the most basic example:

```php
test('true is true')->assertTrue(true);
```

The code above is equivalent to:
```php
test('true is true', function () {
    $this->assetTrue();
});
```

Pest will properly delegate to any given method and its arguments ot the test itself.

> **Warning**:  The usage of runtime helpers in Laravel, like `route`, won't work with higher-order tests.

Just like tests, same rules are applied to global functions like `beforeEach` or `afterEach`. Let's
take a look at an example using the Laravel Framework:

```
beforeEach()->withoutMiddleware();

it('has home')
    ->get('/admin')
    ->assertSee('Hello World');
```

Next section: [Exceptions & Errors →](/docs/exceptions-and-errors)

