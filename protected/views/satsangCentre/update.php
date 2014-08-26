<?php
$this->breadcrumbs=array(
	'Satsang Centres'=>array('index'),
	$model->centre_id=>array('view','id'=>$model->centre_id),
	'Update',
);

?>

<h1>Update Satsang Centre :<?php echo $model->centre_name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>