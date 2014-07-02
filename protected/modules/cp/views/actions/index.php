<?php
/* @var $this ActionsController */
/* @var $model Actions */

$this->breadcrumbs = array(
	Yii::t('breadcrumbs', 'actions')
);


$columns = array(
	array(
		'name' => 'id',
		'htmlOptions' => array(
			'style' => 'width: 40px'
		),
	),
	'name',
	'desc',
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
			'id'=>'actions-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'htmlOptions' => array(
			),
			'columns'=> $columns,
		)); ?>
