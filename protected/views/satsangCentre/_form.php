<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'satsang-centre-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'centre_name',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'centre_secretary_name',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'centre_secretary_mobile_number',array('class'=>'span5','maxlength'=>45)); ?>

	<?php //echo $form->textFieldRow($model,'centre_code',array('class'=>'span5','maxlength'=>45)); ?>

    <?php echo $form->dropDownListRow($model,'area_id', CHtml::listData(basic::getAreas(),'area_id','area_name')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Save' : 'Update',
		)); ?>
        <input type="button" name="cancel" class="btn btn-primary" value="Cancel" onclick="javascript:window.history.back()">
	</div>

<?php $this->endWidget(); ?>
