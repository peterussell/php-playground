<?php

require 'functions.php';

$ages = [7, 29, 17, 18];

foreach ($ages as $age) {
  greet($age);
  echo "<br><br>";
}

// 'dd' is a common function name - 'Dump and Die'
dd("hello everyone");

require 'index.view.php';
