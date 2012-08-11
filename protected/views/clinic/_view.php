<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Notes')); ?>:</b>
	<?php echo CHtml::encode($data->Notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photocount')); ?>:</b>
	<?php echo CHtml::encode($data->photocount); ?>
	<br />


</div>