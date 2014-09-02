<?php
$this->breadcrumbs=array(
	'Blood Groups'=>array('index'),
	$model->blood_group_id,
);

$this->menu=array(
	array('label'=>'List BloodGroup','url'=>array('index')),
	array('label'=>'Create BloodGroup','url'=>array('create')),
	array('label'=>'Update BloodGroup','url'=>array('update','id'=>$model->blood_group_id)),
	array('label'=>'Delete BloodGroup','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->blood_group_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BloodGroup','url'=>array('admin')),
);
?>

<h1>View BloodGroup #<?php echo $model->blood_group_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'blood_group_id',
		'blood_group_name',
		'blood_group_type',
	),
)); ?>
