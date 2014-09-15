<?php

/*
 * @author Asif Ali M
 * @package application.models
 * 
 * The class defination is autogenerate by UniModel generator
 */

Yii::import('application.models.base.BaseSewadardTechnicalDetail');

class SewadardTechnicalDetail extends BaseSewadardTechnicalDetail
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
            array('sewadar_id', 'required'),
            array('sewadar_id, job_type, badget_no, merital_status', 'numerical', 'integerOnly'=>true),
            array('designation, sewa_department, email_id', 'length', 'max'=>225),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('detail_id, sewadar_id, job_type, department_company, designation, sewa_department, period_from, period_to, badget_no, center, merital_status, email_id', 'safe', 'on'=>'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'detail_id' => 'Detail',
            'sewadar_id' => 'Sewadar',
            'job_type' => 'Job Type',
            'department_company' => 'Department / Company',
            'designation' => 'Designation',
            'sewa_department' => 'Sewa Department',
            'period_from' => 'Period From',
            'period_to' => 'Period To',
            'badget_no' => 'Badget No',
            'center' => 'Center',
            'merital_status' => 'Merital Status',
            'email_id' => 'Email',
        );
    }
}