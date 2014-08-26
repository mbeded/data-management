<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nominal_roll_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'serial_no',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'centre_name',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'dated',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'area_name',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'zone_name',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textAreaRow($model,'help_line_no',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'driver_vehicle_no',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'driver_vehicle_type',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'drive_name',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'drive_mobile_no',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'period_from',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'period_to',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'destination',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'area_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'centre_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sewadar_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'incharge_badge_no',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'incharge_mobile_no',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'secretary_president_mobile_no',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sewa_type',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'total_sewadar',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total_male',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total_female',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'department_name',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'created_on',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
