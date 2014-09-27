<?php

require_once __DIR__.'/../vendor/autoload.php';

Symfony\Component\Debug\Debug::enable();

$app = new Silex\Application();

require __DIR__.'/../resources/config/dev.php';
require __DIR__ . '/../resources/app.php';

require __DIR__ . '/../resources/controllers.php';
require __DIR__ . '/../resources/routes.php';

$app->run();