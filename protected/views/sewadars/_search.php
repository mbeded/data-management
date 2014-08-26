<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'sewadar_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'badge_no',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'old_badge_no',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sewadar_name',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'father_dauther_son_wife_of',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'relation',array('class'=>'span5','maxlength'=>45)); ?>

    <?php echo $form->dropDownListRow($model,'blood_group',CHtml::listData($bloodGroup, 'blood_group_id', 'fullName'), array('class'=>'span5','empty'=>'Select Blood Group')); ?>

    <?php echo $form->dropDownListRow($model,'section',CHtml::listData($sections, 'section_id', 'section_name'), array('class'=>'span5','empty'=>'Select Old Sewa Section')); ?>

    <?php echo $form->dropDownListRow($model,'old_section',CHtml::listData($sections, 'section_name', 'section_name'), array('class'=>'span5','empty'=>'Select Sewa Section')); ?>

	<?php echo $form->textFieldRow($model,'mobile_primary',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'mobile_secondary',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'gender',array('MALE'=>'Male', 'FEMALE' => 'Female'), array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'date_of_birth',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'age',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'address1',array('class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'address2',array('class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'address3',array('class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'district',array('class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'state',array('class'=>'span8')); ?>


	<?php echo $form->textFieldRow($model,'date_of_initiation',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'qualification',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'profession',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'specialization',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'sewardar_picture',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'date_of_creation',array('class'=>'span5')); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
