---
title: Expectations
description: Expectations
extends: _layouts.documentation
section: content
---

# Expectations

In addition to assertions, Pest offers you a set of expectations.
These functions let you test your values against certain conditions.
This API is inspired by [Jest](https://jestjs.io/docs/en/expect).
Expectations also allow you to write your tests like you would a natural sentence:

```php
test('expect true to be true', function () {
  // assertion
  $this->assertTrue(true);

  // expectation
  expect(true)->toBe(true);
});
```

Here is the full list of **expectations** available in Pest:

### `expect($value)`

Start the expectation by passing your value to this function.
Then, you can chain your check(s):

```php
expect($value)->// chain your checks here
```

### `and($value)`

Pass a new value to the `and` function to chain multiple expectations in a single test:

```php
expect($id)->toBe(14)->and($name)->toBe('Nuno');
```

### `not`

Use the `not` modifier before a check to invert it:

```php
expect($id)->not->toBe(14);
```

### `toBe()`

Asserts that two variables have the same type and value.
Used on objects, it asserts that the two variables reference the same object:

```php
expect($color)->toBe('pink');

expect($user)->toBe($user);
```

### `toBeEmpty()`

Asserts that the value is empty:

```php
expect($lastSeen)->toBeEmpty();
```

### `toBeTrue()`

Asserts that the value is true:

```php
expect($published)->toBeTrue();
```

### `toBeFalse()`

Asserts that the value is false:

```php
expect($archived)->toBeFalse();
```

### `toBeGreaterThan($expected)`

Asserts that the value is greater than the expected one:

```php
expect($age)->toBeGreaterThan(20);
```

### `toBeGreaterThanOrEqual($expected)`

Asserts that the value is greater than or equal to the expected one:

```php
expect($age)->toBeGreaterThanOrEqual(21);
```

### `toBeLessThan($expected)`

Asserts that the value is lesser than the expected one:

```php
expect($count)->toBeLessThan(3);
```

### `toBeLessThanOrEqual($expected)`

Asserts that the value is lesser than or equal to the expected one:

```php
expect($count)->toBeLessThanOrEqual(2);
```

### `toContain($needle)`

Asserts that the needle is an element of the value:

```php
expect($content)->toContain('Hello World');
```

### `toHaveCount(int $count)`

Asserts that the `$count` matches the number of elements of `$value`:

```php
expect($dozen)->toHaveCount(12);
```

### `toHaveProperty(string $name, $value = null)`

Asserts that the `$value` contains the property `$name`:

```php
expect($user)->toHaveProperty('name');
expect($user)->toHaveProperty('name', 'Nuno');
```

### `toMatchObject($object)`

Asserts that the `$value` object matches a subsetof the properties of an given `$object`:

```php
$user = new stdClass();
$user->id = 1;
$user->email = 'enunomaduro@gmail.com';
$user->name = 'Nuno';

expect($user)->toMatchObject([
    'email' => 'enunomaduro@gmail.com',
    'name' => 'Nuno'
]);
```

### `toEqual($expected)`

Asserts that two variables have the same value.

```php
expect($title)->toEqual('Hello World');
```

### `toEqualCanonicalizing($expected)`

Asserts that two variables have the same value.
The contents of `$value` and `$expected` are canonicalized before
they are compared. For instance, when the two variables are arrays,
then these arrays are sorted before they are compared.
When they are objects, each object is converted to an array
containing all private, protected and public attributes.

```php
expect([4, 2, 1])->toEqualCanonicalizing([2, 4, 1]);

// this is the equivalent of:
expect([1, 2, 4])->toEqual([1, 2, 4]);
```

### `toEqualWithDelta($expected, float $delta)`

Asserts that the absolute difference between `$value` and
`$expected` is lower than `$delta`:

```php
// Pass
expect(14)->toEqualWithDelta(10, 5);

// Fail
expect(14)->toEqualWithDelta(10, 0.1);
```

### `toBeInfinite()`

Asserts that the value is infinite:

```php
expect($universe)->toBeInfinite();
```

### `toBeInstanceOf($class)`

Asserts that the value is an instance of `$class`:

```php
expect($user)->toBeInstanceOf(User::class);
```

### `toBeArray()`

Asserts that the value is an array:

```php
expect($vegetables)->toBeArray();
```

### `toBeBool()`

Asserts that the value is of type bool:

```php
expect($isActive)->toBeBool();
```

### `toBeCallable()`

Asserts that the value is of type callable:

```php
expect($controller)->toBeCallable();
```

### `toBeFloat()`

Asserts that the value is of type float:

```php
expect($height)->toBeFloat();
```

### `toBeInt()`

Asserts that the value is of type integer:

```php
expect($count)->toBeInt();
```

### `toBeIterable()`

Asserts that the value is of type iterable:

```php
expect($value)->toBeIterable();
```

### `toBeNumeric()`

Asserts that the value is of type numeric:

```php
expect($age)->toBeNumeric();
```

### `toBeObject()`

Asserts that the value is of type object:

```php
expect($post)->toBeObject();
```

### `toBeResource()`

Asserts that the value is of type resource:

```php
expect($resource)->toBeResource();
```

### `toBeScalar()`

Asserts that the value is of type scalar:

```php
expect($scalar)->toBeScalar();
```

### `toBeString()`

Asserts that the value is of type string:

```php
expect($string)->toBeString();
```

### `toBeNan()`

Asserts that the value is not a number (NaN):

```php
expect($nan)->toBeNan();
```

### `toBeNull()`

Asserts that the value is null:

```php
expect(null)->toBeNull();
```

### `toHaveKey(string $key)`

Asserts that the value array contains the provided `$key`:

```php
expect($array)->toHaveKey('key-a');
```

### `toHaveKeys(array $keys)`

Asserts that the value array contains the provided `$keys`:

```php
expect($array)->toHaveKeys(['key-a', 'key-b']);
```

### `toBeDirectory()`

Asserts that the value is a directory:

```php
expect($dir)->toBeDirectory();
```

### `toBeReadableDirectory()`

Asserts that the value is a directory and is readable.

```php
expect($dir)->toBeReadableDirectory();
```

### `toBeWritableDirectory()`

Asserts that the value is a directory and is writable:

```php
expect($dir)->toBeWritableDirectory();
```

### `toStartWith(string $expected)`

Asserts that the value starts with the provided string:

```php
expect($content)->toStartWith('Hello');
```

### `toEndWith(string $expected)`

Asserts that the value ends with the provided string:

```php
expect($content)->toEndWith('World');
```

### `toMatchConstraint(Constraint $constraint)`

Asserts that the value matches a specificed [PHPUnit constraint](https://github.com/sebastianbergmann/phpunit/tree/master/src/Framework/Constraint):

```php
expect(true)->toMatchConstraint(new IsTrue());
```

Asserts that the value matches a complex group of constraints:

```php
expect(true)->toMatchConstraint(
    $this->logicalAnd(
         $this->logicalNot(new IsFalse()),
         new IsType(IsType::TYPE_BOOL)
    )
);
```

Asserts that the value matches a custom constraint:

```php
expect('https://google.com')->toMatchConstraint(new IsValidUrlConstraint());

class IsValidUrlConstraint extends \PHPUnit\Framework\Constraint
{
    public function toString()
    {
        return 'is a valid url';
    }

    protected function matches($other): bool
    {
        if (! is_string($other)) {
            return false;
        }

        return preg_match(
            Symfony\Component\Validator\Constraints\UrlValidator::PATTERN,
            $other
        ) > 0;
    }
}
```

> Custom constraints should extend `PHPUnit\Framework\Constraint`, and provide a `matches()` and `toString()` method, and optionally override the `evaluate()` method.

Next section: [Setup And Teardown →](/docs/setup-and-teardown)
