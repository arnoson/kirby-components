<?php

namespace arnoson\KirbyComponents;

use Kirby\Toolkit\Tpl;

class Component {
  private static $components = [];
  private static $level = -1;
  private static string $slotName;

  private static function render(
    string $name,
    array $props = [],
    string $slot = null,
    array $slots = [],
  ): string|null {
    $data = array_merge(kirby()->data, $props, [
      'slot' => $slot,
      'slots' => $slots,
    ]);

    $file = kirby()->root('components') . "/$name.php";
    if (file_exists($file)) {
      return Tpl::load($file, array_merge($props, $data));
    }

    $file = kirby()->root('components') . "/$name/template.php";
    if (file_exists($file)) {
      return Tpl::load($file, array_merge($props, $data));
    }

    return null;
  }

  public static function component(string $name, array $props): string {
    return self::render($name, $props);
  }

  public static function beginComponent(string $name, array $props) {
    self::$level += 1;
    self::$components[self::$level] = [
      'name' => $name,
      'props' => $props,
      'slots' => [],
    ];
    ob_start();
  }

  public static function endComponent() {
    $slot = ob_get_clean();
    $data = self::$components[self::$level];
    unset(self::$components[self::$level]);
    self::$level--;

    return self::render($data['name'], $data['props'], $slot, $data['slots']);
  }

  public static function beginSlot(string $name) {
    self::$slotName = $name;
    ob_start();
  }

  public static function endSlot() {
    self::$components[self::$level]['slots'][self::$slotName] = ob_get_clean();
  }
}