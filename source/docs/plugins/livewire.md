---
title: Livewire Plugin
description: The Livewire Plugin
extends: _layouts.documentation
section: content
---

# Livewire Plugin

The Livewire plugin for Pest adds support to use [Livewire](https://laravel-livewire.com/) in your [Higher Order Tests](/docs/higher-order-tests).

Install the plugin using Composer:
```bash
composer require pestphp/pest-plugin-livewire --dev
```

### `livewire()`

The `livewire()` method can be used in Higher Order Tests to test your Livewire components:
```php
it('can be incremented')
    ->livewire(Counter::class)
    ->call('increment')
    ->assertSee(1);

it('can be decremented')
    ->livewire(Counter::class)
    ->call('decrement')
    ->assertSee(-1);
```

Of course, for more complicated tests you can always use a closure instead:
```php
it('can be incremented', function () {
    Livewire::test(Counter::class)
        ->call('increment')
        ->assertSee(1);
});

it('can be decremented', function () {
    Livewire::test(Counter::class)
        ->call('decrement')
        ->assertSee(-1);
});
```

Remember, for the full list of available Livewire methods, please refer to the [Livewire documentation](https://laravel-livewire.com/docs/testing).

Next section: [Faker Plugin →](/docs/plugins/faker)
