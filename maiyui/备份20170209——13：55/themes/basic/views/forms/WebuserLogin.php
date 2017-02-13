<?php if ($form->getFormValidated()){?>
<div class='submit-success'>您已成功登陆。</div>
<?php return;}?>
<?php
$url='';
?>
<?php $HtmlForm=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
//         'enableAjaxValidation'=>true,   
        'action'=>$url,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
        ),
)); ?>
        <?php echo $HtmlForm->errorSummary($form); ?>
        <div class="row username">
                <?php echo $HtmlForm->labelEx($form,'username'); ?>
                <?php echo $HtmlForm->textField($form,'username'); ?>
                <?php echo $HtmlForm->error($form,'username'); ?>
        </div>
        <div class="row password">
                <?php echo $HtmlForm->labelEx($form,'password'); ?>
                <?php echo $HtmlForm->passwordField($form,'password'); ?>
                <?php echo $HtmlForm->error($form,'password'); ?>
        </div>
        <?php if ($form->needcaptcha):?>                
        <div class="row verifycode">
                <?php echo $HtmlForm->labelEx($form,'verifyCode'); ?>
                <div>
                <?php $this->Widget('CCaptcha'); ?>             
                <?php echo $HtmlForm->textField($form,'verifyCode'); ?>
                </div>
                <div class="hint"><?php echo WfwebuserModule::t('user','Please enter the letters as they are shown in the image above.          <br/>Letters are not case-sensitive.');?></div>
                <?php echo $HtmlForm->error($form,'verifyCode'); ?>
        </div>
        <?php endif;?>
        <div class="row rememberMe">
                <?php echo $HtmlForm->checkBox($form,'rememberMe'); ?>
                <?php echo $HtmlForm->label($form,'rememberMe'); ?>
                <?php echo $HtmlForm->error($form,'rememberMe'); ?>
        </div>  
        <div class="row buttons">
                <?php echo CHtml::submitButton(WfwebuserModule::t('user','Login')); ?>
        </div>

<?php $this->endWidget(); ?> 
 
