<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';


if ( $_SERVER['REQUEST_URI'] ) {
	if ( strpos( $_SERVER['REQUEST_URI'], 'profile' ) )
		$config = dirname( __FILE__ ) . '/protected/config/profile.php';
	elseif(strpos( $_SERVER['REQUEST_URI'], 'cp' ))
		$config = dirname( __FILE__ ) . '/protected/config/cp.php';
	else
		$config = dirname( __FILE__ ) . '/protected/config/main.php';
}

// remove the following line when in production mode
 defined('YII_DEBUG') or define('YII_DEBUG',true);
require_once($yii);
Yii::createWebApplication($config)->run();
