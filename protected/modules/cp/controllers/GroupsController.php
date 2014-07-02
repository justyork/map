<?php

class GroupsController extends CpController
{
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
		$model=new Groups;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Groups']))
		{
			$model->attributes=$_POST['Groups'];
			$model->_actions = $_POST['actions'];
			if($model->save())
				$this->redirect(array('update','id'=>$model->id));
		}

		$this->pageTitle = "Добавить группу";
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

		if(isset($_POST['Groups']))
		{
			$model->attributes = $_POST['Groups'];
			$model->_actions = $_POST['actions'];

			ActionGroup::model()->deleteAll("group_id = $model->id");


			if(!empty($_POST['actions']))
				foreach($_POST['actions'] as $key => $item){
					$ag = new ActionGroup();

					$ag->action_id = $item;
					$ag->group_id = $model->id;

					$ag->save();
				}

			if($model->save()){
				$this->redirect(array('update','id'=>$model->id));
			}
		}

		$this->pageTitle = "Редактировать группу - ".$model->name;
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
		$this->pageTitle = "Управление группами";
		$model=new Groups('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Groups']))
			$model->attributes=$_GET['Groups'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Groups the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Groups::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Groups $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='groups-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
