---
title: Symfony Guide
description: The Symfony Guide
extends: _layouts.documentation
section: content
---

# Symfony Guide

Pest was built to be framework agnostic, but as it's easily extendable, it works well in [Symfony](https://symfony.com) applications.

Now, in this guide, we are going to transform a Symfony test into a Pest test.

A basic functional test in Symfony looks like the following:

```php
<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello World');
    }
}
```

With Pest, the same test could be written like this:

```php
<?php

uses(\Symfony\Bundle\FrameworkBundle\Test\WebTestCase::class);

it('test something', function() {
    static::createClient()->request('GET', '/');
    $this->assertResponseIsSuccessful();
    $this->assertSelectorTextContains('h1', 'Hello World');
});
```

If you organize your tests following your app directories, you can automatically add the `uses(WebTestCase::class)` in all
your ControllerTests located in folder `tests/Controller` by adding the following in `tests/Pest.php`:

```php
<?php
// tests/Pest.php

uses(\Symfony\Bundle\FrameworkBundle\Test\WebTestCase::class)->in('Controller');
```

You can now remove the `uses(..)` in all your tests in `Controller` directory.
