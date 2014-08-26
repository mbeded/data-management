<?php
$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->area_id=>array('view','id'=>$model->area_id),
	'Update',
);

?>

<h1>Update Area <?php echo $model->area_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>