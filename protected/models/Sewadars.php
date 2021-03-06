<?php

/*
 * @author Asif Ali M
 * @package application.models
 * 
 * The class defination is autogenerate by UniModel generator
 */

Yii::import('application.models.base.BaseSewadars');

class Sewadars extends BaseSewadars
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function rules()
    {
        return array(
            array('serial_no, section, sewadar_name, is_technical', 'required'),
            array('badge_no', 'unique'),
            array('mobile_primary, mobile_secondary', 'numerical'),
            array('badge_no, serial_no, old_badge_no, section, mobile_primary, mobile_secondary, age, blood_group, is_technical', 'numerical', 'integerOnly'=>true),
            array('sewadar_name, father_dauther_son_wife_of, relation, old_section, qualification, profession, specialization, sewardar_picture', 'length', 'max'=>45),
            array('gender', 'length', 'max'=>6),
            array('district, state', 'length', 'max'=>223),
            array('date_of_birth, address1, address2, address3, date_of_initiation, date_of_creation', 'safe'),
            array('sewadar_id, badge_no, serial_no, old_badge_no, sewadar_name, father_dauther_son_wife_of, relation, section, old_section, mobile_primary, mobile_secondary, gender, date_of_birth, age, address1, address2, address3, district, state, date_of_initiation, qualification, profession, specialization, sewardar_picture, date_of_creation, blood_group, is_technical', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'bloodGroup' => array(self::BELONGS_TO, 'BloodGroup', 'blood_group'),
            'section0' => array(self::BELONGS_TO, 'SewaSections', 'section'),
            'nominalRollDetail' => array(self::BELONGS_TO, 'NominalRollDetail', 'sewadar'),
        );
    }

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
            'address1' => 'House No. (27) / Colony (Saini Vihar)',
            'address2' => 'Area (Baltana)',
            'address3' => 'City (Zirakpur)',
            'district' => 'District (Mohali)',
            'state' => 'State (Punjab)',
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

}