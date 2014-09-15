<?php

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sewadars-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype'=>'multipart/form-data')
)); ?>

	<?php //echo $form->errorSummary($model); ?>
<table cellpadding="12">
    <tr>
        <td><?php echo $form->textFieldRow($model,'serial_no',array('class'=>'span3')); ?></td>
        <td><?php echo $form->textFieldRow($model,'badge_no',array('class'=>'span3')); ?></td>
        <td><?php echo $form->textFieldRow($model,'old_badge_no',array('class'=>'span3')); ?></td>
        <td><?php echo $form->dropDownListRow($model,'blood_group',CHtml::listData($bloodGroup, 'blood_group_id', 'fullName'), array('class'=>'span3','empty'=>'Select Blood Group')); ?></td>
    </tr>
    <tr>
        <td><?php echo $form->textFieldRow($model,'sewadar_name',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php echo $form->textFieldRow($model,'father_dauther_son_wife_of',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php echo $form->textFieldRow($model,'relation',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php echo $form->dropDownListRow($model,'gender',array('MALE'=>'Male', 'FEMALE' => 'Female'), array('class'=>'span3','maxlength'=>6)); ?></td>
    </tr>

    <tr>
        <td><?php echo $form->dropDownListRow($model,'section',CHtml::listData($sections, 'section_id', 'section_name'), array('class'=>'span3','empty'=>'Select Old Sewa Section')); ?></td>
        <td><?php echo $form->dropDownListRow($model,'old_section',CHtml::listData($sections, 'section_name', 'section_name'), array('class'=>'span3','empty'=>'Select Sewa Section')); ?></td>
        <td><?php echo $form->textFieldRow($model,'mobile_primary',array('class'=>'span3', 'maxlength' => '10')); ?></td>
        <td><?php echo $form->textFieldRow($model,'mobile_secondary',array('class'=>'span3', 'maxlength' => '10')); ?></td>
    </tr>

    <tr>
        <td><?php echo $form->labelEx($model,'date_of_birth'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'=> $model,
            'attribute'=>'date_of_birth',
            // additional javascript options for the date picker plugin
            'options'=>array(
                //'showAnim'=>'fold',
                'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
            ),
            'htmlOptions'=>array(
                'class'=>'span3'
            ),
        ));
        ?>
        </td>
        <td><?php echo $form->dropDownListRow($model,'age',$age, array('class'=>'span3')); ?></td>
        <td><?php echo $form->labelEx($model,'date_of_initiation'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'model'=> $model,
                'attribute'=>'date_of_initiation',
                // additional javascript options for the date picker plugin
                'options'=>array(
                    //'showAnim'=>'fold',
                    'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
                ),
                'htmlOptions'=>array(
                    'class'=>'span3'
                ),
            ));
            ?></td>
        <td>
            <?php echo $form->dropDownListRow($model, 'is_technical',array(1 => 'Yes', 0 => 'No'),array('class' => 'span3')); ?>
        </td>
    </tr>
    <tr>
        <td><?php echo $form->textFieldRow($model,'address1',array('rows'=>6, 'cols'=>50, 'class'=>'span3')); ?></td>
        <td><?php echo $form->textFieldRow($model,'address2',array('rows'=>6, 'cols'=>50, 'class'=>'span3')); ?></td>
        <td><?php echo $form->textFieldRow($model,'address3',array('rows'=>6, 'cols'=>50, 'class'=>'span3')); ?></td>
        <td><?php echo $form->textFieldRow($model,'state',array('rows'=>6, 'cols'=>50, 'class'=>'span3')); ?></td>
    </tr>
    <tr>
        <td><?php echo $form->textFieldRow($model,'district',array('rows'=>6, 'cols'=>50, 'class'=>'span3')); ?></td>
        <td><?php echo $form->textFieldRow($model,'qualification',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php echo $form->textFieldRow($model,'profession',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php echo $form->textFieldRow($model,'specialization',array('class'=>'span3','maxlength'=>45)); ?></td>
    </tr>
    </table>

<?php if(!$model->isNewRecord && $model->is_technical==1) {
    $class = '';
} else {
    $class = 'hidden';
}
?>
    <table cellpadding="12" class="is_technical <?php echo $class; ?>">

    <tr><td colspan="4"><hr/><br/><h3>Technical Details</h3></td></tr>
    <tr>
        <td><?php echo $form->dropDownListRow($technical, 'job_type',array(1 => 'Govt Job', 2 => 'PVT Job', 3 => 'Business'),array('class' => 'span3')); ?></td>
        <td><?php echo $form->textFieldRow($technical,'department_company',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php echo $form->textFieldRow($technical,'designation',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php echo $form->textFieldRow($technical,'sewa_department',array('class'=>'span3','maxlength'=>45)); ?><br/><small> Whether Engaged in sewa at any center, if so state </small></td>
    </tr>
    <tr>
        <td><?php echo $form->labelEx($model,'period_from'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'model'=> $technical,
                'attribute'=>'period_from',
                // additional javascript options for the date picker plugin
                'options'=>array(
                    //'showAnim'=>'fold',
                    'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
                ),
                'htmlOptions'=>array(
                    'class'=>'span3'
                ),
            ));
            ?></td>
        <td><?php echo $form->labelEx($model,'period_to'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'model'=> $technical,
                'attribute'=>'period_to',
                // additional javascript options for the date picker plugin
                'options'=>array(
                    //'showAnim'=>'fold',
                    'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
                ),
                'htmlOptions'=>array(
                    'class'=>'span3'
                ),
            ));
            ?></td>
        <td><?php echo $form->textFieldRow($technical,'badget_no',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php echo $form->textFieldRow($technical,'center',array('class'=>'span3','maxlength'=>45)); ?></td>
    </tr>
    <tr>
        <td><?php echo $form->dropDownListRow($technical, 'merital_status',array(1 => 'Married', 2 => 'Unmarried', 3 => 'Others'),array('class' => 'span3')); ?></td>
        <td><?php echo $form->textFieldRow($technical,'email_id',array('class'=>'span3','maxlength'=>45)); ?></td>
    </tr>
    </table>
<table cellpadding="12">

<tr>
        <td><?php echo $form->fileFieldRow($model,'sewardar_picture',array('class'=>'span3','maxlength'=>45)); ?></td>
        <td><?php $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'=>'submit',
                'type'=>'primary',
                'label'=>$model->isNewRecord ? 'Create' : 'Save',
            )); ?></td>
    </tr>
</table>
	</div>
<?php $this->endWidget(); ?>
<script>
    $(document).ready(function(){
        $('#Sewadars_is_technical').on('change',function(){
            if (this.value == 1) {
                $('.is_technical').removeClass('hidden');
            } else if (this.value == 0) {
                $('.is_technical').addClass('hidden');
            }
        })
    });
</script>