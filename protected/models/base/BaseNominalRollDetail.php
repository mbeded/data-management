<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseNominalRollDetail is autogenerate by UniModel generator
 *
 * This is the model class for table "stng_nominal_roll_detail".
 *
 * The followings are the available columns in table 'stng_nominal_roll_detail':
 * @property integer $nominal_roll_detail_id
 * @property integer $nominal_roll_id
 * @property integer $sewadar_id
 */
class BaseNominalRollDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NominalRollDetail the static model class
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
		return 'stng_nominal_roll_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nominal_roll_id, sewadar_id', 'required'),
			array('nominal_roll_id, sewadar_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nominal_roll_detail_id, nominal_roll_id, sewadar_id', 'safe', 'on'=>'search'),
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
			'nominal_roll_detail_id' => 'Nominal Roll Detail',
			'nominal_roll_id' => 'Nominal Roll',
			'sewadar_id' => 'Sewadar',
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

		$criteria->compare('nominal_roll_detail_id',$this->nominal_roll_detail_id);
		$criteria->compare('nominal_roll_id',$this->nominal_roll_id);
		$criteria->compare('sewadar_id',$this->sewadar_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}