<?php
/**
 * Project: armin - Filename: ForbiddenException.php
 * Namespace: agelleiler\phpmvc\exception
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 18:37
 */

namespace agelleiler\phpmvc\exception;
/**
 * Class ForbiddenException
 * @package agelleiler\phpmvc\exception
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = '403';
}