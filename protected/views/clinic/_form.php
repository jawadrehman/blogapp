<div class="form">

	<?php
	
	$form = $this -> beginWidget('CActiveForm', array('id' => 'clinic-form', 'enableAjaxValidation' => false ));
	?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form -> errorSummary($model); ?>

	<div class="row">
		<?php echo $form -> labelEx($model, 'Name'); ?>
		<?php echo $form -> textField($model, 'Name', array('size' => 40, 'maxlength' => 40)); ?>
		<?php echo $form -> error($model, 'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form -> labelEx($model, 'Notes'); ?>
		<?php echo $form -> textField($model, 'Notes', array('size' => 60, 'maxlength' => 10000)); ?>
		<?php echo $form -> error($model, 'Notes'); 
		
		//print_r() $model -> attributes;
		?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this -> endWidget(); ?>
</div><!-- form -->