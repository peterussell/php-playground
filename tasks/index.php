<?php

use App\Core\{Router, Request};

require 'vendor/autoload.php';
require 'core/bootstrap.php'; // assigns return value from include to variable

Router::load('app/routes.php')
  ->direct(Request::uri(), Request::method());
