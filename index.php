<?php

$qb = require 'bootstrap.php'; // assigns return value from include to variable
require 'Task.php';

$tasks = $qb->selectAll('todos', 'Task');

require 'index.view.php';
