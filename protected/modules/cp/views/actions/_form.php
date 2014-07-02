<?php
/* @var $this ActionController */
/* @var $model Action */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'action-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>


	<div class="form-line">
		<div class="row-fluid">
			<div class="span3">
				<?php echo $form->labelEx($model, 'name'); ?>
			</div>
			<div class="span9">
				<?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
			</div>
		</div>
	</div>
	<div class="form-line">
		<div class="row-fluid">
			<div class="span3">
				<?php echo $form->labelEx($model, 'desc'); ?>
			</div>
			<div class="span9">
				<?php echo $form->textField($model, 'desc', array('size' => 60, 'maxlength' => 255)); ?>
			</div>
		</div>
	</div>


	<div class="form-line">
		<div class="row-fluid">
			<div class="span12">
				<div class="floatR">
					<button type="reset" class="btn btn-danger"><?=Yii::t('app', 'cancel')?></button>
					<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app', 'add') : Yii::t('app', 'save'), array('class' => 'btn btn-success')); ?>
				</div>
			</div>
		</div>
	</div>

<?php $this->endWidget(); ?>
