<?php
$this->breadcrumbs=array(
	'Sewadars'=>array('index'),
	$model->sewadar_id=>array('view','id'=>$model->sewadar_id),
	'Update',
);
?>

<h3><?php echo $model->sewadar_name; ?> Details</h3>

<?php echo $this->renderPartial('_form', array( 'bloodGroup'=>$bloodGroup,'sections'=>$sections, 'area'=>$area, 'age'=>$age, 'model'=>$model)); ?>