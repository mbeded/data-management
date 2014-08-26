<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseSewadars is autogenerate by UniModel generator
 *
 * This is the model class for table "stng_sewadars".
 *
 * The followings are the available columns in table 'stng_sewadars':
 * @property integer $sewadar_id
 * @property integer $badge_no
 * @property integer $serial_no
 * @property integer $old_badge_no
 * @property string $sewadar_name
 * @property string $father_dauther_son_wife_of
 * @property string $relation
 * @property integer $section
 * @property string $old_section
 * @property integer $mobile_primary
 * @property integer $mobile_secondary
 * @property string $gender
 * @property string $date_of_birth
 * @property integer $age
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $district
 * @property string $state
 * @property string $date_of_initiation
 * @property string $qualification
 * @property string $profession
 * @property string $specialization
 * @property string $sewardar_picture
 * @property string $date_of_creation
 * @property integer $blood_group
 * @property integer $is_technical
 *
 * The followings are the available model relations:
 * @property BloodGroup $bloodGroup
 * @property SewaSections $section0
 */
class BaseSewadars extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sewadars the static model class
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
		return 'stng_sewadars';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('serial_no, section, is_technical', 'required'),
			array('badge_no, serial_no, old_badge_no, section, mobile_primary, mobile_secondary, age, blood_group, is_technical', 'numerical', 'integerOnly'=>true),
			array('sewadar_name, father_dauther_son_wife_of, relation, old_section, qualification, profession, specialization, sewardar_picture', 'length', 'max'=>45),
			array('gender', 'length', 'max'=>6),
			array('district, state', 'length', 'max'=>223),
			array('date_of_birth, address1, address2, address3, date_of_initiation, date_of_creation', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sewadar_id, badge_no, serial_no, old_badge_no, sewadar_name, father_dauther_son_wife_of, relation, section, old_section, mobile_primary, mobile_secondary, gender, date_of_birth, age, address1, address2, address3, district, state, date_of_initiation, qualification, profession, specialization, sewardar_picture, date_of_creation, blood_group, is_technical', 'safe', 'on'=>'search'),
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
			'bloodGroup' => array(self::BELONGS_TO, 'BloodGroup', 'blood_group'),
			'section0' => array(self::BELONGS_TO, 'SewaSections', 'section'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sewadar_id' => 'Sewadar',
			'badge_no' => 'Badge No',
			'serial_no' => 'Serial No',
			'old_badge_no' => 'Old Badge No',
			'sewadar_name' => 'Sewadar Name',
			'father_dauther_son_wife_of' => 'Father Dauther Son Wife Of',
			'relation' => 'Relation',
			'section' => 'Section',
			'old_section' => 'Old Section',
			'mobile_primary' => 'Mobile Primary',
			'mobile_secondary' => 'Mobile Secondary',
			'gender' => 'Gender',
			'date_of_birth' => 'Date Of Birth',
			'age' => 'Age',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'address3' => 'Address3',
			'district' => 'District',
			'state' => 'State',
			'date_of_initiation' => 'Date Of Initiation',
			'qualification' => 'Qualification',
			'profession' => 'Profession',
			'specialization' => 'Specialization',
			'sewardar_picture' => 'Sewardar Picture',
			'date_of_creation' => 'Date Of Creation',
			'blood_group' => 'Blood Group',
			'is_technical' => 'Is Technical',
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

		$criteria->compare('sewadar_id',$this->sewadar_id);
		$criteria->compare('badge_no',$this->badge_no);
		$criteria->compare('serial_no',$this->serial_no);
		$criteria->compare('old_badge_no',$this->old_badge_no);
		$criteria->compare('sewadar_name',$this->sewadar_name,true);
		$criteria->compare('father_dauther_son_wife_of',$this->father_dauther_son_wife_of,true);
		$criteria->compare('relation',$this->relation,true);
		$criteria->compare('section',$this->section);
		$criteria->compare('old_section',$this->old_section,true);
		$criteria->compare('mobile_primary',$this->mobile_primary);
		$criteria->compare('mobile_secondary',$this->mobile_secondary);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('address3',$this->address3,true);
		$criteria->compare('district',$this->district,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('date_of_initiation',$this->date_of_initiation,true);
		$criteria->compare('qualification',$this->qualification,true);
		$criteria->compare('profession',$this->profession,true);
		$criteria->compare('specialization',$this->specialization,true);
		$criteria->compare('sewardar_picture',$this->sewardar_picture,true);
		$criteria->compare('date_of_creation',$this->date_of_creation,true);
		$criteria->compare('blood_group',$this->blood_group);
		$criteria->compare('is_technical',$this->is_technical);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}