<?php
$this->breadcrumbs=array(
	'Satsang Centres'=>array('index'),
	'Create',
);

?>

<h1>Create Satsang Centre</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>