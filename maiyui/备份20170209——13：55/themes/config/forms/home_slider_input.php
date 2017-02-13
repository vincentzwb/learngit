<?php
Yii::import('wfcms.models.WfNodeInputForm');

//rewrite the Class name 'TestNodeInput' to file name.
class home_slider_input extends WfNodeInputForm {

    protected function getFormAttributes() {
        //add new attribute.AttributeName=>defaultValue.default value cannot be null
        $newAttrib = array(
            'pic' => '',
        );
        return array_merge(parent::getFormAttributes(), $newAttrib);
    }

    public function attributeLabels() {
        //add new attribute label in Key=>Label Format
        $newLabels = array(
             'pic' => '右侧多张图片',
        );
        
        return array_merge(parent::attributeLabels(), $newLabels);
    }

    public function rules() {
        //add new rule
        $newRules = array(
            array('pic', 'safe'),
        );
        return array_merge(parent::rules(), $newRules);
    }

    public function getInputForm($model) {
        $inputs = parent::getInputForm($model);
//    unset($inputs['elements']['picture']);
        //add new input form for new attribute
        $newInput = array(
            'pic' => WfFormHelper::inputFilePicker(true),
//          
        );
        return array_merge_recursive($inputs, array('elements' => $newInput));
    }

}
