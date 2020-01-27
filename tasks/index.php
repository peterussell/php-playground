<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php'; // assigns return value from include to variable

Router::load('routes.php')
  ->direct(Request::uri(), Request::method());
