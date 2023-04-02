<?php

/**
 * Middleware
 * 
 * Este archivo contiene la definición de los middlewares
 * utilizados en la aplicación.
 *
 * PHP version 7.4.23
 * 
 * @category Middleware
 * @package  ErpFtpt
 * @version  1.0.0
 * @author   Ing. Sergio Rondón
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://www.ideamostuweb.com/
 */

declare(strict_types=1);

use DI\Container;
use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\TwigMiddleware;

return function (App $app) {
    $container = $app->getContainer();
    $settings = $container->get('settings');

    $app->add($container->get('session'));

    $app->add(TwigMiddleware::createFromContainer($app));
};
