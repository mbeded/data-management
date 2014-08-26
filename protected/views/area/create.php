<?php
$this->breadcrumbs=array(
	'Areas'=>array('index'),
	'Create',
);

?>

<h1>Create Area</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>