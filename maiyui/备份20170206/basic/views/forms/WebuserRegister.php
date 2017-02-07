<?php if ($form->getFormValidated()){?>
<div class='submit-success'>您已经完成登录。</div>
<?php return;}?>
<?php
  $url='';
?>
<form action="<?php echo $url;?>" method="post">
        <?php $currentAttribute='username';?>
        <div class='row <?php echo WfFormHelper::getInputClass($form,$currentAttribute);?>'>
                <label><?php echo WfFormHelper::getLabel($form,$currentAttribute)?>:</label>
                <?php echo WfFormHelper::requiredSpan($form,$currentAttribute);?>
		<?php echo WfFormHelper::input('text',$form,$currentAttribute,array('size'=>60,'maxlength'=>128)); ?>
		<?php echo WfFormHelper::errorMsg($form,$currentAttribute); ?>
	</div>
	<?php $currentAttribute='newpassword';?>
        <div class='row <?php echo WfFormHelper::getInputClass($form,$currentAttribute);?>'>
		<label><?php echo WfFormHelper::getLabel($form,$currentAttribute); ?></label>
                <?php echo WfFormHelper::requiredSpan($form,$currentAttribute);?>	
		<?php echo WfFormHelper::input('password',$form,$currentAttribute,array('size'=>60,'maxlength'=>512)); ?>
		<?php echo WfFormHelper::errorMsg($form,$currentAttribute); ?>
	</div>
	<?php $currentAttribute='repeatedpassword';?>
        <div class='row <?php echo WfFormHelper::getInputClass($form,$currentAttribute);?>'>
		<label><?php echo WfFormHelper::getLabel($form,$currentAttribute); ?></label>
                <?php echo WfFormHelper::requiredSpan($form,$currentAttribute);?>		
		<?php echo WfFormHelper::input('password',$form,$currentAttribute,array('size'=>60,'maxlength'=>512)); ?>
		<?php echo WfFormHelper::errorMsg($form,$currentAttribute); ?>
	</div>	
	<?php $currentAttribute='email';?>
        <div class='row <?php echo WfFormHelper::getInputClass($form,$currentAttribute);?>'>
		<label><?php echo WfFormHelper::getLabel($form,$currentAttribute); ?></label>
                <?php echo WfFormHelper::requiredSpan($form,$currentAttribute);?>		
		<?php echo WfFormHelper::input('text',$form,$currentAttribute,array('size'=>60,'maxlength'=>512)); ?>
		<?php echo WfFormHelper::errorMsg($form,$currentAttribute); ?>
	</div>
        <?php if ($form->needcaptcha):?>	
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
	<?php endif;?>	
        <div class='row <?php echo WfFormHelper::getInputClass($form,$currentAttribute);?>'>
		<?php echo CHtml::submitButton(WfwebuserModule::t('user','Register')); ?>
	</div>
</form>