<?php
Yii::import('wfwebuser.models.WebuserBaseChangePasswordForm');
class WebChangePasswordForm extends WebuserBaseChangePasswordForm
{
//     public $formRedirectUrl=array('controller/action','id'=>'id')
   public $formViewInput='views.forms.WebuserChangePassword';
}
