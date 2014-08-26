<?php

/**
 * This is the model class for table "stng_sewa_sections".
 *
 * The followings are the available columns in table 'stng_sewa_sections':
 * @property integer $section_id
 * @property string $section_name
 * @property string $section_jathedar_name
 * @property integer $section_jathedar_mobile_no
 * @property integer $section_jathedar_mobile_secondary
 *
 * The followings are the available model relations:
 * @property Sewadars[] $sewadars
 */
class SewaSections extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stng_sewa_sections';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('section_jathedar_mobile_no, section_jathedar_mobile_secondary', 'numerical', 'integerOnly'=>true),
			array('section_name, section_jathedar_name', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('section_id, section_name, section_jathedar_name, section_jathedar_mobile_no, section_jathedar_mobile_secondary', 'safe', 'on'=>'search'),
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
			'sewadars' => array(self::HAS_MANY, 'Sewadars', 'section'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'section_id' => 'Section',
			'section_name' => 'Section Name',
			'section_jathedar_name' => 'Section Jathedar Name',
			'section_jathedar_mobile_no' => 'Section Jathedar Mobile No',
			'section_jathedar_mobile_secondary' => 'Section Jathedar Mobile Secondary',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('section_id',$this->section_id);
		$criteria->compare('section_name',$this->section_name,true);
		$criteria->compare('section_jathedar_name',$this->section_jathedar_name,true);
		$criteria->compare('section_jathedar_mobile_no',$this->section_jathedar_mobile_no);
		$criteria->compare('section_jathedar_mobile_secondary',$this->section_jathedar_mobile_secondary);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SewaSections the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
