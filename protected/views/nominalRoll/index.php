<?php
$this->breadcrumbs=array(
	'Nominal Rolls',
);

$this->menu=array(
	array('label'=>'Create NominalRoll','url'=>array('create')),
	array('label'=>'Manage NominalRoll','url'=>array('admin')),
);
?>

<h1>Nominal Rolls</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
