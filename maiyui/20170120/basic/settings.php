<?php
  
WfConfigHelper::set('urlRewrite',array(
	
    'imagecache/<presetname:\w+>/<file:.*>'=>'wfimage/cache/index',
    '<controller:\w+>/<id:\d+>'=>'<controller>/view',
    '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
   ));


WfConfigHelper::set('name','站点名');
WfConfigHelper::set('language','zh_cn');
WfConfigHelper::set('timeZone','Asia/Chongqing');
WfConfigHelper::set('charset','utf-8');
WfConfigHelper::set('metaKeywords',null);
WfConfigHelper::set('metaDescription',null);

WfConfigHelper::setTablePrefix(null, 'wfcms');
WfConfigHelper::setTablePrefix(null, 'wfmenu'); 
