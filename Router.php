<?php
/**
 * Project: armin - Filename: Router.php
 * Namespace: agelleiler\phpmvc
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 26.01.22 16:02
 */

namespace agelleiler\phpmvc;
use agelleiler\phpmvc\exception\ForbiddenException;
use agelleiler\phpmvc\exception\NotFoundException;

/**
 * Class Router
 * @package agelleiler\phpmvc
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    /**
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * @throws NotFoundException
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            throw new NotFoundException();
        }
        if (is_string($callback)){
            return Application::$app->view->renderView($callback);
        }
        if (is_string($callback)){
            return Application::$app->view->renderView($callback);
        }
        if (is_array($callback)) {
           /** @var Controller $controller  */
           $controller = new $callback[0]();
           Application::$app->controller = $controller;
           $controller->action = $callback[1];
           $callback[0] = $controller;

           foreach ($controller->getMiddlewares() as $middleware) {
               $middleware->execute();
           }
        }

       return call_user_func($callback, $this->request, $this->response);
    }
}