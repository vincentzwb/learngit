<?php
Yii::import('wfwebuser.models.WebuserLoginForm');
class WebLoginForm extends WebuserLoginForm
{
//     public $formRedirectUrl=array('controller/action','id'=>'id');
   public $formViewInput='views.forms.WebuserLogin';
/*   public function getModel()
   {
      return Webuser::model()->findByAttributes(array('username'=>$this->username));
   }  */ 
}
