<?php
$this->breadcrumbs=array(
	'Blood Groups'=>array('index'),
	$model->blood_group_id=>array('view','id'=>$model->blood_group_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create BloodGroup','url'=>array('create')),
	array('label'=>'Manage BloodGroup','url'=>array('admin')),
);
?>

<h1>Update BloodGroup <?php echo $model->blood_group_name.' '.$model->blood_group_type; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>