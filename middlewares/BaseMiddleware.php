<?php
/**
 * Project: armin - Filename: BaseMiddleware.php
 * Namespace: agelleiler\phpmvc\middlewares
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 18:20
 */

namespace agelleiler\phpmvc\middlewares;
/**
 * Class BaseMiddleware
 * @package agelleiler\phpmvc\middlewares
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}