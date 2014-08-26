<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('centre_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->centre_id),array('view','id'=>$data->centre_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centre_name')); ?>:</b>
	<?php echo CHtml::encode($data->centre_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centre_secretary_name')); ?>:</b>
	<?php echo CHtml::encode($data->centre_secretary_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centre_secretary_mobile_number')); ?>:</b>
	<?php echo CHtml::encode($data->centre_secretary_mobile_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centre_code')); ?>:</b>
	<?php echo CHtml::encode($data->centre_code); ?>
	<br />


</div>