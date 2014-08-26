<h1>Deatil of Sewadars - <?php echo $model->sewadar_name; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'badge_no',
		'old_badge_no',
		'sewadar_name',
		'father_dauther_son_wife_of',
		'relation',
		array(
            'name' => 'blood_group',
            'value' => (isset($model->bloodGroup->blood_group_name)) ? $model->bloodGroup->blood_group_name.' '.$model->bloodGroup->blood_group_type : '',
        ),
		array(
            'name' => 'section',
            'value' => (isset($model->section0->section_name)) ? $model->section0->section_name : '',
        ),
		'old_section',
		'mobile_primary',
		'mobile_secondary',
		'gender',
		'date_of_birth',
		'age',
		'address',
        'area',
        //array(
        //    'name' => 'area',
        //    'value' => (isset($model->area0->area_name)) ? $model->area0->area_name : '',
        //),
		'date_of_initiation',
		'qualification',
		'profession',
		'specialization',

        array(
            'name' => 'sewardar_picture',
            'type' => 'raw',
            'value' => ($model->sewardar_picture!="") ? CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/".$model->sewardar_picture, $model->sewardar_picture,array("width"=>100,"height"=>100)) : CHtml::image(Yii::app()->request->baseUrl."/attachments/sewadars_images/no-pic.png","no image uploaded",array("width"=>100,"height"=>100)),
        ),
	),
)); ?>
