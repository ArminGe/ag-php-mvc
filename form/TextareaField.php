<?php
/**
 * Project: armin - Filename: TextareaField.php
 * Namespace: app\core\form
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 30.01.22 15:15
 */

namespace app\core\form;
/**
 * Class TextareaField
 * @package app\core\form
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class TextareaField extends BaseField
{

    public function renderInput(): string
    {
        return sprintf('<textarea name="%s" class="form-control%s">%s</textarea>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->{$this->attribute},
        );
    }
}