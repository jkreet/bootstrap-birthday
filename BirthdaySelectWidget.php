<?php
namespace jkreet\birthdayselect;

use yii;
use yii\base\Widget;
use yii\base\Model;
use yii\base\InvalidConfigException;
use yii\helpers\Html;

class BirthdaySelectWidget extends Widget
{
    public $field;
    /**
     * @var Model the data model that this widget is associated with.
     */
    public $model;
    /**
     * @var string the model attribute that this widget is associated with.
     */
    public $attribute;
    /**
     * @var string the input name. This must be set if [[model]] and [[attribute]] are not set.
     */
    public $name;
    /**
     * @var string the input value.
     */
    public $value;
    /**
     * @var array the HTML attributes for the input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    public function init()
    {
        if ($this->name === null && !$this->hasModel()) {
            throw new InvalidConfigException("Either 'name', or 'model' and 'attribute' properties must be specified.");
        }
        if (!isset($this->options['id'])) {

//            print '<pre class="debug hidden">';
//            print_r();
//            print '</pre>';
//            die;

            $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
            $this->options['value'] = Html::getAttributeValue($this->model, $this->attribute);
            $this->options['name'] = Html::getInputName($this->model, $this->attribute);
        }
        parent::init();
    }

    public function run() {
        parent::run();
        BirthdaySelectAsset::register($this->getView());

//        print '<pre class="debug ">';
////        print_r($this->model->$this->attribute);
//        print '</pre>';
//        die;

        return Html::input('text',$this->options['name'],$this->options['value'],[
            'id' => $this->options['id'],
            'class' => 'form-control dropdownDatePicker',
        ]);
    }

    protected function hasModel()
    {
        return $this->model instanceof Model && $this->attribute !== null;
    }

}