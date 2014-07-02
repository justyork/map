<?php
/* @var $this GroupsController */
/* @var $model Groups */


$this->breadcrumbs=array(
	Yii::t('breadcrumbs', 'groups')=>array('index'),
	Yii::t('breadcrumbs', 'edit group') . $model->name

);

$this->menu=array(
	array('label'=>'Create Group', 'url'=>array('create')),
	array('label'=>'Manage Groups', 'url'=>array('index')),
);
?>
<a href="/cp/<?=Yii::app()->controller->id?>" class="btn">&larr; <?=Yii::t('app', 'back')?></a>
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
