<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'nominal-roll-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php //echo $form->errorSummary($model); ?>
<table cellpadding ='12'>
    <tr>
        <td><?php $model->serial_no = basic::getLatestNominalRollSerialNumber(); ?>
            <?php echo $form->textFieldRow($model,'serial_no',array('class'=>'span2')); ?>
        </td>
        <td>
            <?php $model->centre_name = 'Baltana'; ?>
            <?php echo $form->textFieldRow($model,'centre_name',array('class'=>'span2','maxlength'=>225)); ?>
        </td>
        <td>
            <?php $model->dated = date('y-m-d'); ?>
            <?php echo $form->textFieldRow($model,'dated',array('class'=>'span2')); ?>
        </td>
        <td>
            <?php $model->area_name = 'Mohali'; ?>
            <?php echo $form->textFieldRow($model,'area_name',array('class'=>'span2')); ?>
        </td>
        <td>
            <?php $model->zone_name = 'IB'; ?>
            <?php echo $form->textFieldRow($model,'zone_name',array('class'=>'span2','maxlength'=>10)); ?>
        </td>
    </tr>
    <tr>

        <td>
            <?php
            $model->help_line_no = '97794-57671, 97794-58991';
            echo $form->textFieldRow($model,'help_line_no',array('class'=>'span2')); ?>
        </td>
        <td>
            <?php
            $model->sewa_type = 'langer';
            echo $form->textFieldRow($model,'sewa_type',array('class'=>'span2','maxlength'=>225));
            ?>
        </td>
        <td>
            <?php
            $model->driver_vehicle_no = 'PB 65V3645';
            echo $form->textFieldRow($model,'driver_vehicle_no',array('class'=>'span2','maxlength'=>225)); ?>
        </td>

        <td>
            <?php
            $model->driver_vehicle_type = 'Bus';
            echo $form->textFieldRow($model,'driver_vehicle_type',array('class'=>'span2','maxlength'=>225)); ?>
        </td>
        <td>
            <?php
            $model->drive_name = 'Balwinder Singh';
            echo $form->textFieldRow($model,'drive_name',array('class'=>'span2','maxlength'=>225)); ?>
        </td>
    </tr>
    <tr>

        <td>
            <?php
            $model->drive_mobile_no = '9914879286';
            echo $form->textFieldRow($model,'drive_mobile_no',array('class'=>'span2')); ?>
        </td>
        <td>
            <?php echo $form->labelEx($model,'period_from'); ?>
            <?php
                $model->period_from = date('Y-m-d');

                $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'model'=> $model,
                'attribute'=>'period_from',
                'options'=>array(
                    'dateFormat'=>'yy-mm-dd',
                ),
                'htmlOptions'=>array(
                    'class'=>'span2'
                ),
            ));
            ?>
        </td>
        <td>
            <?php
            echo $form->labelEx($model,'period_to');
            $model->period_to = date('Y-m-d',strtotime('+3 days'));
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'model'=> $model,
                'attribute'=>'period_to',
                'options'=>array(
                    'dateFormat'=>'yy-mm-dd',
                ),
                'htmlOptions'=>array(
                    'class'=>'span2'
                ),
            ));
            ?>
        </td>

        <td>
            <?php
            $model->destination = 'Beas Langer Sewa';
            echo $form->textFieldRow($model,'destination',array('class'=>'span2')); ?>
        </td>
        <td>
            <?php
            $area = CHtml::ListData(basic::getAreas(),'area_id','area_name');
            echo $form->dropDownListRow($model,'area_id',$area,array('empty'=>'Select An Area', 'class'=>'span2'));
            ?>
        </td>
    </tr>
    <tr>

        <td>
        <?php
            $centre = CHtml::ListData(basic::getSatsangCentre(),'centre_id','centre_name');
            echo $form->dropDownListRow($model,'centre_id',$centre, array('empty' => 'Select a Centre', 'class' => 'span2'));
        ?>
        </td>
        <td>
            <?php echo $form->textFieldRow($model,'sewadar_id',array('class'=>'span2')); ?>
        </td>
        <td>
            <?php echo $form->textFieldRow($model,'incharge_badge_no',array('class'=>'span2')); ?>
        </td>
        <td>
            <?php echo $form->textFieldRow($model,'incharge_mobile_no',array('class'=>'span2')); ?>
        </td>

        <td>
            <?php
            $model->secretary_president_mobile_no = '98789-03823, 98558-24925';
            echo $form->textFieldRow($model,'secretary_president_mobile_no',array('class'=>'span2')); ?>
        </td>
    </tr>

    <tr>
        <td>
            <?php
            $model->department_name='langer';
            echo $form->textFieldRow($model,'department_name',array('class'=>'span2','maxlength'=>225)); ?>
        </td>
        <td>
            <?php echo $form->dropDownListRow($model,'sewa_sent',array('YES'=>'Yes','NO'=>'No'),array('class'=>'span2', 'empty' => 'Select Sewa Status')); ?>
        </td>
        <td>
            <?php echo $form->textFieldRow($model,'sewa_not_sent_reason',array('class'=>'span2')); ?>
        </td>

        <td>
            <?php echo $form->textFieldRow($model,'total_male',array('class'=>'span2','readonly'=>'readonly')); ?>
        </td>
        <td>
            <?php echo $form->textFieldRow($model,'total_female',array('class'=>'span2','readonly'=>'readonly')); ?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo $form->textFieldRow($model,'total_sewadar',array('class'=>'span2','readonly'=>'readonly')); ?>
        </td>
        <td>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
            'htmlOptions'=>array(
                'class'=>'span1 mt13',
            ),
		)); ?>
        </td>
    </tr>

</table>
<?php $this->endWidget(); ?>
