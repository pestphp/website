---
title: Writing Tests
description: Writing Tests
extends: _layouts.documentation
section: content
---

# Writing Tests

Pest makes it easy to write tests. This section illustrates how to write
a simple test suite with Pest, and what are the conventions you should use.

The setup is very simple, and usually looks like this:

```php
tests
    - Unit/ComponentTest.php <--
    - Feature/HomeTest.php <--
phpunit.xml
```

Often we recommend you place your tests in files suffixed 
by `..Test.php`. Inside those files, all you need in is a
test function which runs a test:

```
<?php

it('has home', function () {
    // ..
});

// or
test('has home', function () {
    // ..
});
```

Now, for the remainder of this section, we are going to see the API reference
of the available functions to create tests.

### `it()`

The `it` function adds the given closure as test. The first argument is the test
description; the second argument is a closure that contains the test expectations.

```php
it('asserts true is true', function () {
    assertTrue(true);
});
```

> **Note**: The assertion above could be writen also with `$this->assertTrue(true);`, because the test
closure is bound to the underlying TestCase class.

### `test()`

The `test` function is an alias of **it** and it adds the given closure as test. The first argument is the test
description; the second argument is a closure that contains the test expectations.

```php
test('asserts false is false', function () {
    assertFalse(false);
});
```

Next section: [Underlying Test Case →](/docs/underlying-test-case)
