<?php
$this->breadcrumbs=array(
	'Nominal Rolls'=>array('index'),
	$model->nominal_roll_id,
);

$this->menu=array(
	array('label'=>'List NominalRoll','url'=>array('index')),
	array('label'=>'Create NominalRoll','url'=>array('create')),
	array('label'=>'Update NominalRoll','url'=>array('update','id'=>$model->nominal_roll_id)),
	array('label'=>'Delete NominalRoll','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nominal_roll_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NominalRoll','url'=>array('admin')),
);
?>

<h1>View NominalRoll #<?php echo $model->nominal_roll_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nominal_roll_id',
		'serial_no',
		'centre_name',
		'dated',
		'area_name',
		'zone_name',
		'help_line_no',
		'driver_vehicle_no',
		'driver_vehicle_type',
		'drive_name',
		'drive_mobile_no',
		'period_from',
		'period_to',
		'destination',
		'area_id',
		'centre_id',
		'sewadar_id',
		'incharge_badge_no',
		'incharge_mobile_no',
		'secretary_president_mobile_no',
		'sewa_type',
		'total_sewadar',
		'total_male',
		'total_female',
		'department_name',
		'created_on',
	),
)); ?>
