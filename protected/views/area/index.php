<?php
$this->breadcrumbs=array(
	'Areas',
);

?>

<h1>Areas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
