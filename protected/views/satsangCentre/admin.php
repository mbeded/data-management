<?php
$this->breadcrumbs=array(
	'Satsang Centres'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('satsang-centre-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>Satsang Centres</h1>
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

<?php
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'satsang-centre-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'centre_id',
		'centre_name',
		//'centre_secretary_name',
		//'centre_secretary_mobile_number',
		//'centre_code',
		array(
            'header' => 'Area',
            'name' => 'area_id',
            'value' => '$data->area->area_name',
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
