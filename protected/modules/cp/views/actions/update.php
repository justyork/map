<?php
/* @var $this ActionController */
/* @var $model Action */


$this->breadcrumbs=array(
	Yii::t('breadcrumbs', 'actions')=>array('index'),
	Yii::t('breadcrumbs', 'edit action') . $model->name
);

$this->altMenu=array(
	array('label'=>'Create Action', 'url'=>array('create')),
	array('label'=>'Manage Actions', 'url'=>array('index')),
);
?>

<a href="/cp/<?=Yii::app()->controller->id?>" class="btn">&larr; <?=Yii::t('app', 'back')?></a>
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
