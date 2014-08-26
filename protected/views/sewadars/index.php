<?php
$this->breadcrumbs=array(
	'Sewadars',
);

$this->menu=array(
	array('label'=>'Create Sewadars','url'=>array('create')),
	array('label'=>'Manage Sewadars','url'=>array('admin')),
);
?>

<h1>Sewadars</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
