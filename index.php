<?php

use Kirby\Cms\App;

include_once __DIR__ . '/helpers.php';

load([
  'arnoson\\kirbyComponents\\Component'   => __DIR__ . '/lib/Component.php',
]);

App::plugin('arnoson/kirby-components', []);