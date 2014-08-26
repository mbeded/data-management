<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseNominalRoll is autogenerate by UniModel generator
 *
 * This is the model class for table "stng_nominal_roll".
 *
 * The followings are the available columns in table 'stng_nominal_roll':
 * @property integer $nominal_roll_id
 * @property integer $serial_no
 * @property string $centre_name
 * @property string $dated
 * @property string $area_name
 * @property string $zone_name
 * @property string $help_line_no
 * @property string $driver_vehicle_no
 * @property string $driver_vehicle_type
 * @property string $drive_name
 * @property integer $drive_mobile_no
 * @property string $period_from
 * @property string $period_to
 * @property string $destination
 * @property integer $area_id
 * @property integer $centre_id
 * @property integer $sewadar_id
 * @property integer $incharge_badge_no
 * @property integer $incharge_mobile_no
 * @property integer $secretary_president_mobile_no
 * @property string $sewa_type
 * @property integer $total_sewadar
 * @property integer $total_male
 * @property integer $total_female
 * @property string $department_name
 * @property string $created_on
 */
class BaseNominalRoll extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NominalRoll the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stng_nominal_roll';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('serial_no, centre_name, dated, area_name, zone_name, help_line_no, driver_vehicle_no, driver_vehicle_type, drive_name, drive_mobile_no, period_from, period_to, destination, area_id, centre_id, sewadar_id, incharge_badge_no, incharge_mobile_no, secretary_president_mobile_no, sewa_type, total_sewadar, total_male, total_female, department_name, created_on', 'required'),
			array('serial_no, drive_mobile_no, area_id, centre_id, sewadar_id, incharge_badge_no, incharge_mobile_no, secretary_president_mobile_no, total_sewadar, total_male, total_female', 'numerical', 'integerOnly'=>true),
			array('centre_name, area_name, driver_vehicle_no, driver_vehicle_type, drive_name, sewa_type, department_name', 'length', 'max'=>225),
			array('zone_name', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nominal_roll_id, serial_no, centre_name, dated, area_name, zone_name, help_line_no, driver_vehicle_no, driver_vehicle_type, drive_name, drive_mobile_no, period_from, period_to, destination, area_id, centre_id, sewadar_id, incharge_badge_no, incharge_mobile_no, secretary_president_mobile_no, sewa_type, total_sewadar, total_male, total_female, department_name, created_on', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
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
			'sewadar_id' => 'Sewadar',
			'incharge_badge_no' => 'Incharge Badge No',
			'incharge_mobile_no' => 'Incharge Mobile No',
			'secretary_president_mobile_no' => 'Secretary/President Mobile No',
			'sewa_type' => 'Sewa Type',
			'total_sewadar' => 'Total Sewadar',
			'total_male' => 'Total Male',
			'total_female' => 'Total Female',
			'department_name' => 'Department Name',
			'created_on' => 'Created On',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nominal_roll_id',$this->nominal_roll_id);
		$criteria->compare('serial_no',$this->serial_no);
		$criteria->compare('centre_name',$this->centre_name,true);
		$criteria->compare('dated',$this->dated,true);
		$criteria->compare('area_name',$this->area_name,true);
		$criteria->compare('zone_name',$this->zone_name,true);
		$criteria->compare('help_line_no',$this->help_line_no,true);
		$criteria->compare('driver_vehicle_no',$this->driver_vehicle_no,true);
		$criteria->compare('driver_vehicle_type',$this->driver_vehicle_type,true);
		$criteria->compare('drive_name',$this->drive_name,true);
		$criteria->compare('drive_mobile_no',$this->drive_mobile_no);
		$criteria->compare('period_from',$this->period_from,true);
		$criteria->compare('period_to',$this->period_to,true);
		$criteria->compare('destination',$this->destination,true);
		$criteria->compare('area_id',$this->area_id);
		$criteria->compare('centre_id',$this->centre_id);
		$criteria->compare('sewadar_id',$this->sewadar_id);
		$criteria->compare('incharge_badge_no',$this->incharge_badge_no);
		$criteria->compare('incharge_mobile_no',$this->incharge_mobile_no);
		$criteria->compare('secretary_president_mobile_no',$this->secretary_president_mobile_no);
		$criteria->compare('sewa_type',$this->sewa_type,true);
		$criteria->compare('total_sewadar',$this->total_sewadar);
		$criteria->compare('total_male',$this->total_male);
		$criteria->compare('total_female',$this->total_female);
		$criteria->compare('department_name',$this->department_name,true);
		$criteria->compare('sewa_sent',$this->sewa_sent,true);
		$criteria->compare('sewa_not_sent_reason',$this->sewa_not_sent_reason,true);
        $criteria->compare('created_on',$this->created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}