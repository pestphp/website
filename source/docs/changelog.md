---
title: Changelog
description: Changelog
extends: _layouts.documentation
section: content
---
# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

## [v0.2.3 (2020-07-01)](https://github.com/pestphp/pest/compare/v0.2.2...v0.2.3)
### Added
- `--init` and `pest:install` artisan command output changes ([#118](https://github.com/pestphp/pest/pull/118), [db7c4b1](https://github.com/pestphp/pest/commit/db7c4b174f0974969450dda71dcd649ef0c073a3))
- `--version` option to view the current version of Pest ([9ea51ca](https://github.com/pestphp/pest/commit/9ea51caf3f74569debb1e465992e9ea916cb80fe))

## [v0.2.2 (2020-06-21)](https://github.com/pestphp/pest/compare/v0.2.1...v0.2.2)
### Added
- `depends` phpunit feature ([#103](https://github.com/pestphp/pest/pull/103))

### Fixes
- datasets name conflit ([#101](https://github.com/pestphp/pest/pull/101))

## [v0.2.1 (2020-06-17)](https://github.com/pestphp/pest/compare/v0.2.0...v0.2.1)
### Fixes
- Multiple `uses` in the same path override previous `uses` ([#97](https://github.com/pestphp/pest/pull/97))

## [v0.2.0 (2020-06-14)](https://github.com/pestphp/pest/compare/v0.1.5...v0.2.0)
### Adds
- `--init` option to install Pest on a new blank project ([70b3c7e](https://github.com/pestphp/pest/commit/70b3c7ea1ddb031f3bbfaabdc28d56270608ebbd))
- pending higher orders tests aka tests without description ([aa1917c](https://github.com/pestphp/pest/commit/aa1917c28d9b69c2bd1d51f986c4f61318ee7e16))

### Fixed
- `--verbose` and `--colors` options not being used by printers ([#51](https://github.com/pestphp/pest/pull/51))
- missing support on windows ([#61](https://github.com/pestphp/pest/pull/61))

### Changed
- `helpers.php` stub provides now namespaced functions
- functions provided by plugins are now namespaced functions:

```php
use function Pest\Faker\faker;

it('foo', function () {
    $name = faker()->name;
});
```

## [v0.1.5 (2020-05-24)](https://github.com/pestphp/pest/compare/v0.1.4...v0.1.5)
### Fixed
- Missing default decorated output on coverage ([88d2391](https://github.com/pestphp/pest/commit/88d2391d2e6fe9c9416462734b9b523cb418f469))

## [v0.1.4 (2020-05-24)](https://github.com/pestphp/pest/compare/v0.1.3...v0.1.4)
### Added
- Support to Lumen on artisan commands ([#18](https://github.com/pestphp/pest/pull/18))

### Fixed
- Mockery tests without assertions being considered risky ([415f571](https://github.com/pestphp/pest/commit/415f5719101b30c11d87f74810a71686ef2786c6))

## [v0.1.3 (2020-05-21)](https://github.com/pestphp/pest/compare/v0.1.2...v0.1.3)
### Added
- `Plugin::uses()` method for making traits globally available ([6c4be01](https://github.com/pestphp/pest/commit/6c4be0190e9493702a976b996bbbf5150cc6bb53))

## [v0.1.2 (2020-05-15)](https://github.com/pestphp/pest/compare/v0.1.1...v0.1.2)
### Added
- Support to custom helpers ([#7](https://github.com/pestphp/pest/pull/7))

## [v0.1.1 (2020-05-14)](https://github.com/pestphp/pest/compare/v0.1.0...v0.1.1)
### Added
- `test` function without any arguments returns the current test case ([6fc55be](https://github.com/pestphp/pest/commit/6fc55becc8aecff685a958617015be1a4c118b01))

### Fixed
- "No coverage driver error" now returns proper error on Laravel ([28d8822](https://github.com/pestphp/pest/commit/28d8822de01f4fa92c62d8b8e019313f382b97e9))

## [v0.1.0 (2020-05-09)](https://github.com/pestphp/pest/commit/de2929077b344a099ef9c2ddc2f48abce14e248f)
### Added
- First version


Next section: [Upgrade Guide →](/docs/upgrade-guide)