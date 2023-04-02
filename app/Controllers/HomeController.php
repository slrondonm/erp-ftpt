<?php

/**
 * IDEAMOS TU WEB
 * Clase HomeController
 *
 * Esta clase es la clase Home para los controladores de Slim Framework.
 *
 * PHP version 7.4.23
 *
 * @category  HomeController
 * @package   App\Controllers
 * @version  1.0.0
 * @author   Ing. Sergio Rondón
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://www.ideamostuweb.com/
 **/

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpInternalServerErrorException as ErrorHandler;

final class HomeController extends BaseController
{
    public function index(Request $request, Response $response, array $args = []): Response
    {
        $this->logger->info("Home page action dispatched");

        return $this->render($request, $response, 'index.twig');
    }

    public function error(Request $request, Response $response, array $args = []): Response
    {
        $this->logger->info("Error log");

        throw new ErrorHandler($request, "Try error handler");
    }
}
