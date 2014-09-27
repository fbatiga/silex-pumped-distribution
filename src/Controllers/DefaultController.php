<?php

namespace App\Controllers;

use Psr\Log\LoggerInterface;
use \Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * DefaultController is here to help you get started.
 *
 * You would probably put most of your actions in other more domain specific
 * controller classes.
 *
 * Controllers are completely separated from Silex, any dependencies should be
 * injected through the constructor. When used with a smart controller resolver,
 * the Request object can be automatically added as an argument if you use type
 * hinting.
 *
 * @author Gunnar Lium <gunnar@aptoma.com>
 */
class DefaultController
{
    /**
     * @var \Twig_Environment
     */
    protected $app;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var \Twig_Environment
     */
    protected $twig;


    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->request = $app['request'];
        $this->twig = $app['twig'];
    }

    public function indexAction()
    {
        $this->logger->debug('Executing DefaultController::indexAction');

        return $this->twig->render('index.twig');
    }
}
