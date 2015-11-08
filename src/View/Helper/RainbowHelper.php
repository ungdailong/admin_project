<?php
namespace App\View\Helper;

use Cake\View\Helper;

class RainbowHelper extends Helper
{
    public $helpers = ['Html', 'Form'];

    public function input($fieldName, array $options = [])
    {
        $templates = [
            'label' => '<div class="{{lableDivClass}}"><label for="{{lableFor}}"">{{text}}</label></div>',
            'input' => '<div class="{{inputDivClass}}"><input type="{{type}}"" {{attrs}}></div>',
            'inputContainer' => '<div class="{{inputContainerDivClass}}">{{content}}</div>'
        ];

        $templateVars = [
            'lableFor' => '',
            'lableDivClass' => 'col-sm-3',
            'inputDivClass' => 'col-sm-9',
            'inputContainerDivClass' => 'form-group'
        ];
        
        $options += [
            'class' => 'form-control',
            'templateVars' => $templateVars,
        ];

        $this->Form->templates($templates);

        return $this->Form->input($fieldName,$options);
    }

    public function select($fieldName, $options = [], array $attributes = [])
    {
        $templates = [
            'select' => '   <div class="{{selectDivClass}}">
                                <div class="{{selectDivDivClass}}">
                                    <label for="{{selectLableFor}}">{{selectLableName}}</label>
                                </div>
                                <span class="{{selectSpanClass}}"><select>{{content}}</select></span>
                            </div>'
        ];

        $templateVars = [
            'selectDivClass' => 'form-group',
            'selectDivDivClass' => 'col-sm-3',
            'selectLableFor' => '',
            'selectLableName' => !empty($attributes['lableName']) ? $attributes['lableName']  : '',
            'selectSpanClass' => 'ui-select',
        ];
        
        $attributes += [
            'templateVars' => $templateVars,
        ];

        $this->Form->templates($templates);
        return $this->Form->select($fieldName, $options, $attributes);
    }

    public function createForm($name = null, array $options = [])
    {
        $attributes = '';
        foreach ($options as $key => $value) {
            $attributes .= "$key = '$value' ";
        }

        return "<form name='$name' $attributes >";
    }

    public function endForm(array $secureAttributes = [])
    {
        return $this->Form->end($secureAttributes);
    }
}