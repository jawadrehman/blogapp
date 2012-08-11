<div class="form">

	<?php /** @var BootActiveForm $form */
	$form = $this -> beginWidget('bootstrap.widgets.BootActiveForm', array('id' => 'posts-form', 'htmlOptions' => array('class' => 'well'), ));
	?>
<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form -> errorSummary($model); ?>

	<div class="row">
		<?php echo $form -> labelEx($model, 'title'); ?>
		<?php echo $form -> textField($model, 'title', array('size' => 30, 'maxlength' => 30)); ?>
		<?php echo $form -> error($model, 'title'); ?>
	</div>

	<div class="row">
		<?php echo $form -> labelEx($model, 'content'); ?>
		<?php echo $form -> textField($model, 'content', array('size' => 60, 'maxlength' => 1000)); ?>
		<?php echo $form -> error($model, 'content'); ?>
	</div>
	
	

	<div class="row buttons">
		<?php $this -> widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'icon' => 'ok', 'label' => 'Submit')); ?>
	</div>
	<?php $this -> endWidget(); ?>
</div><!-- form -->