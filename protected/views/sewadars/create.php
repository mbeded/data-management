<?php
$this->breadcrumbs=array(
	'Sewadars'=>array('index'),
	'Create',
);
?>
<?php echo $this->renderPartial('_form', array( 'bloodGroup'=>$bloodGroup,'sections'=>$sections, 'area'=>$area, 'age'=>$age, 'technical' => $technical, 'model'=>$model)); ?>