---
title: Laravel Plugin
description: The Laravel Plugin
extends: _layouts.documentation
section: content
---

# Laravel Plugin

The Laravel Plugin for Pest gives your direct access to Laravel's testing API in your test files.

Install the plugin using Composer:

```bash
composer require pestphp/pest-plugin-laravel --dev
```

### `Pending Higher Order Tests`

You can now import Laravel testing methods to access them directly in your tests. This lets you write even simpler tests than before:

```php
use function Pest\Laravel\get;

get('/')->assertStatus(200);
```

Note that Pest will automatically generate a description for these tests:

```bash
✓ get '/' → assertStatus 200
```

To import multiple methods, wrap them in curly brackets like so:

```php
use function Pest\Laravel\{get, getJson};

get('/')->assertStatus(200);

getJson('api/posts')->assertStatus(200);
```

Once again, Pest will generate a description for each test:

```bash
✓ get '/' → assertStatus 200
✓ getJson 'api/posts' → assertStatus 200
```

Remember, for the full list of available Laravel testing methods, please refer to the [Laravel documentation](https://laravel.com/docs/master/http-tests).

Next section: [Faker →](/docs/plugins/faker)
