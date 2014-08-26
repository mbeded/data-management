<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_group_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->blood_group_id),array('view','id'=>$data->blood_group_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_group_name')); ?>:</b>
	<?php echo CHtml::encode($data->blood_group_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_group_type')); ?>:</b>
	<?php echo CHtml::encode($data->blood_group_type); ?>
	<br />


</div>