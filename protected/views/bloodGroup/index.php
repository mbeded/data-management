<?php
$this->breadcrumbs=array(
	'Blood Groups',
);

$this->menu=array(
	array('label'=>'Create BloodGroup','url'=>array('create')),
	array('label'=>'Manage BloodGroup','url'=>array('admin')),
);
?>

<h1>Blood Groups</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
