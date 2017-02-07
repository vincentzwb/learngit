<?php
$settings=new WfControllerSettings;
$settings->addErrorAction();
$settings->addCaptchaAction();
$settings->addAction('index');
$settings->setActionTitle('index','首页');
$settings->setActionLayout('index', false);




return $settings;