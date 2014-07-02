<?php
/**
 * Created by PhpStorm.
 * User: York
 * Date: 18.05.14
 * Time: 5:57
 */
?>


<div class="row-fluid">

	<a href="/admin/blocks">Назад</a>

	<div class="clear"></div>

	<?php
	$form = $this->beginWidget( 'bootstrap.widgets.TbActiveForm', array(
		'id' => 'files-form',
		'htmlOptions'=> array(
			'enctype' => 'multipart/form-data',
			'style' => 'float: left;'
		)
	)); ?>

	<?php echo $form->errorSummary( $model ); ?>

	<?= $form->labelEx( $model, 'name' ); ?>
	<?= $form->textField( $model, 'name' ); ?>

	<?= $form->ckEditorRow( $model, 'text', array(
			'class' => 'span4',
			'rows' => 6,
			'height' => '200',
			'options' => array(
				'toolbarCanCollapse' => true,
				'resize_enabled' => false,
				'toolbar' => 'Medium',
			),
			'labelOptions' => array( 'style' => 'display:none;' ),
		)
	);
	?>

	<?= $form->labelEx( $model, 'img' ); ?>
	<?= $form->fileField( $model, 'img' ); ?>
	<br />

	<input type="submit" value="Сохранить" />

	<?php $this->endWidget(); ?>

	<?if(!empty($model->img)):?>
		<div style="float: left;margin-left: 50px;border: 1px solid;">
			<img src="/upload/blocks/<?=$model->img?>" style=" width: 200px; " />
		</div>
	<?endif?>
	<div class="clear"></div>
</div>
