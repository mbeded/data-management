<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseSatsangCentre is autogenerate by UniModel generator
 *
 * This is the model class for table "stng_satsang_centre".
 *
 * The followings are the available columns in table 'stng_satsang_centre':
 * @property integer $centre_id
 * @property string $centre_name
 * @property string $centre_secretary_name
 * @property string $centre_secretary_mobile_number
 * @property string $centre_code
 * @property integer $area_id
 */
class BaseSatsangCentre extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SatsangCentre the static model class
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
		return 'stng_satsang_centre';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area_id', 'required'),
			array('area_id', 'numerical', 'integerOnly'=>true),
			array('centre_name, centre_secretary_name, centre_secretary_mobile_number, centre_code', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('centre_id, centre_name, centre_secretary_name, centre_secretary_mobile_number, centre_code, area_id', 'safe', 'on'=>'search'),
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
			'centre_id' => 'Centre',
			'centre_name' => 'Centre Name',
			'centre_secretary_name' => 'Centre Secretary Name',
			'centre_secretary_mobile_number' => 'Centre Secretary Mobile Number',
			'centre_code' => 'Centre Code',
			'area_id' => 'Area',
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

		$criteria->compare('centre_id',$this->centre_id);
		$criteria->compare('centre_name',$this->centre_name,true);
		$criteria->compare('centre_secretary_name',$this->centre_secretary_name,true);
		$criteria->compare('centre_secretary_mobile_number',$this->centre_secretary_mobile_number,true);
		$criteria->compare('centre_code',$this->centre_code,true);
		$criteria->compare('area_id',$this->area_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}