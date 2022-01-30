<?php
/**
 * Project: armin - Filename: Controller.php
 * Namespace: agellweiler\phpmvc
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 26.01.22 20:30
 */

namespace agellweiler\phpmvc;
use agellweiler\phpmvc\middlewares\BaseMiddleware;

/**
 * Class Controller
 * @package agellweiler\phpmvc
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';
    /**
     * @var BaseMiddleware[]
     */

    protected array $middlewares = [];
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

}