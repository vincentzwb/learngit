<?php if ($form->getFormValidated()){?>
<div class='submit-success'>您的链接已发送到了您的注册信箱。请进入信箱并点击相应链接</div>
<?php return;}?>
<?php
  $url=WfHelper::toUrl(array('/'))
?>
<form action="<?php echo $url;?>" method="post">
<?php if (WfFormHelper::hasErrors($form) or true){?>
    <ul class='errorSummary'>
    <?php foreach($form->getErrors() as $errors){?>
      <?php foreach($errors as $error){?>
        <li><?php echo $error;?></li>
      <?php } ?>
    <?php } ?>
    </ul>
<?php } ?>
<?php $currentAttribute='username';?>
<div class='inputrow <?php echo WfFormHelper::getInputClass($form,$currentAttribute);?>'>
  <label><?php echo WfFormHelper::getLabel($form,$currentAttribute)?>:</label>
  <?php echo WfFormHelper::requiredSpan($form,$currentAttribute);?>
  <?php echo WfFormHelper::input('text',$form,$currentAttribute,array('size'=>60,'maxlength'=>128)); ?>
  <?php echo WfFormHelper::errorMsg($form,$currentAttribute); ?>  
</div>
<?php $currentAttribute='verifyCode';?>
<div class='row <?php echo WfFormHelper::getInputClass($form,$currentAttribute);?>'>
		<label><?php echo WfFormHelper::getLabel($form,$currentAttribute); ?></label>
                <?php echo WfFormHelper::requiredSpan($form,$currentAttribute);?>		
		<div>
                <?php $this->Widget('CCaptcha'); ?>             
		<?php echo WfFormHelper::input('text',$form,$currentAttribute); ?>
		</div>
		<div class="hint"><?php echo WfwebuserModule::t('user','Please enter the letters as they are shown in the image above.		<br/>Letters are not case-sensitive.');?></div>
	<?php echo WfFormHelper::errorMsg($form,$currentAttribute); ?>
	</div>
<div class='input-submit'>
<input type='submit' value='提交'/>
</div>
</form> 
