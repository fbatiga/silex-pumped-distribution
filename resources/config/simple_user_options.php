<?php
/**
 * User: faouzane for enyosolutions
 * Date: 27/09/2014
 * Time: 00:10
 */

$app['user.options'] = array(
    /*
    // Custom user class
    'userClass' => 'My\User',
*/
    // Custom templates
    'layoutTemplate'   => 'layout.html.twig',
    'loginTemplate'    => 'User/login.twig',
    'registerTemplate' => 'User/register.twig',
    'viewTemplate'     => 'User/view.twig',
    'editTemplate'     => 'User/edit.twig',
    'listTemplate'     => 'User/list.twig',

    /*
    // Controller options
    'controllers' => array(
        'register' => array(
            'customFields' => array('field' => 'Username'),
        ),
        'edit' => array(
            'customFields' => array('field' => 'Username'),
        ),
    ),
    */
);
