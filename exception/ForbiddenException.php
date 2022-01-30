<?php
/**
 * Project: armin - Filename: ForbiddenException.php
 * Namespace: agellweiler\phpmvc\exception
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 18:37
 */

namespace agellweiler\phpmvc\exception;
/**
 * Class ForbiddenException
 * @package agellweiler\phpmvc\exception
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = '403';
}