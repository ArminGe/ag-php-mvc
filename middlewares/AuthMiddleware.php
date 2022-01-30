<?php
/**
 * Project: armin - Filename: AuthMiddleware.php
 * Namespace: agellweiler\phpmvc\middlewares
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 18:23
 */

namespace agellweiler\phpmvc\middlewares;
use agellweiler\phpmvc\Application;
use agellweiler\phpmvc\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * @package agellweiler\phpmvc\middlewares
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class AuthMiddleware extends BaseMiddleware
{

    public array $actions = [];

    /**
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }


    /**
     * @throws ForbiddenException
     */
    public function execute()
    {
        if (Application::isGuest()) {
           if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
           }
        }
    }
}