<?php

/*
 * @author Asif Ali M
 * @package application.models
 * 
 * The class defination is autogenerate by UniModel generator
 */

Yii::import('application.models.base.BaseNominalRollDetail');

class NominalRollDetail extends BaseNominalRollDetail
{
  public static function model($className=__CLASS__)
  {
    return parent::model($className);
  }

    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'sewadars' => array(self::BELONGS_TO, 'Sewadars', array('sewadar_id' => 'sewadar_id')),
        );

    }
}