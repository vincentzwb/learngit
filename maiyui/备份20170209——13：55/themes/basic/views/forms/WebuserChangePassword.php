<?php if ($form->getFormValidated()){?>
<div class='submit-success'>您的密码已经修改成功。</div>
<?php return;}?>

<?php $htmlForm=$this->beginWidget('CActiveForm', array(
        'id'=>'changepassword-form',
//      'enableAjaxValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
        ),
)); ?>

        <?php echo $htmlForm->errorSummary($form); ?>
        
        <div class="row">
        <?php echo $htmlForm->labelEx($form,'oldPassword'); ?>
        <?php echo $htmlForm->passwordField($form,'oldPassword'); ?>
        <?php echo $htmlForm->error($form,'oldPassword'); ?>
        </div>
        
        <div class="row">
        <?php echo $htmlForm->labelEx($form,'password'); ?>
        <?php echo $htmlForm->passwordField($form,'password'); ?>
        <?php echo $htmlForm->error($form,'password'); ?>
        </div>
        
        <div class="row">
        <?php echo $htmlForm->labelEx($form,'verifyPassword'); ?>
        <?php echo $htmlForm->passwordField($form,'verifyPassword'); ?>
        <?php echo $htmlForm->error($form,'verifyPassword'); ?>
        </div>
        
        
        <div class="row submit">
        <?php echo CHtml::submitButton(WfwebuserModule::t('user',"Change")); ?>
        </div>

<?php $this->endWidget(); ?>
