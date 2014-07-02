<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs = array(
	Yii::t('breadcrumbs', 'groups')
);

$this->menu=array(
	array('label'=>'Create Groups', 'url'=>array('create')),
);

$columns = array(
	array(
		'name' => 'id',
		'htmlOptions' => array(
			'style' => 'width: 40px'
		),
	),
	'name',
);
$colTpl = '';
if(in_array(strtoupper(Yii::app()->controller->id)."_UPDATE", Access::Act()))
	$colTpl .= '{update} ';
if(in_array(strtoupper(Yii::app()->controller->id)."_DELETE", Access::Act()))
	$colTpl .= '{delete}';
if($colTpl != '')
	$butCol = array(
		'class'=>'CButtonColumn',
		'template' => $colTpl,
	);

if($butCol) $columns[] = $butCol;
?>



			<?if(in_array(strtoupper(Yii::app()->controller->id)."_CREATE", Access::Act())):?>
				<a class="btn btn-success" href="/cp/<?=Yii::app()->controller->id?>/create"><?= Yii::t('app', 'add') ?></a>
			<?endif?>
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id' => 'area-grid',
			'dataProvider' => $model->search(),
			'filter' => $model,
			'htmlOptions' => array(
			),
			'columns' => $columns
			)); ?>
