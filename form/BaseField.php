<?php
/**
 * Project: armin - Filename: BaseField.php
 * Namespace: agellweiler\phpmvc\form
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 30.01.22 14:52
 */

namespace agellweiler\phpmvc\form;
use agellweiler\phpmvc\Model;

/**
 * Class BaseField
 * @package agellweiler\phpmvc\form
 * @author Armin Gellweiler <armin@gellweiler.net>
 */

abstract class BaseField
{
    public Model $model;
    public string $attribute;
    /**
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }


    abstract public function renderInput(): string;
    public function __toString()
    {
        return sprintf('
            <div class="form-group">
                <label>%s</label>
                %s
               
                <div class="invalid-feedback">
                    %s
                </div>
            </div>'
            //Set label
            ,
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }
}