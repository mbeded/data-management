<?php

/**
 * This is the model class for table "stng_blood_group".
 *
 * The followings are the available columns in table 'stng_blood_group':
 * @property integer $blood_group_id
 * @property string $blood_group_name
 * @property string $blood_group_type
 *
 * The followings are the available model relations:
 * @property BloodDonors[] $bloodDonors
 */
class BloodGroup extends CActiveRecord
{
    private $fullName;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stng_blood_group';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('blood_group_name,blood_group_type', 'required'),
			array('blood_group_name', 'length', 'max'=>45),
			array('blood_group_type', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('blood_group_id, blood_group_name, blood_group_type', 'safe', 'on'=>'search'),
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
			'bloodDonors' => array(self::HAS_MANY, 'BloodDonors', 'blood_group_ref_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'blood_group_id' => 'Blood Group',
			'blood_group_name' => 'Blood Group Name',
			'blood_group_type' => 'Blood Group Type',
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

		$criteria->compare('blood_group_id',$this->blood_group_id);
		$criteria->compare('blood_group_name',$this->blood_group_name,true);
		$criteria->compare('blood_group_type',$this->blood_group_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BloodGroup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function getFullName()
    {
        return $this->blood_group_name.' '.$this->blood_group_type;
    }
}
