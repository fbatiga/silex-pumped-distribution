<?php
/*
 * This is where you register your controllers as services. If you need to inject services, you can do so here
 */

use App\Controllers;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;



$app['home.controller'] = $app->share(function() use ($app) {return new Controllers\HomeController($app);});
$app['users.controller'] = $app->share(function() use ($app) {return new Controllers\UserController($app);});
