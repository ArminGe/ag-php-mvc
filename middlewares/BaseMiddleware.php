<?php
/**
 * Project: armin - Filename: BaseMiddleware.php
 * Namespace: app\core\middlewares
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 18:20
 */

namespace app\core\middlewares;
/**
 * Class BaseMiddleware
 * @package app\core\middlewares
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}