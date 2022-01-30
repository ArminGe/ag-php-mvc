<?php
/**
 * Project: armin - Filename: Field.php
 * Namespace: app\core\form
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 27.01.22 17:06
 */

namespace app\core\form;
use app\core\Model;

/**
 * Class Field
 * @package app\core\form
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
class InputField extends BaseField
{
    //Type definition for form fields
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;
    /**
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
       $this->type = self::TYPE_TEXT;
       parent::__construct($model, $attribute);
    }

    //set type password
    public function passwordField(): static
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf('<input type="%s" name="%s" value="%s" class="form-control%s">',
        $this->type,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        );
    }
}