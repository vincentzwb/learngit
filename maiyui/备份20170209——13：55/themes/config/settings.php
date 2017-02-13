<?php
WfConfigHelper::debug();
WfConfigHelper::enableModule(array(
  'wfbase',
  'wfadmin',
  'wfimage',
  'wfmenu',
  'wfcms',
  'wfwebform',
  'fileserver',
  'wfmail',
//   'wfwebuser',
//   'wfnewsletter',
//   'wfsms',
//   'wfdataexport',
));
WfConfigHelper::enableJSONSerializer();
WfConfigHelper::set('consolePanelStyle', 'v2');
WfConfigHelper::set('defualtUserHelper','wfBaseUserHelper');

//WfConfigHelper::set('consoleLink',array(
//    array(
//        'nodetype'=>1,
//        'ico_class'=>'ico1',
//    ),
//    array(
//        'nodetype'=>2,
//        'ico_class'=>'ico2',
//    ),
//    array(
//        'nodetype'=>3,
//        'ico_class'=>'ico3',
//    ),
//    array(
//        'nodetype'=>4,
//        'ico_class'=>'ico4',
//    ),
//    array(
//        'nodetype'=>5,
//        'ico_class'=>'ico5',
//    ),
//    array(
//        'nodetype'=>6,
//        'ico_class'=>'ico6',
//    ),
//));

// WfConfigHelper::setTablePrefix('test_','wfcms');   
//WfConfigHelper::addPlugin('$pluginName');


// if (strtolower($_SERVER['SERVER_NAME']) == "xxxx") {
//     WfConfigHelper::set('theme','basicen');

//     return;
// }
WfConfigHelper::set('theme','basic');
