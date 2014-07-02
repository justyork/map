<?php

class ActionsController extends CpController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('deny',
				'actions' => array('index'),
				'users' => array('@'),
				'expression' => '!in_array(strtoupper(Yii::app()->controller->id)."_VIEW", Access::Act())'
			),
			array('deny',
				'actions' => array('create'),
				'users' => array('@'),
				'expression' => '!in_array(strtoupper(Yii::app()->controller->id)."_CREATE", Access::Act())'
			),
			array('deny',
				'actions' => array('update'),
				'users' => array('@'),
				'expression' => '!in_array(strtoupper(Yii::app()->controller->id)."_UPDATE", Access::Act())'
			),
			array('deny',
				'actions' => array('delete'),
				'users' => array('@'),
				'expression' => '!in_array(strtoupper(Yii::app()->controller->id)."_DELETE", Access::Act())'
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'users' => array('@'),
				'expression' => 'in_array("ADMIN_PANEL", Yii::app()->user->actions)'
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Actions;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Actions']))
		{
			$model->attributes=$_POST['Actions'];
			if($model->save())
				$this->redirect(array('update','id'=>$model->id));
		}


		$this->pageTitle = "Создать доступ";

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Actions']))
		{
			$model->attributes=$_POST['Actions'];
			if($model->save())
				$this->redirect(array('update','id'=>$model->id));
		}
		$this->pageTitle = "Обновить доступ - ".$model->name;
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Actions('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Actions']))
			$model->attributes=$_GET['Actions'];



		$this->pageTitle = "Управление доступами";
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Action the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Actions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Action $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='actions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
