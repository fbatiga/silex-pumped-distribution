<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/../resources/config/config_prod.php';
require __DIR__ . '/../resources/bootstrap.php';

require __DIR__ . '/../resources/controllers.php';
require __DIR__ . '/../resources/routes.php';

$app['http_cache']->run();
