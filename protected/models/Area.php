<?php

/*
 * @author Asif Ali M
 * @package application.models
 * 
 * The class defination is autogenerate by UniModel generator
 */

Yii::import('application.models.base.BaseArea');

class Area extends BaseArea
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
            array('area_name', 'length', 'max'=>45),
            array('area_description', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('area_id, area_name, area_description', 'safe', 'on'=>'search'),
        );
    }
}