<?php
$this->breadcrumbs=array(
	'Blood Groups'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create BloodGroup','url'=>array('create')),
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

<h1>Blood Groups</h1>

<?php
$this->widget('bootstrap.widgets.TbAlert',
    array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'X'), // success, info, warning, error or danger
        ),
    )
);
?>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'blood-group-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'blood_group_id',
		'blood_group_name',
		'blood_group_type',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
