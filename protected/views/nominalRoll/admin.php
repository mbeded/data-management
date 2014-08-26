<?php
$this->breadcrumbs=array(
	'Nominal Rolls'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('nominal-roll-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Nominal Rolls</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'nominal-roll-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'centre_name',
		'dated',
		'area_name',
		'zone_name',
		/*
		'help_line_no',
		'driver_vehicle_no',
		'driver_vehicle_type',
		'drive_name',
		'drive_mobile_no',
		'period_from',
		'period_to',
		'destination',
		'area_id',
		'centre_id',
		'sewadar_id',
		'incharge_badge_no',
		'incharge_mobile_no',
		'secretary_president_mobile_no',
		'sewa_type',
		'total_sewadar',
		'total_male',
		'total_female',
		'department_name',
		'created_on',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
