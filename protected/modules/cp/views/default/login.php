

<?php
$form = $this->beginWidget('CActiveForm', array(
	'id' => 'login-form',
	'htmlOptions' => array(
		'class' => 'form-signin',
	),
	'enableAjaxValidation' => true,
));
?>

<p class="text-muted text-center">
	Enter your username and password
</p>


			<?php echo $form->textField($model, 'username', array('placeholder' => 'Email', 'class' => 'form-control')); ?>
		 <?php echo $form->passwordField($model, 'password', array('placeholder' => 'Password', 'class' => 'form-control')); ?>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>



<?php if(isset($_POST['LoginForm'])): ?>
	<div class="errorSummary" style="border: 1px dashed #3d5ac4; padding: 10px; background: white; margin-top: 10px; color: red">
		<?php echo $form->error($model, 'username', array()); ?>
		<?php echo $form->error($model, 'password'); ?>
	</div>
<?endif?>
<?php $this->endWidget(); ?>