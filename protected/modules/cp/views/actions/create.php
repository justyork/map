<?php
/* @var $this ActionController */
/* @var $model Action */

$this->breadcrumbs=array(
	Yii::t('breadcrumbs', 'action')=>array('index'),
	Yii::t('breadcrumbs', 'add new action'),
);

$this->altMenu=array(
	array('label'=>'Manage Action', 'url'=>array('index')),
);
?>

<a href="/admin/<?=Yii::app()->controller->id?>" class="btn">&larr; <?=Yii::t('app', 'back')?></a>
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
