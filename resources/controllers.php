<?php
/*
 * This is where you register your controllers as services. If you need to inject services, you can do so here
 */

use App\Controllers;
use Symfony\Component\Validator\Constraints as Assert;



$app['demo.controller'] = $app->share(function() use ($app) {return new Controllers\DemoController($app);});
$app['home.controller'] = $app->share(function() use ($app) {return new Controllers\HomeController($app);});

