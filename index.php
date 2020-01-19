<?php

// normal array
$animals = ['dog', 'cat'];

// nb. this is append, not reassign
$animals[] = 'elephant';

$person = [
  'age' => 33,
  'hair' => 'black',
  'occupation' => 'pilot'
];

$person['name'] = 'pete';

// this is a common way to print out a variable and then return immediately
// 1. dump the variable
// 2. die (similar to return)

// nb. this is equivalent to var_dump($person); die();

// die(var_dump($person));


require 'index.view.php';
