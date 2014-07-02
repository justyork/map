<?php
/**
 * Created by PhpStorm.
 * User: York
 * Date: 18.05.14
 * Time: 0:50
 */
?>

<div class="row-fluid">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'blocks-group-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

		<?php echo $form->errorSummary( $blocksGroupNewModel ); ?>

		<?= $form->labelEx( $blocksGroupNewModel, 'name' ); ?>
		<?= $form->textField( $blocksGroupNewModel, 'name' ); ?>


	<input type="submit" value="Добавить" />

	<?php $this->endWidget(); ?>
	<br />


	<table class="table table-striped">
		<thead>
		<tr>
			<th>Группа</th>
			<th>Управление</th>
		</tr>
		</thead>
		<tbody>
			<?foreach($blocksGroupModel as $group):?>
				<tr>
					<td><a href="#"><?=$group->name?></a> </td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
				</tr>
			<?endforeach?>
		</tbody>
	</table>
	<script>
		$(function(){

		});
	</script>


	<?php/*
	$this->widget( 'bootstrap.widgets.TbExtendedGridView', array(
		'dataProvider' => $dataProvider,
		'id' => 'lists',
		'type' => 'bordered condensed',
		'template' => "{items}",
		// TODO:: Ошибка ядра фреймворка если внутри грида есть подгружаймый грид с pager:
		// - возникает перезатирание основного грида при подгрузки данных ( 2 ajax запроса )
		// - если в подгридах изменить название класса на уникальное, то стили bootstrap.css сбиваються у пйджера
		'pagerCssClass' => 'nopager',
		// <--
		'responsiveTable' => true,
		'sortableRows' => false,
		'selectableCells' => false,
		'columns' => array(
			array(
				'class' => 'bootstrap.widgets.TbRelationalColumn',
				'url' => '/admin/blocks/view/',
				'name' => 'name',
				'headerHtmlOptions' => array( 'style' => 'text-align:left;' ),
				'htmlOptions' => array( 'style' => 'width: 60px;text-align:left;' )
			),
			array(
				'header' => 'Действие',
				'class' => 'bootstrap.widgets.TbButtonColumn',
				'template' => '{createvalue} ',
				'buttons' => array(
					'createvalue' => array(
						'label' => 'Добавить значение в список',
						'url' => 'Yii::app()->controller->createUrl("create", array("id"=>$data->primaryKey))',
						'imageUrl' => '/assets/admin/images/glyphicons_14_circle_plus.png',
					),
				),
			),
		),
	) );*/
	?>

	
</div>