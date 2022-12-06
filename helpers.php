<?php

function component($name, $props = []) {
  echo arnoson\KirbyComponents\Component::component($name, $props);
}

function beginComponent($name, $props = []) {
  echo arnoson\KirbyComponents\Component::beginComponent($name, $props);
}

function endComponent() {
  echo arnoson\KirbyComponents\Component::endComponent();
}

function slot(string $name) {
  echo arnoson\KirbyComponents\Component::beginSlot($name);
}

function endSlot() {
  echo arnoson\KirbyComponents\Component::endSlot();
}