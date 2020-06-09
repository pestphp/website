---
title: Watch Plugin
description: The Watch Plugin
extends: _layouts.documentation
section: content
---

# Watch Plugin

The Watch Plugin for Pest allows keep an eye for the test folder and run your Pest tests.

Install the plugin using Composer:

```bash
composer require pestphp/pest-plugin-watch --dev
```

This will add new option to your Pest CLI so you can start watching any updates on your `tests/` folder.

**Just start Pest with the following command:**

```bash
pest --watch # Night gathers, and now my watch begins
```

**Attention:** To use this plugin you will need to have installed [`fswatch`](https://github.com/emcrisostomo/fswatch#installation) on your machine.

Next section: [Community →](/docs/community)
