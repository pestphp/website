---
title: Groups Of Tests
description: Groups Of Tests
extends: _layouts.documentation
section: content
---

# Groups Of Tests

Optionally, Pest allows you to assign tests to different groups with the `group` method. If you have a bunch of
tests that are particularly slow, it might be good to add them all to the same group:

```php
it('has home', function () {
    // ..
})->group('integration');
```

Of course, you can also assign a test to multiple groups:

```php
it('has home', function () {
    // ..
})->group('integration', 'browser');
```

Sometimes, you may want to assign an entire file to a group:

```php
uses()->group('integration');
```

Or a specific folder:

```php
// Pest.php
uses()->group('integration')->in('integration');
```

Finally, you can run the tests of a specific group using the `--group` option while
running Pest on the command-line:

```bash
./vendor/bin/pest --group=integration,browser
```
> **Note:** The `--group` option will only select Pest tests. It doesn't support the PHPUnit `@group` annotation.


Next section: [Skipping Tests →](/docs/skipping-tests)
