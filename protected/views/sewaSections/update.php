<?php
$this->breadcrumbs=array(
	'Sewa Sections'=>array('index'),
	$model->section_id=>array('view','id'=>$model->section_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SewaSections','url'=>array('index')),
	array('label'=>'Create SewaSections','url'=>array('create')),
	array('label'=>'View SewaSections','url'=>array('view','id'=>$model->section_id)),
	array('label'=>'Manage SewaSections','url'=>array('admin')),
);
?>

<h1>Update SewaSections <?php echo $model->section_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>