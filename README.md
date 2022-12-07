# Kirby Components

Build your kirby site from reusable components

> :warning: This plugin is still in beta and the API is not yet finalized, but it can already be used in production.

## Installation

```
composer require arnoson/kirby-components
```

## Usage

Create a component in `sites/components`

```html
<!-- sites/components/menu.php -->
<nav style="background: <?= $color ?>">
  <h2><?= $slots['title'] ?></h2>
  <?= $slot ?>
</nav>
```

Than use the component anywhere in your site:

```html
<?php beginComponent('menu', ['color' => 'tomato']); ?>
<?php slot('title'); ?>Menu<?= endSlot() ?>
<ul>
  <li><a href="/">home</a></li>
</ul>
<?php endComponent(); ?>
```

If you have a component without any content/slots you can use:

```html
<!-- sites/components/link.php -->
<a href="<?= $url ?>"><?= $title ?></a>
```

```html
<?php component('link', ['url'=> '/', 'title' => 'home']) ?>
```

## Credits

- [Kirby Layouts](https://github.com/getkirby/layouts)