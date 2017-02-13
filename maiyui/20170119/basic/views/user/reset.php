
<?php if ($resetForm->getFormValidated()){?>
<div class='submit-success'>您的密码已经修改成功。</div>
<?php return;}?>

<?php $htmlForm=$this->beginWidget('CActiveForm', array(
        'id'=>'changepassword-form',
//      'enableAjaxValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
        ),
)); ?>

        <?php echo $htmlForm->errorSummary($resetForm); ?>
        <div class="row">
        <?php echo $htmlForm->labelEx($resetForm,'password'); ?>
        <?php echo $htmlForm->passwordField($resetForm,'password'); ?>
        <?php echo $htmlForm->error($resetForm,'password'); ?>
        </div>
        
        <div class="row">
        <?php echo $htmlForm->labelEx($resetForm,'verifyPassword'); ?>
        <?php echo $htmlForm->passwordField($resetForm,'verifyPassword'); ?>
        <?php echo $htmlForm->error($resetForm,'verifyPassword'); ?>
        </div>
        
        
        <div class="row submit">
        <?php echo CHtml::submitButton('修改'); ?>
        </div>

<?php $this->endWidget(); ?>
 
