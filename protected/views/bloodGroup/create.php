<?php
$this->breadcrumbs=array(
	'Blood Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage BloodGroup','url'=>array('admin')),
);
?>

<h1>Create BloodGroup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>