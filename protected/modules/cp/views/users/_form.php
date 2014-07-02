<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'htmlOptions' => array(
		'class' => 'form-horizontal'
	),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'name', array('class' => 'control-label col-lg-4')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'name',array('class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'name'); ?>
	</div><!-- /.form-group -->

	<div class="form-group">
		<?php echo $form->labelEx($model,'surname', array('class' => 'control-label col-lg-4')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'surname',array('class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'surname'); ?>
	</div><!-- /.form-group -->

	<div class="form-group">
		<?php echo $form->labelEx($model,'email', array('class' => 'control-label col-lg-4')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'email',array('class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'email'); ?>
	</div><!-- /.form-group -->

	<div class="form-group">
		<?php echo $form->labelEx($model,'country', array('class' => 'control-label col-lg-4')); ?>
		<div class="col-lg-8">
			<?php echo $form->dropDownList($model,'country', array(),array('class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'country'); ?>
	</div><!-- /.form-group -->

	<div class="form-group">
		<?php echo $form->labelEx($model,'city', array('class' => 'control-label col-lg-4')); ?>
		<div class="col-lg-8">
			<?php echo $form->dropDownList($model,'city', array(), array('class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'city'); ?>
	</div><!-- /.form-group --> 
	<div class="form-group">
		<?php echo $form->labelEx($model,'group_id', array('class' => 'control-label col-lg-4')); ?>
		<div class="col-lg-8">
			<?php echo $form->dropDownList($model,'group_id', array(),array('class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'group_id'); ?>
	</div><!-- /.form-group -->

	<div class="form-group">
		<?php echo $form->labelEx($model,'status', array('class' => 'control-label col-lg-4')); ?>
		<div class="col-lg-8 ">
			<div class="checkbox">
				<?php echo $form->checkBox($model,'status',array('class' => 'uniform')); ?>

			</div>
		</div>
		<?php echo $form->error($model,'status'); ?>
	</div><!-- /.form-group -->

	<div class="form-actions no-margin-bottom">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>"btn btn-success btn-rect", 'style' => 'float:right')); ?>
	</div>
<div class="clearfix"></div>

<?php $this->endWidget(); ?>
