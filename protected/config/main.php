<?php
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'华夏润石',
	'defaultController'=>'site',
	'layout'=>'main',
	'timeZone' => 'Asia/Shanghai',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		'admin'=>array(
			//'modules'=>array(),
		),
	),

	// application components
	'components'=>array(
		//用户管理
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>array('site'),
		),
		// 访问路径管理 uncomment the following to enable URLs in path-format 类似 /index.php/product/12/
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>true,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		//数据库
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=hxrs',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'hxrs@7caibaina',
			'charset' => 'utf8',
			'tablePrefix' =>'hxrs_',
		),
		//错误处理
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		//日志处理
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	//应用参数
	'params'=>array(

	),
);