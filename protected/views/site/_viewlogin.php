<h1>Login</h1>

<p>
	Please fill out the following form with your login credentials:
</p>

<div class="form">

	<?php /** @var BootActiveForm $form */
	$form = $this -> beginWidget('bootstrap.widgets.BootActiveForm', array('id' => 'login-form', 'htmlOptions' => array('class' => 'well'), ));
	?>
	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<div class="row">
		<?php echo $form -> labelEx($model, 'username'); ?>
		<?php echo $form -> textField($model, 'username'); ?>
		<?php echo $form -> error($model, 'username'); ?>
	</div>

	<div class="row">
		<?php echo $form -> labelEx($model, 'password'); ?>
		<?php echo $form -> passwordField($model, 'password'); ?>
		<?php echo $form -> error($model, 'password'); ?>
	</div>
	
	<?php $this -> widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'icon' => 'ok', 'label' => 'Submit')); ?>

	<?php $this -> endWidget(); ?>
</div><!-- form -->