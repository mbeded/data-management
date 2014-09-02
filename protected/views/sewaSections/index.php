<?php
$this->breadcrumbs=array(
	'Sewa Sections',
);

$this->menu=array(
	array('label'=>'Create SewaSections','url'=>array('create')),
	array('label'=>'Manage SewaSections','url'=>array('admin')),
);
?>

<h1>Sewa Sections</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
