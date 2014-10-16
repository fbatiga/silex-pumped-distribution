<?php

$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'fly_dev',
    'user'     => 'root',
    'password' => 'toor',
    'cahrset'  => 'utf8'
);



// include the prod configuration
require __DIR__.'/config.php';




// enable the debug mode
$app['debug'] = true;
$app['whoops'] = true;
