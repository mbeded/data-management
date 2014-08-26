<?php
$this->breadcrumbs=array(
	'Satsang Centres',
);

?>

<h1>Satsang Centres</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
