<div class="row-fluid">
	<?php if ( $isShowHeader ): ?>
		<?php
		$blocksGroupModel = BlocksGroup::model()->findByPk( $model->group );
		?>
		<h1 class="ui-widget-header ui-corner-all">Просмотр содержимого списка: "<?=$blocksGroupModel->name ?>"</h1>
		<?php echo $this->renderPartial( '_value_form', array( 'model' => $model ) ); ?>
	<?php endif ?>

	<?php
	$this->widget( 'bootstrap.widgets.TbExtendedGridView', array(
		'dataProvider' => $dataProvider,
		'id' => 'BlocksGroup',
		'type' => 'bordered condensed',
		'template' => "{items} {pager}",
		'pager' => array(
			'class'=>'bootstrap.widgets.TbPager',
			'id' => 'pagerVender',
		),
		// TODO:: Ошибка ядра фреймворка если внутри грида есть подгружаймый грид с pager:
		// - возникает перезатирание основного грида при подгрузки данных ( 2 ajax запроса )
		// - если в подгридах изменить название класса на уникальное, то стили bootstrap.css сбиваються у пйджера
		//'pagerCssClass' => 'nopager',
		// <--
		'responsiveTable' => true,
		'sortableRows' => false,
		'selectableCells' => false,
		'columns' => array(
			'id',
			array(
				'name' => 'name',
			),
			array(
				'header' => 'Действие',
				'class' => 'bootstrap.widgets.TbButtonColumn',
				'template' => '{update} {delete}',
				'updateButtonUrl' => 'Yii::app()->controller->createUrl("update",array("id"=>$data->primaryKey))',
				'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete",array("id"=>$data->primaryKey))',
			),
		),
	) );
	?>
</div>