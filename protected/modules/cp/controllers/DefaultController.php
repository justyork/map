<?php

class DefaultController extends CpController
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionLogin(){
		$this->layout = 'auth';
		if(!Yii::app()->user->isGuest)
			$this->redirect(array('default/index'));


		if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
			throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

		$model = new LoginForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form'){
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm'])){
			$model->attributes = $_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	public function actionError(){
		$this->layout = 'error';
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	public function actionPassword($pwd, $salt){
		$sk = Yii::app()->params['secretKey'];
		echo 'SK  - '.$sk.'<br />';
		echo 'PWD - '.$pwd.'<br />';
		echo 'SALT - '.$salt.'<br />';
		echo md5($salt.$pwd.$sk);
	}
}