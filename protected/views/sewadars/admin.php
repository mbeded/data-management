<?php
$this->breadcrumbs=array(
	'Sewadars'=>array('index'),
	'Manage',
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sewadars-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Sewadars List</h1>
<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<!--<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
    'sections'=>$sections,
    'age'=>$age,
    'bloodGroup'=>$bloodGroup,
)); ?>
</div>-->

<?php
$file_Path = Yii::getPathOfAlias('webroot.attachments.sewadars_images');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'sewadars-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
          'header' => '',
          'name' => 'sewardar_picture',
          'type' => 'raw',
          'value' => '($data->sewardar_picture!="") ? CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/".$data->sewardar_picture, $data->sewardar_picture,array("width"=>100,"height"=>100)) : CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/no-pic.png","no image uploaded",array("width"=>100,"height"=>100))',
          'filter' => false,
        ),
		'serial_no',
		'badge_no',
		'sewadar_name',
        'mobile_primary',
        array(
            'name' => 'section',
            'value' => '(isset($data->section0->section_name)) ? $data->section0->section_name : ""',
            'filter' => CHtml::listData($sections, 'section_id', 'section_name'),
        ),
        array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
