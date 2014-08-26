<?php
$this->breadcrumbs=array(
	'Nominal Rolls'=>array('index'),
	$model->nominal_roll_id=>array('view','id'=>$model->nominal_roll_id),
	'Update',
);

echo $this->renderPartial('_update',array('model'=>$model));

if(count($ListData)>0) { ?>

    <div class="black_overlay"></div>
    <div class="popup_wrapper p30">
    <h3>Search Result</h3>
    <table class="table">
    <tr>
        <th></th>
        <th>Serial No</th>
        <th>Badge No.</th>
        <th>Name</th>
        <th>Father/dauther/son/wife Name</th>
        <th>Gender</th>
        <th></th>
    </tr>
    <?php
        foreach($ListData as $list) { ?>
            <tr>
                <td><?php echo ($list->sewardar_picture!="") ? CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/".$list->sewardar_picture, $list->sewardar_picture,array("width"=>100,"height"=>100)) : CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/no-pic.png","no image uploaded",array("width"=>100,"height"=>100)); ?></td>
                <td><?php echo $list->serial_no; ?></td>
                <td><?php echo $list->badge_no; ?></td>
                <td><?php echo $list->sewadar_name; ?></td>
                <td><?php echo $list->father_dauther_son_wife_of; ?></td>
                <td><?php echo $list->gender; ?></td>
                <td><?php echo CHtml::link('+ Add',array('addSingleData','nominal_roll_id'=>$model->nominal_roll_id,'user_id'=>$list->sewadar_id),array('class' => 'btn'))?></td>
            </tr>
        <?php
        }
    ?>
    </table>
</div>
<?php
}

$this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>

    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Search for sewadar</h4>
    </div>

    <div class="modal-body">
        <p><?php echo $this->renderPartial('_sewadar_search', array('model' => $sewadarModel)); ?></p>
    </div>

<?php
$this->endWidget();
?>
<div class="container-fluid">
<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Add New Sewadar',
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
        'class'=>'span2',
    ),
));
echo CHtml::link('Print',array('printSewa','id'=>$model->nominal_roll_id),array('class' => 'btn btn-primary span2'))
?>
</div>


<h2>Sewadar List</h2>
<?php
if (count($NominalRollUserList)>0) { ?>
    <table class="table table-bordered table-condensed table-striped">
        <thead>
            <tr>
                <th></th>
                <th>Serial No</th>
                <th>Name of Sewadar/Sewadarni</th>
                <th>Father/Husband Name</th>
                <th>Sex</th>
                <th>Age</th>
                <th>address</th>
                <th>Contact No.</th>
                <th></th>
            </tr>
        </thead>

<?php
    foreach($NominalRollUserList as $list) {
        $i= 1;
        $data = Sewadars::model()->findByPk($list->sewadar_id);
        $datetime1 = new DateTime($data->date_of_birth);
        $datetime2 = new DateTime(date('Y-m-d'));
        $interval = $datetime1->diff($datetime2);
        $age =  $interval->format('%y');
?>
        <tr>
            <td><?php echo ($data->sewardar_picture!="") ? CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/".$data->sewardar_picture, $data->sewardar_picture,array("width"=>100,"height"=>100)) : CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/no-pic.png","no image uploaded",array("width"=>100,"height"=>100)); ?></td>
            <td><?php echo $i; ?></td>
            <td><?php echo $data->sewadar_name; ?></td>
            <td><?php echo $data->father_dauther_son_wife_of; ?></td>
            <td><?php echo $data->gender; ?></td>
            <td><?php echo $age; ?></td>
            <td><?php echo $data->address1.' '.$data->address2.' '. $data->address3; ?></td>
            <td><?php echo $data->mobile_primary; ?></td>
            <td><?php echo CHtml::link('- Remove',array('removeSingleData','id'=>$list->nominal_roll_detail_id),array('class' => 'btn'))?></td>
        </tr>
    <?php $i++; } ?>
</table>
<?php } ?>