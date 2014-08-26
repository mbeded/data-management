<?php
$this->breadcrumbs=array(
	'Satsang Centres'=>array('index'),
	$model->centre_id,
);

?>

<h1>View Satsang Centre <?php echo $model->centre_name; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'centre_id',
		'centre_name',
		'centre_secretary_name',
        'centre_secretary_mobile_number',
		//'centre_code',
	),
)); ?>
<input type="button" name="cancel" class="btn btn-primary pull-right" value="Back" onclick="javascript:window.history.back()">