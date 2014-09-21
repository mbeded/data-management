<?php
$this->breadcrumbs=array(
	'Nominal Rolls'=>array('index'),
	$model->nominal_roll_id=>array('view','id'=>$model->nominal_roll_id),
	'Update',
);
?>
<div id="_nominal_roll"  style="display: none;">
    <?php echo $this->renderPartial('_update',array('model'=>$model, 'NominalRollUserList' => $NominalRollUserList)); ?>
</div>
<?php echo CHtml::link('Show Detail', '#', array('class'=>'showDetail pull-right btn')); ?>
<div class="">

    <div class="span10">
        <h2>Search Sewadar</h2>

        <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
            'id' =>'search-sewadar',
            'action' => array('nominalRoll/update','id'=>$model->nominal_roll_id),
            'method'=>'get',
        ));
        ?>
        <table>
            <tr>
                <td>
                <label class="required" for="Sewadars_serial_no">Sewadar Name</label>
                    <?php
                $urlAfm = Yii::app()->createUrl('nominalRoll/Createlist',array('roll_id'=>$model->nominal_roll_id));
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'name'=>'searchbox',
                    'value'=>'',
                    'source'=>$urlAfm,
                    'options'=>array(
                        'showAnim'=>'fold',
                        'minLength'=>'2',
                        'select'=>'js:function( event, ui ) {
                        $("#searchbox").val( ui.item.name );
                        $("#selectedvalue").val( ui.item.value );
                        return false;
                  }',
                    ),
                    'htmlOptions'=>array(
                        'onfocus' => 'js: this.value = null; $("#searchbox").val(null); $("#selectedvalue").val(null);',
                        'class' => 'span4 search-query',
                        'placeholder' => "Search By Name...",

                    ),
                ));
                ?>
                    &nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <?php echo $form->textFieldRow($sewadarModel,'serial_no',array('class'=>'span2 search-query','placeholder' => "Enter Serial No.")); ?>
                    &nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <?php echo $form->textFieldRow($sewadarModel,'badge_no',array('class'=>'span2 search-query','placeholder' => "Enter Badget No.")); ?>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <?php $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType'=>'submit',
                        'type'=>'primary',
                        'label'=>'Search',
                            'htmlOptions' =>array('style'=>'margin-top:26px;','class'=>'search-query')
                    )

                    ); ?>
                </td>
                <td>

                    &nbsp;&nbsp;<?php echo CHtml::link('Reset',array('nominalRoll/update','id'=>$model->nominal_roll_id),array('class'=>'btn','style'=>'margin-top:26px;')); ?>
                </td>
            </tr>
        </table>
                <?php $this->endWidget();?>



       <?php if (count($ListData)>0) { ?>
           <h3>Search Result</h3>
            <div>
                <table class="table">
                    <tr>
                        <th>Serial No- Badge No.</th>
                        <th>Name</th>
                        <th>Father/Husband Name</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach($ListData as $list) { ?>
                        <tr>
                            <!--<td><?php //echo ($list->sewardar_picture!="") ? CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/".$list->sewardar_picture, $list->sewardar_picture,array("width"=>100,"height"=>100)) : CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/no-pic.png","no image uploaded",array("width"=>100,"height"=>100)); ?></td>-->
                            <td><?php echo $list->serial_no; ?> &nbsp; -<?php echo $list->badge_no; ?></td>
                            <td><?php echo $list->sewadar_name; ?></td>
                            <td><?php echo $list->father_dauther_son_wife_of; ?></td>
                            <td><?php echo CHtml::link('<i class="icon-ok"></i>',array('addSingleData','nominal_roll_id'=>$model->nominal_roll_id,'user_id'=>$list->sewadar_id))?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        <?php
        } elseif (isset($_GET['Sewadars']['sewadar_name'])){
           echo  '<h3>Search Result</h3>';
           echo "Sorry No Sewadar Found. Please Try search with Sewadar Name";
       }
        ?>
    </div>

    <div class="span10">

        <h2>Sewadar List</h2>
        <?php
        if (count($NominalRollUserList)>0) { ?>
            <table class="table table-bordered table-condensed table-striped">
                <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Fahter/Daughter/Son/Wife of</th>
                    <th>Address</th>
                    <th>Contact No.</th>
                </tr>
                </thead>
                <?php
                $i= 1;
                foreach($NominalRollUserList as $list) {
                    $data = $list->sewadars;
                    $age = '';
                    if (isset($data->date_of_birth)) {
                        $datetime1 = new DateTime($data->date_of_birth);
                        $datetime2 = new DateTime(date('Y-m-d'));
                        $interval = $datetime1->diff($datetime2);
                        $age = $interval->format('%y');
                    }

                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data->sewadar_name; ?></td>
                        <td><?php echo $data->father_dauther_son_wife_of; ?></td>
                        <td><?php echo $data->address1." ".$data->address2." ".$data->address3; ?></td>
                        <td><?php echo $data->mobile_primary; ?></td>
                        <td><?php echo CHtml::link('<i class="icon-trash"></i>',array('removeSingleData','id'=>$list->nominal_roll_detail_id),array('confirm' => 'Are you sure you want to delete `'.$data->sewadar_name.'` ,.  from sewa list')); ?></td>
                    </tr>
                    <?php $i++; } ?>
            </table>
        <?php
        } else {
            echo "Please Search User and Add Here";
        }
        ?>
    </div>
    <div class="clearfix"></div>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.showDetail').click(function(){
            $('#_nominal_roll').slideToggle();
            return false;
        })
    });
</script>
<?php
Yii::app()->clientScript->registerScript('autocomplete', "
    $('#searchbox').data('autocomplete')._renderItem = function( ul, item ) {
        return $('<li></li>')
        .data('item.autocomplete', item)
        .append('<a href=' + item.href + '>' + item.label + '</a>')
        .appendTo(ul);
    };",
    CClientScript::POS_READY
);
?>