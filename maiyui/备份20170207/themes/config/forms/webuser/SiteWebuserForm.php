<?php
Yii::import('wfwebuser.models.BaseWebuserForm');
class SiteWebuserForm extends BaseWebuserForm
{
        public $formViewInput='views.forms.BaseWebuserForm';
//     public $formRedirectUrl=array('controller/action','id'=>'id')        
        protected function getFormAttributes()
        {
          $attributes=array();
          return array_merge(parent::getFormAttributes(),$attributes);
        }        
        public function rules()
        {
            $rules=array();
            return array_merge(parent::rules(),$rules);
        }
        public function attributeLabels()
        {
            $labels=array();
            return array_merge(parent::attributeLabels(),$labels);
        }        
}
