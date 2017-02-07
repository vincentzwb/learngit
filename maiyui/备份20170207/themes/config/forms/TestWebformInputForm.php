<?php
Yii::import('wfwebform.models.WfWebformInputForm');
class TestWebformInputForm extends WfWebformInputForm
{
    public $formViewInput='views.forms.testInput';
//     public $formRedirectUrl=array('controller/action','id'=>'id')
    protected function getFormAttributes()
    {
    //add new attribute.AttributeName=>defaultValue.default value cannot be null
      return array(
        'test'=>'',
      );
    }
    public function attributeLabels()
    {
    //add new attribute label in Key=>Label Format
      return array(
        'test'=>'测试'
      );
    }
    public function rules()
    {
    //add new rule
      return array(
        array('test','safe'),
      );
    }  
}