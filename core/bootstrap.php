<?php

$app = [];

$app['config'] = require 'config.php';
$app['company_name'] = 'Get Some Industries';

require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);
