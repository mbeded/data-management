<?php
    $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'nominal-roll-form',
        'enableAjaxValidation'=>false,
    ));
    $sewadarName = CHtml::listData($NominalRollUserList, 'sewadar_id', 'sewadars.sewadar_name');
?>
    <table cellpadding ='12'>
        <tr>
            <td>
                <?php echo $form->textFieldRow($model,'serial_no',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'centre_name',array('class'=>'span2','maxlength'=>225)); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'dated',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'area_name',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'zone_name',array('class'=>'span2','maxlength'=>10)); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->textFieldRow($model,'help_line_no',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'sewa_type',array('class'=>'span2','maxlength'=>225)); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'driver_vehicle_no',array('class'=>'span2','maxlength'=>225)); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'driver_vehicle_type',array('class'=>'span2','maxlength'=>225)); ?>
            </td>
            <td>
                <?php $model->drive_name = 'Balwinder Singh'; echo $form->textFieldRow($model,'drive_name',array('class'=>'span2','maxlength'=>225)); ?>
            </td>
        </tr>
        <tr>

            <td>
                <?php echo $form->textFieldRow($model,'drive_mobile_no',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'period_from');
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
                <?php echo $form->labelEx($model,'period_to');
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
                <?php echo $form->textFieldRow($model,'destination',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php $area = CHtml::ListData(basic::getAreas(),'area_id','area_name'); echo $form->dropDownListRow($model,'area_id',$area,array('empty'=>'Select An Area', 'class'=>'span2')); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php $centre = CHtml::ListData(basic::getSatsangCentre(),'centre_id','centre_name'); echo $form->dropDownListRow($model,'centre_id',$centre, array('empty' => 'Select a Centre', 'class' => 'span2')); ?>
            </td>
            <td>
                <?php echo $form->dropDownListRow($model,'sewadar_id',$sewadarName, array('class'=>'span2', 'empty' =>'Select Jathedar')); ?>
            </td>
            <!--<td>
                <?php echo $form->textFieldRow($model,'incharge_badge_no',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'incharge_mobile_no',array('class'=>'span2')); ?>
            </td>-->
            <td>
                <?php echo $form->textFieldRow($model,'secretary_president_mobile_no',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'department_name',array('class'=>'span2','maxlength'=>225)); ?>
            </td>
            <td>
                <?php echo $form->dropDownListRow($model,'sewa_sent',array('PROGRESS'=>'Creating Process' ,'YES'=>'Yes','NO'=>'No'),array('class'=>'span2', 'empty' => 'Select Sewa Status')); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->textFieldRow($model,'sewa_not_sent_reason',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'total_male',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'total_female',array('class'=>'span2')); ?>
            </td>
            <td>
                <?php echo $form->textFieldRow($model,'total_sewadar',array('class'=>'span2')); ?>
            </td>
            <td>
            <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType'=>'submit',
                    'type'=>'primary',
                    'label'=>$model->isNewRecord ? 'Create' : 'Save',
                    'htmlOptions'=>array(
                        'class'=>'mt13',
                    ),
                ));
                echo CHtml::link('Print',array('printSewa','id'=>$model->nominal_roll_id),array('class' => 'btn btn-primary mt13', 'style' => 'margin-left:12px')); ?>
            </td>
        </tr>
    </table>
<?php $this->endWidget(); ?>
