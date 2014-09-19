
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id' =>'search-sewadar',
    'method'=>'get',
)); ?>
<table>
    <tr>
        <td><?php echo $form->textFieldRow($model,'serial_no',array('class'=>'span1')); ?></td>
        <td><?php echo $form->textFieldRow($model,'badge_no',array('class'=>'span1')); ?></td>
        <td><?php echo $form->textFieldRow($model,'sewadar_name',array('class'=>'span2','maxlength'=>45)); ?></td>

    </tr>
    <tr>
        <td><?php $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'=>'submit',
                'type'=>'primary',
                'label'=>'Search',
            )); ?></td>
    </tr>
</table>

<?php $this->endWidget(); ?>
