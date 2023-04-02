<?php

/**
 * Archivo de dependencias
 * 
 * Este archivo define las dependencias y configuraciones
 * para el contenedor de dependencias de PHP-DI.
 * 
 * PHP version 7.4.23
 * 
 * @category  Dependencias
 * @package   ERP_FTPT
 * @version   1.0.0
 * @author    Ing. Sergio Rondón
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://www.ideamostuweb.com
 */

declare(strict_types=1);

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\UidProcessor;
use Medoo\Medoo;
use Slim\Views\Twig;
use Slim\Flash\Messages;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        'logger' => function (ContainerInterface $container) {
            $settings = $container->get('settings');

            $loggerSettings = $settings['logger'];
            $logger = new Logger($loggerSettings['name']);

            $processor = new UidProcessor();
            $logger->pushProcessor($processor);

            $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
            $logger->pushHandler($handler);

            return $logger;
        },
        'database' => function (ContainerInterface $container) {
            $database = $container->get('database');
            return new Medoo($database);
        },
        'session' => function (ContainerInterface $container) {
            return new \App\Middleware\SessionMiddleware;
        },
        'flash' => function (ContainerInterface $container) {
            $session = $container->get('session');
            return new Messages($session);
        },
        'twig_profile' => function () {
            return new \Twig\Profiler\Profile();
        },
        'view' => function (ContainerInterface $container) {
            $settings = $container->get('settings');
            return Twig::create($settings['view']['template_path'], $settings['view']['twig']);
        },
    ]);
};
