<?php
/**
 * Project: armin - Filename: Form.php
 * Namespace: agelleiler\phpmvc\form
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 27.01.22 17:05
 */

namespace agelleiler\phpmvc\form;
use agelleiler\phpmvc\Model;

/**
 * Class Form
 * @package agelleiler\phpmvc\form
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class Form
{
    public static function beginn($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }

}