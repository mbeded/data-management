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
));
$techDetail = SewadardTechnicalDetail::model()->find("sewadar_id='$model->sewadar_id'");

if ($techDetail != null) { ?>
<table class="detail-view table table-striped table-condensed">
    <tr>
        <td>Job Type</td>
        <td>
            <?php
            if ($techDetail->job_type == 1) {
                echo 'Govt Job';
            } else if($techDetail->job_type == 2) {
                echo 'Pvt Job';
            } else if($techDetail->job_type == 3) {
                echo 'Business';
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Department Company</td>
        <td><?php echo $techDetail->department_company; ?></td>
    </tr>
    <tr>
        <td>Designation</td>
        <td><?php echo $techDetail->designation; ?></td>
    </tr>
    <tr>
        <td>Sewa Department</td>
        <td><?php echo $techDetail->sewa_department; ?></td>
    </tr>
    <tr>
        <td>Period From</td>
        <td><?php echo $techDetail->period_from; ?></td>
    </tr>
    <tr>
        <td>Period To</td>
        <td><?php echo $techDetail->period_to; ?></td>
    </tr>
    <tr>
        <td>Badget No</td>
        <td><?php echo $techDetail->badget_no; ?></td>
    </tr>
    <tr>
        <td>Center</td>
        <td><?php echo $techDetail->center; ?></td>
    </tr>
    <tr>
        <td>Merital Status</td>
        <td>
            <?php
            if ($techDetail->merital_status == 1) {
                echo 'Marrried';
            } else if($techDetail->merital_status == 2) {
                echo 'Unmarried';
            } else if($techDetail->merital_status == 3) {
                echo 'Others';
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $techDetail->email_id; ?></td>
    </tr>
</table>
<?php } ?>
