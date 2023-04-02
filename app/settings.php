<?php

/**
 * Archivo de configuración del ERP de la fundación Trabaja Para Ti.
 * 
 * Este archivo define las constantes y configuraciones necesarias para el funcionamiento
 * correcto del ERP.
 *
 * PHP version 7.4.23
 * 
 * @category Config
 * @package  ErpFtpt
 * @version  1.0.0
 * @author   Ing. Sergio Rondón
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://www.ideamostuweb.com/
 */

declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Logger;
use Monolog\Level;
use Dotenv\Dotenv;

return function (ContainerBuilder $containerBuilder) {
    $rootPath = realpath(__DIR__ . '/..');
    $debug = (getenv('APP_ENV') != 'production');

    $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    // Global Settings Object
    $containerBuilder->addDefinitions([
        'settings' => [
            // Base path
            'base_path' => '',

            // Is debug moderm
            'debug' => $debug,

            // 'Temprorary directory
            'temporary_path' => $rootPath . '/var/tmp',

            // Route cache
            'route_cache' => $rootPath . '/var/cache/routes',

            // View settings
            'view' => [
                'template_path' => $rootPath . '/app/Views',
                'twig' => [
                    'cache' => $rootPath . '/var/cache/twig',
                    'debug' => $debug,
                    'auto_reload' => true,
                ],
            ],

            // monolog settings
            'logger' => [
                'name' => 'app',
                'path' =>  $rootPath . '/var/log/app.log',
                'level' => $debug ? Level::Debug : Level::Info,
            ],

            // database settings
            'database' => [
                'database_type' => getenv('DB_CONNECTION'),
                'database_name' => getenv('DB_DATABASE'),
                'server' => getenv('DB_HOST'),
                'username' => getenv('DB_USERNAME'),
                'password' => getenv('DB_PASSWORD'),
                'port' => getenv('DB_PORT'),
                'charset' => getenv('DB_CHARSET')
            ]
        ]
    ]);
};
