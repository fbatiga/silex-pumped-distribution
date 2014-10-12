<?php

$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'fly_dev',
    'user'     => 'root',
    'password' => 'toor',
);



// include the prod configuration
require __DIR__.'/config.php';




// enable the debug mode
$app['debug'] = true;
$app['whoops'] = true;
