<?php
$this->breadcrumbs=array(
	'Blood Groups'=>array('index'),
	$model->blood_group_id,
);

$this->menu=array(

	array('label'=>'Create BloodGroup','url'=>array('create')),
	array('label'=>'Manage BloodGroup','url'=>array('admin')),
);
?>

<h1>View BloodGroup <?php echo $model->blood_group_name; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'blood_group_id',
		'blood_group_name',
		'blood_group_type',
	),
)); ?>
<input type="button" name="cancel" class="btn btn-primary pull-right" value="Back" onclick="javascript:window.history.back()">