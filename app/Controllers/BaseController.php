<?php

/**
 * IDEAMOS TU WEB
 * Clase BaseController
 *
 * Esta clase es la clase base para los controladores de Slim Framework.
 *
 * PHP version 7.4.23
 *
 * @category  BaseController
 * @package   App\Controllers
 * @version  1.0.0
 * @author   Ing. Sergio Rondón
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://www.ideamostuweb.com/
 **/

declare(strict_types=1);

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

abstract class BaseController
{
    protected $view;
    protected $logger;
    protected $flash;

    /**
     * Class Construct
     */
    public function __construct(ContainerInterface $container)
    {
        $this->view = $container->get('view');
        $this->logger = $container->get('logger');
        $this->flash = $container->get('flash');
    }

    protected function render(Request $request, Response $response, string $template, array $params = []): Response
    {
        $params['flash'] = $this->flash->getMessage('info');
        $params['uinfo'] = $request->getAttribute('uinfo');

        return $this->view->render($response, $template, $params);
    }
}
