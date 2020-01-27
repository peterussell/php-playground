<?php

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

function view($viewName, $data = []) {
  // extract() takes an associative array, pulls out the values into variables
  // which can then be used.
  // For example ['name' => 'Ted', 'age' => 32] extracts out to
  //   $name = 'Ted';
  //   $age = 32;
  extract($data);
  return require "views/{$viewName}.view.php";
}

function redirect($path) {
  header("Location: {$path}");
}
