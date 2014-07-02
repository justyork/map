<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->altMenu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
);

?>

<h1>Manage Users</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'surname',
		'email',
		'city',
		'group_id',
		/*
		'status',
		'date',
		'country',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
