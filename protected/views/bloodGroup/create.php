<?php
$this->breadcrumbs=array(
	'Blood Groups'=>array('index'),
	'Create',
);

?>

<h1>Create Blood Group</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>