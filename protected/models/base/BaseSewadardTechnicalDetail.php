<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseSewadardTechnicalDetail is autogenerate by UniModel generator
 *
 * This is the model class for table "stng_sewadard_technical_detail".
 *
 * The followings are the available columns in table 'stng_sewadard_technical_detail':
 * @property integer $detail_id
 * @property integer $sewadar_id
 * @property integer $job_type
 * @property string $department_company
 * @property string $designation
 * @property string $sewa_department
 * @property string $period_from
 * @property string $period_to
 * @property integer $badget_no
 * @property integer $center
 * @property integer $merital_status
 * @property string $email_id
 */
class BaseSewadardTechnicalDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SewadardTechnicalDetail the static model class
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
		return 'stng_sewadard_technical_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sewadar_id, job_type, department_company, designation, sewa_department, period_from, period_to, badget_no, center, merital_status, email_id', 'required'),
			array('sewadar_id, job_type, badget_no, center, merital_status', 'numerical', 'integerOnly'=>true),
			array('designation, sewa_department, email_id', 'length', 'max'=>225),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('detail_id, sewadar_id, job_type, department_company, designation, sewa_department, period_from, period_to, badget_no, center, merital_status, email_id', 'safe', 'on'=>'search'),
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
			'detail_id' => 'Detail',
			'sewadar_id' => 'Sewadar',
			'job_type' => 'Job Type',
			'department_company' => 'Department Company',
			'designation' => 'Designation',
			'sewa_department' => 'Sewa Department',
			'period_from' => 'Period From',
			'period_to' => 'Period To',
			'badget_no' => 'Badget No',
			'center' => 'Center',
			'merital_status' => 'Merital Status',
			'email_id' => 'Email',
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

		$criteria->compare('detail_id',$this->detail_id);
		$criteria->compare('sewadar_id',$this->sewadar_id);
		$criteria->compare('job_type',$this->job_type);
		$criteria->compare('department_company',$this->department_company,true);
		$criteria->compare('designation',$this->designation,true);
		$criteria->compare('sewa_department',$this->sewa_department,true);
		$criteria->compare('period_from',$this->period_from,true);
		$criteria->compare('period_to',$this->period_to,true);
		$criteria->compare('badget_no',$this->badget_no);
		$criteria->compare('center',$this->center);
		$criteria->compare('merital_status',$this->merital_status);
		$criteria->compare('email_id',$this->email_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}