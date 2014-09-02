<?php
$this->breadcrumbs=array(
	'Sewa Sections'=>array('index'),
	$model->section_id,
);

$this->menu=array(
	array('label'=>'List SewaSections','url'=>array('index')),
	array('label'=>'Create SewaSections','url'=>array('create')),
	array('label'=>'Update SewaSections','url'=>array('update','id'=>$model->section_id)),
	array('label'=>'Delete SewaSections','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->section_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SewaSections','url'=>array('admin')),
);
?>

<h1>View SewaSections #<?php echo $model->section_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'section_id',
		'section_name',
		'section_jathedar_name',
		'section_jathedar_mobile_no',
		'section_jathedar_mobile_secondary',
	),
)); ?>
