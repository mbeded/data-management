<?php
$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->area_id,
);

?>

<h1>View Area #<?php echo $model->area_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'area_id',
		'area_name',
		//'area_description',
	),
)); ?>
