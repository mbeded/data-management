<div class="container">
<h2>Please Select Area Where You Want To Send Sewa</h2>

<div class="span-10">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'nominal-roll-form-register-area',
        'enableAjaxValidation'=>false,
    )); ?>
    <div class="form-data">
        <label for="SatsangCentre_centre_name" class="required">Area </label>
        <?php
            $area = CHtml::ListData(basic::getAreas(),'area_id','area_name');
            echo CHtml::dropDownList('area','',$area,array('empty'=>'Select An Area'));
        ?>
    </div>
    <div class="form-data">
        <label for="SatsangCentre_centre_name" class="required">Centre</label>
        <?php
            $centre = CHtml::ListData(basic::getSatsangCentre(),'centre_id','centre_name');
            echo CHtml::dropDownList('centre','',$centre, array('empty' => 'Select a Centre'));
        ?>
    </div>
    <div class="form-data submit">
        <?php
            echo CHtml::submitButton('submit');
        ?>
    </div>

<?php $this->endWidget(); ?>
</div>