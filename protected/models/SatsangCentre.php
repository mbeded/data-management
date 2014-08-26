<?php

/*
 * @author Asif Ali M
 * @package application.models
 * 
 * The class defination is autogenerate by UniModel generator
 */

Yii::import('application.models.base.BaseSatsangCentre');

class SatsangCentre extends BaseSatsangCentre
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('area_id, centre_name', 'required'),
            array('area_id', 'numerical', 'integerOnly'=>true),
            array('centre_name, centre_secretary_name, centre_secretary_mobile_number, centre_code', 'length', 'max'=>45),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('centre_id, centre_name, centre_secretary_name, centre_secretary_mobile_number, centre_code, area_id', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
            'area' => array(self::BELONGS_TO, 'Area', 'area_id'),
        );
    }
}