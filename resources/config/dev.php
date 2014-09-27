<?php

// include the prod configuration
require __DIR__.'/prod.php';

$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'fly_dev',
    'User'     => 'root',
    'password' => 'toor',
);


// enable the debug mode
$app['debug'] = true;
