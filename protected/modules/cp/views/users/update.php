<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->altMenu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('index')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>