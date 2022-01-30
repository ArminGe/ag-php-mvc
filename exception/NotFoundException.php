<?php
/**
 * Project: armin - Filename: NotFoundException.php
 * Namespace: agelleiler\phpmvc\exception
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 19:04
 */

namespace agelleiler\phpmvc\exception;
/**
 * Class NotFoundException
 * @package agelleiler\phpmvc\exception
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class NotFoundException extends \Exception
{
        protected $message = 'Page not found';
        protected $code = 404 ;
}