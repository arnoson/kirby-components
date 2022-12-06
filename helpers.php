<?php

function component($name, $props = []) {
  return arnoson\KirbyComponents\Component::component($name, $props);
}

function beginComponent($name, $props = []) {
  return arnoson\KirbyComponents\Component::beginComponent($name, $props);
}

function endComponent() {
  return arnoson\KirbyComponents\Component::endComponent();
}

function slot(string $name) {
  return arnoson\KirbyComponents\Component::beginSlot($name);
}

function endSlot() {
  return arnoson\KirbyComponents\Component::endSlot();
}