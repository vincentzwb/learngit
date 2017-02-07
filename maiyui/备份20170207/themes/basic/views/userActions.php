<?php
$settings=new WfControllerSettings;
$settings->addErrorAction();
$settings->addCaptchaAction();
$settings->addAction('login');
$settings->setPageTitle('login', '登录');
$settings->setActionForms('login', array('login'));
$settings->addAccessRule(array('allow',  // allow all users
                                  'actions'=>array('login','captcha','active','recover','register','reset'),
                                  'users'=>array('*'),
                          ));
$settings->addAccessRule(array('allow',  // deny all users
                                  'users'=>array('@'),
                          ));
$settings->addAccessRule(array('deny',
                                  'users'=>array('*'),
                          ));
return $settings;
return array(
/*
                        'login'=>array(
                              'class'=>'WfPageAction',
                              //set the page Title
                              'title'=>'登录',
                              'forms'=>array('login'),
                        ),
                        'recover'=>array(
                              'class'=>'WfPageAction',
                              //set the page Title
                              'title'=>'找回密码',
                              'forms'=>array('recover'),
                        ),
*/                       
			'reset'=>array(
			  'class'=>'wfwebuser.components.WebUserResetAction'
			),

                        'active'=>array(
			  'class'=>'wfwebuser.components.WebUserActiveAction'
                        ),
                        'controllerAccessRules'=>array(
                          array('allow',  // allow all users
                                  'actions'=>array('login','captcha','active','recover','register','reset'),
                                  'users'=>array('*'),
                          ),
                          array('allow',  // deny all users
                                  'users'=>array('@'),
                          ),                      
                          array('deny',
                                  'users'=>array('*'),
                          ),                        
                        ),

);
/*
		return array(
			//Single node page
			'node'=>array(
				'class'=>'WfNodeAction',
				//Set the view.Will use actionID as view if not set.
				'view'=>'node',
				//Set the layout,
				'layout'=>'main',
				//Param Type,0:id and keyword,1:id only,2:keyword only
				'paramType'=>1,
				//Filter node by type
				'type'=>1,
				//Set the id.Will use id param from get If not set this,
				'staticId'=1,
				//Only show view in thess id.
				'idList'=>array(1,2),				
				//Filter node by catalog				
				'catalog'=>1,
				//CDbCriteria array to filter node
				'filter'=>array(),
				//Additional data passed to view.
				'data'=>array(),
				//Set the page path to used in menu and breadcrumb,
				'path'=>array('title'=>array('router','param'=>1)),
				//load theme css
				'themeCss'=>array('someCss.css'),
			),
			//Page with out node
			'index'=>array(
			      'class'=>'WfPageAction',
			      //set the page Title
			      'title'=>'首页',
			      //Set the view.Will use actionID as view if not set.			    
			      'view'=>'index',
			      //Set the layout,			    
			      'layout'=>'main',
			      //additional data passed to view.			    
			      'data'=>array(),
			      //Set the page path to used in menu and breadcrumb,
			      'path'=>array('title'=>array('router','param'=>1)),
			      //load theme css
			      'themeCss'=>array('someCss.css'),			      
			),
			//node list page selected by type
			'type'=>array(
				'class'=>'WfNodeTypeAction',
				//Set the view.Will use actionID as view if not set.
				'view'=>'node',
				//Set the layout,
				'layout'=>'main',
				//Param Type,0:id and keyword,1:id only,2:keyword only
				'paramType'=>1,
				//Filter node by type
				'type'=>1,
				//Set the id.Will use id param from get If not set this,
				'staticId'=1,
				//Only show view in these Nodetype id.
				'idList'=>array(1,2),				
				//CDbCriteria array to filter nodes
				'filter'=>array(),
				//Additional data passed to view.
				'data'=>array(),
				//CDbCriteria array to filter nodetype
				'listFilter'=>array(),
				//Set the page path to used in menu and breadcrumb,
				'path'=>array('title'=>array('router','param'=>1)),
				//load theme css
				'themeCss'=>array('someCss.css'),				
			),
			//node list page selected by catalog			
			'catalog'=>array(
				'class'=>'WfNodeCatalogAction',
				//Set the view.Will use actionID as view if not set.
				'view'=>'node',
				//Set the layout,
				'layout'=>'main',
				//Param Type,0:id and keyword,1:id only,2:keyword only
				'paramType'=>1,
				//Filter node by type
				'type'=>1,
				//Set the id.Will use id param from get If not set this,
				'staticId'=1,
				//Only show view in these catalog ids.
				'idList'=>array(1,2),				
				//CDbCriteria array to filter node
				'filter'=>array(),
				//Additional data passed to view.
				'data'=>array(),
				//CDbCriteria array to filter nodecatalog
				'listFilter'=>array(),
				//Set the page path to used in menu and breadcrumb,
				'path'=>array('title'=>array('router','param'=>1)),
				//load theme css
				'themeCss'=>array('someCss.css'),				
			),
                        'error'=>array(
                            //'class'=>'wfbase.node.WfErrorAction',
                        ),
                        'search'=>array(
                            //'class'=>'WfNodeSimpleSearchAction',
                        ),                      			
		);
*/