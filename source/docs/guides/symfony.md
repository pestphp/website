---
title: Symfony Guide
description: The Symfony Guide
extends: _layouts.documentation
section: content
---

# Symfony Guide

Pest was built to be framework agnostic, but as it's easily extendable, it works well in [Symfony](https://symfony.com) applications.

Now, in this guide, we are going to transform a Symfony test into a Pest test.

A basic functionnal test in Symfony look like the following:

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

With Pest, the same test could be write like this:

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

## Helpers

In previous example, `$this` is bind to WebTestCase, but your IDE may not be aware of it. 

To get autocomplete on assertion provided by WebTestCase, you could add an helper in `tests/Pest.php`:

```php
<?php

use \Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

function webTest(): WebTestCase
{
    return new class() extends WebTestCase {};
}
``` 

Then in your tests: 
```php
<?php

it('test something', function() {
    static::createClient()->request('GET', '/');
    webTest()::assertResponseIsSuccessful();
    webTest()::assertSelectorTextContains('h1', 'Hello World');
});
```

In the same way, here are some helpful helpers to retrieve a client instance or the container:

```php
<?php
// tests/Pest.php

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\Container;

// ...

function container(): Container
{
    $test = new class() extends KernelTestCase {
        public function getContainer(): Container
        {
            self::bootKernel();

            return self::$container;
        }
    };

    return $test->getContainer();
}

function client(array $options = [], array $server = []): KernelBrowser
{
    $test = new class() extends WebTestCase {
        public function retrieveClient(array $options = [], array $server = []) : KernelBrowser
        {
            self::ensureKernelShutdown();
            return static::createClient($options, $server);
        }
    };

    return $test->retrieveClient($options, $server);
}
```

You could use it in your tests like this:
```php
<?php

use App\Repository\ArticleRepository;

it('can show homepage', function () {
    client()->request('GET', '/');

    webTest()->assertResponseIsSuccessful();
    webTest()->assertSelectorTextContains('h1', 'Hello World');
});

it('can retrieve a repository', function () {
    $articleRepository = container()->get(ArticleRepository::class);

    assertInstanceOf(ArticleRepository::class, $articleRepository);
});
```
