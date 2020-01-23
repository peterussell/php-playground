<?php

require 'core/Request.php';

$database = require 'core/bootstrap.php'; // assigns return value from include to variable

// chaining: equivalent to
//  $router = Router::load(...);
//  $router->direct(...);
require Router::load('routes.php')
  ->direct(Request::uri());
