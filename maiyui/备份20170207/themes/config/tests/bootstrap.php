<?php

// change the following paths if necessary
$_SERVER['SCRIPT_FILENAME']=dirname(__FILE__).'/../../../index.php';
$_SERVER['SCRIPT_NAME']='index.php';
$yiit=dirname(__FILE__).'/../../../protected/framework/yiit.php';
$config=dirname(__FILE__).'/../../../protected/config/test.php';


require_once(dirname(__FILE__).'/../../../protected/config/WfConfigHelper.php');
require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
