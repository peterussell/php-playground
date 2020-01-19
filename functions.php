<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function print_age($age) {
  echo "I'm {$age} years old.<br>";
}

function greet($age) {
  if (check_age($age)) {
    echo "Come on in!<br>";
  } else {
    echo "Get outta here.<br>";
  }
}

function check_age($age) {
  print_age($age);
  return $age >= 18;
}
