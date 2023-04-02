<?php

/**
 * Archivo de rutas
 * 
 * Este archivo contiene las rutas de la aplicación.
 * 
 * PHP version 7.4.23
 * 
 * @category Rutas
 * @package  ErpFtpt\Rutas
 * @version  1.0.0
 * @author   Ing. Sergio Rondón
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://www.ideamostuweb.com/
 */

declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();
    $settings = $container->get('settings');

    $app->get('/', 'App\Controllers\HomeController:index')->setName('home');
};
