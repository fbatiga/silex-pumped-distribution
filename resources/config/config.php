<?php
/**
 * Created by PhpStorm.
 * User: faou
 * Date: 28/09/2014
 * Time: 14:31
 * @decription : This is the base config file. All the cross platforms options goes here.
 */

define("DOCUMENT_ROOT", __DIR__."../../");
define("WEB_ROOT", __DIR__."../../web/");

// Local
$app['locale'] = 'fr';
$app['session.default_locale'] = $app['locale'];
$app['translator.messages'] = array(
    'fr' => __DIR__.'/../resources/locales/fr.yml',
);

//User class
require __DIR__.'/simple_user_options.php';

// Cache
$app['cache.path'] = __DIR__ . '/../cache';

// Http cache
$app['http_cache.cache_dir'] = $app['cache.path'] . '/http';

// Twig cache
$app['twig.options.cache'] = $app['cache.path'] . '/twig';

// Assetic
$app['assetic.enabled']              = true;
$app['assetic.path_to_cache']        = $app['cache.path'] . '/assetic' ;
$app['assetic.path_to_web']          = __DIR__ . '/../../web/assets';
$app['assetic.input.path_to_assets'] = __DIR__ . '/../assets';

$app['assetic.input.path_to_css']       = $app['assetic.input.path_to_assets'] . '/less/style.less';
$app['assetic.output.path_to_css']      = 'css/styles.css';
$app['assetic.input.path_to_js']        = array(
    __DIR__.'/../../vendor/twitter/bootstrap/js/bootstrap-tooltip.js',
    __DIR__.'/../../vendor/twitter/bootstrap/js/*.js',
    $app['assetic.input.path_to_assets'] . '/js/script.js',
);
$app['assetic.output.path_to_js']       = 'js/scripts.js';


// User
$app['security.users'] = array('username' => array('ROLE_USER', 'password'));
