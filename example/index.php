<?php

require dirname(__DIR__) . '/kirby/bootstrap.php';

$kirby = new Kirby\Cms\App([
  'roots' => [
    'index' => __DIR__,
    'components' => __DIR__ . '/site/components'
  ],
]);

echo $kirby->render();