<?php if ($form->getFormValidated()){?>
<div class='submit-success'>您的表单已经提交成功。</div>
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
<?php $currentAttribute='test';?>
<div class='inputrow <?php echo WfFormHelper::getInputClass($form,$currentAttribute);?>'>
  <label><?php echo WfFormHelper::getLabel($form,$currentAttribute)?>:</label>
  <?php echo WfFormHelper::requiredSpan($form,$currentAttribute);?>
  <?php echo WfFormHelper::input('text',$form,$currentAttribute,array('size'=>60,'maxlength'=>128)); ?>
  <?php echo WfFormHelper::errorMsg($form,$currentAttribute); ?>  
</div>
<div class='input-submit'>
<input type='submit' value='提交'/>
</div>
</form> 
