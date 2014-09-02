<?php

/*
 * @author Asif Ali M
 * @package application.models
 * 
 * The class defination is autogenerate by UniModel generator
 */

Yii::import('application.models.base.BaseNominalRoll');

class NominalRoll extends BaseNominalRoll
{
  public static function model($className=__CLASS__)
  {
    return parent::model($className);
  }

    public function attributeLabels()
    {
        return array(
            'nominal_roll_id' => 'Nominal Roll',
            'serial_no' => 'Serial No',
            'centre_name' => 'Centre Name',
            'dated' => 'Dated',
            'area_name' => 'Area Name',
            'zone_name' => 'Zone Name',
            'help_line_no' => 'Help Line No',
            'driver_vehicle_no' => 'Driver Vehicle No',
            'driver_vehicle_type' => 'Driver Vehicle Type',
            'drive_name' => 'Drive Name',
            'drive_mobile_no' => 'Drive Mobile No',
            'period_from' => 'Period From',
            'period_to' => 'Period To',
            'destination' => 'Destination',
            'area_id' => 'Area',
            'centre_id' => 'Centre',
            'sewadar_id' => 'Incharge Name (jathedar)',
            'incharge_badge_no' => 'Incharge Badge No',
            'incharge_mobile_no' => 'Incharge Mobile No',
            'secretary_president_mobile_no' => 'Secretary Mobile No',
            'sewa_type' => 'Sewa Type',
            'total_sewadar' => 'Total Sewadar',
            'total_male' => 'Total Male',
            'total_female' => 'Total Female',
            'department_name' => 'Department Name',
            'sewa_sent' => 'Is Sewa Send?',
            'sewa_not_sent_reason' => 'Reason to not send sewa',
            'created_on' => 'Created On',
        );
    }

    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('serial_no, centre_name, dated, area_name, zone_name, help_line_no, driver_vehicle_no, driver_vehicle_type, drive_name, drive_mobile_no, period_from, period_to, destination, area_id, centre_id, secretary_president_mobile_no, sewa_type, department_name', 'required'),
            array('serial_no, drive_mobile_no, area_id, centre_id, total_sewadar, total_male, total_female', 'numerical', 'integerOnly'=>true),
            array('centre_name, area_name, driver_vehicle_no, driver_vehicle_type, drive_name, sewa_type, department_name', 'length', 'max'=>225),
            array('zone_name', 'length', 'max'=>10),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('nominal_roll_id, serial_no, centre_name, dated, area_name, zone_name, help_line_no, driver_vehicle_no, driver_vehicle_type, drive_name, drive_mobile_no, period_from, period_to, destination, area_id, centre_id, sewadar_id, incharge_badge_no, incharge_mobile_no, secretary_president_mobile_no, sewa_type, total_sewadar, total_male, total_female, department_name, sewa_sent, sewa_not_sent_reason,created_on', 'safe', 'on'=>'search'),
        );
    }
}