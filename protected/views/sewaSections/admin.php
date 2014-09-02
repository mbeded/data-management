<?php
$this->breadcrumbs=array(
	'Sewa Sections'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sewa-sections-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Sections List</h1>
<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<!--<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>-->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'sewa-sections-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'section_name',
		array(
            'name'=>'section_jathedar_name',
            'header'=>'Jathedar Name',
        ),
		array(
            'name' => 'section_jathedar_mobile_no',
            'header' => 'Jathedar Mobile No.'
        ),
        array(
            'name' => 'section_jathedar_mobile_secondary',
            'header' => 'Jathedar Second Mobile No.'
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}{delete}',
		),
	),
)); ?>
