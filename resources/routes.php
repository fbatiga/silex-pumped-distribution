<?php

/*
 * This where you define your routes. you can use match, but also get, post, put, patch  etc.
 * You can even put some closures, but it's not recommended. It's better to keep things clean.
 *
 */


$app->match('/',"home.controller:indexAction")->bind("homepage");
$app->match('/demo',  "demo.controller:demoAction");


return $app;
