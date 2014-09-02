<?php
$this->breadcrumbs=array(
	'Areas'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('area-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Areas</h1>
<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'area-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'area_id',
		'area_name',
		//'area_description',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}{delete}',
		),
	),
)); ?>
