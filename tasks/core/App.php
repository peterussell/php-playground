<?php

namespace App\Core;

class App
{
  protected static $store = [];

  public static function bind($key, $value) {
    static::$store[$key] = $value;
  }

  public static function get($key) {
    if (!array_key_exists($key, static::$store)) {
      throw new Exception("No {$key} is bound in the store.");
    }
    return static::$store[$key];
  }
}
