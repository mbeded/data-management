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
}