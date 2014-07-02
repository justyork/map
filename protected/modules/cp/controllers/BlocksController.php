<?php

class BlocksController extends Controller {

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
	 * Lists all models.
	 */
	public function actionIndex() {
		$this->pageTitle = 'Blocks';

		$dataProvider = new CActiveDataProvider( 'BlocksGroup' );

		$blocksGroupNewModel = new BlocksGroup();
		if(isset($_POST['BlocksGroup'])){
			$blocksGroupNewModel->name = $_POST['BlocksGroup']['name'];

			if($blocksGroupNewModel->save())
				$this->redirect('/admin/blocks');
		}

		$blocksGroupModel = BlocksGroup::model()->findAll();


        $this->render( 'index', array(
	        'dataProvider' => $dataProvider,
	        'blocksGroupNewModel' => $blocksGroupNewModel,
	        'blocksGroupModel' => $blocksGroupModel
	       ));
	}


	public function actionView($id){
		$this->pageTitle ='Просмотр содержимого списка';
		$model = new Blocks();
		$model->group = $id;

		$criteria = new CDbCriteria;
		$criteria->compare( '`group`', $id ) ;
		$dataProvider = new CActiveDataProvider( 'Blocks', array( 'criteria' => $criteria ) );

		if( Yii::app()->request->isAjaxRequest )
			$this->renderPartial( 'view', array( 'isShowHeader' => false,'model' => $model,'dataProvider' => $dataProvider ), false, true );
		else
			$this->render( 'view', array( 'isShowHeader' => true, 'model' => $model, 'dataProvider' => $dataProvider, ) );
	}

	public function actionUpdate($id) {
		$this->pageTitle ='Редактировать блок';

		$model = Blocks::model()->findByPk($id);

		if(isset($_POST['Blocks'])){
			$model->attributes = $_POST['Blocks'];

			$file = CUploadedFile::getInstance($model,'img');
			if($file){
				$dir = $_SERVER['DOCUMENT_ROOT'].'/upload/blocks/';
				$name = JL::Random().'.'.$file->extensionName;
				if(!is_dir($dir)) mkdir($dir, 0777, true);

				@unlink($_SERVER['DOCUMENT_ROOT'].'/upload/blocks/'.$model->img);

				$file->saveAs($dir.$name);
				$model->img = $name;
			}

			if($model->save()){
				// перенаправляем на страницу, где выводим сообщение об
				// успешной загрузке
				$this->redirect('/admin/blocks');
			}


		}


		$this->render( 'form', array( 'model' => $model ) );
	}

	public function actionCreate($id) {
		$this->pageTitle ='Добавить блок';

		$model = new Blocks();

		if(isset($_POST['Blocks'])){
			$model->attributes = $_POST['Blocks'];
			$model->group = $id;
			$file = CUploadedFile::getInstance($model,'img');
			if($file){
				$dir = $_SERVER['DOCUMENT_ROOT'].'/upload/blocks/';
				$name = JL::Random().'.'.$file->extensionName;
				if(!is_dir($dir)) mkdir($dir, 0777, true);

				$file->saveAs($dir.$name);
				$model->img = $name;
			}
			if($model->save()){ 
				$this->redirect('/admin/blocks');
			}
		}
		$this->render( 'form', array( 'model' => $model ) );
	}

	public function actionDelete($id){
		Blocks::model()->findByPk($id)->delete();
		
		$this->redirect('/admin/blocks');
		
	}
	
}
