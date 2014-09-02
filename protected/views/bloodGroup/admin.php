<?php
$this->breadcrumbs=array(
	'Blood Groups'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('blood-group-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Blood Groups</h1>

<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

<!--<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>-->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'blood-group-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'blood_group_name',
		'blood_group_type',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}{delete}',
		),
	),
)); ?>
