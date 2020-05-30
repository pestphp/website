<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Pest - An elegant PHP Testing Framework',
    'siteDescription' => 'Introducing Pest: An elegant PHP Testing Framework with a focus on simplicity',

    // Algolia DocSearch credentials
    'docsearchApiKey' => 'd25b0b281fd72e7b8ce770857fff45bf',
    'docsearchIndexName' => 'pestphp',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    'team' => require_once('team.php'),

];
