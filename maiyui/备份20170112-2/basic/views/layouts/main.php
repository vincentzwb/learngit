<?php /* @var $this Controller */ 
$favicon=Yii::app()->theme->baseUrl.'/skin/images/favicon.ico';
WfPageHelper::addCoreScripts(array('jquery','jquery.ui'));
WfPageHelper::seoMeta();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo WfConfigHelper::get('language');?>" lang="<?php echo WfConfigHelper::get('language');?>">
<head>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo WfConfigHelper::get('charset');?>" />
	<meta name="language" content="<?php echo  WfConfigHelper::get('language');?>" />
	<meta name="renderer" content="webkit"/>
	<link rel="shortcut icon" href="<?php echo $favicon;?>" type="image/x-icon"/>	
        <link rel="stylesheet" type="text/css" href="<?php echo WfPageHelper::getThemeBaseUrl(); ?>/skin/css/default/default.css" />		
	<link rel="stylesheet" type="text/css" href="<?php echo WfPageHelper::getThemeBaseUrl(); ?>/skin/css/global.css" />
	<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo WfPageHelper::getThemeBaseUrl(); ?>/skin/css/default/ie6.css" media="screen, projection" />
	<![endif]-->	
	<!--[if lt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link rel="stylesheet" type="text/css" href="<?php echo WfPageHelper::getThemeBaseUrl(); ?>/skin/css/default/ie.css" media="screen, projection" />
	<![endif]-->
	<title><?php echo CHtml::encode(WfConfigHelper::get('name').'-'.$this->pageTitle); ?></title>
</head>


<body class="<?php echo WfPageHelper::renderBodyClass();?>">

<div class="container" id="page">
	<div id="header">
		<a href="/" id="logo"><img alt="logo" src="<?php echo WfPageHelper::getThemeBaseUrl(); ?>/skin/images/logo.jpg"/></a>
	</div><!-- header -->

	<div id="mainmenu">
	    <?php WfPageHelper::renderPartial('/widgets/mainmenu');?>
	</div><!-- mainmenu -->
	<div id='breadcrumbs'>
	    <?php WfPageHelper::renderPartial('/widgets/breadcrumbs');?>
	</div>
	<?php echo $content; ?>
	<div id="footer" class="clearfix">
	<div id='footer-link'>
		<?php
// 			$this->widget('wfcms.LayoutWidget',array(
// 			  'keyword'=>'footer-links',
// 			)); 
		?>
	</div>
	</div><!-- footer -->

</div><!-- page -->


</body>
</html>
