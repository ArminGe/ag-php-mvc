<?php
/**
 * Project: armin - Filename: NotFoundException.php
 * Namespace: agellweiler\phpmvc\exception
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 19:04
 */

namespace agellweiler\phpmvc\exception;
/**
 * Class NotFoundException
 * @package agellweiler\phpmvc\exception
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class NotFoundException extends \Exception
{
        protected $message = 'Page not found';
        protected $code = 404 ;
}