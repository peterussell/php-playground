<?php

$app['database']->insert('names', [
  'name' => $_POST['name']
]);

// Redirect to the homepage
header('Location: /');