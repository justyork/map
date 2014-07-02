<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->altMenu=array(
	array('label'=>'Manage Users', 'url'=>array('index')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>