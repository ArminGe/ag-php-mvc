<?php
/**
 * Project: armin - Filename: Response.php
 * Namespace: agellweiler\phpmvc
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 26.01.22 18:55
 */

namespace agellweiler\phpmvc;
/**
 * Class Response
 * @package agellweiler\phpmvc
 * @author Armin Gellweiler <armin@gellweiler.net>
 */

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: '.$url);
    }
}