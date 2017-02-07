<?php
Yii::import('wfcms.models.WfNodecatalogInputForm');
//rewrite the Class name 'TestNodeCatalogInput' to file name.
class TestNodeCatalogInput extends WfNodecatalogInputForm
{
    protected function getFormAttributes()
    {
    //add new attribute.AttributeName=>defaultValue.default value cannot be null
      $newAttrib=array(
        'test'=>'',
      );
      return array_merge(parent::getFormAttributes(),$newAttrib);
    }
    public function attributeLabels()
    {
    //add new attribute label in Key=>Label Format
      $newLabels=array(
        'test'=>'新属性'
      );
      return array_merge(parent::attributeLabels(),$newLabels);
    }
    public function rules()
    {
    //add new rule
      $newRules=array(
        array('test','safe'),
      );
      return array_merge(parent::rules(),$newRules);
    }

    public function getInputForm($model)
    {
      $inputs=parent::getInputForm($model);
//    unset($inputs['elements']['picture']);
    
    //add new input form for new attribute
      $newInput=array(
        'test'=>array(
          'type'=>'text',
        ),
      );
      return array_merge_recursive($inputs,array('elements'=>$newInput));
    }
}

