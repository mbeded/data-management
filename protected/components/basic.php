<?php
/**
 * Created by PhpStorm.
 * User: anil kumar
 * Date: 15/6/14
 * Time: 5:40 PM
 */

class basic {

    public static function getBloodGroup()
    {
        $model = new BloodGroup();
        return $model->findAll();
    }

    public static function getSatsangCentre($area_id = null)
    {
        $model = new SatsangCentre();
        if ($area_id == null) {
            $return = $model->findAll();
        } else {
            echo $area_id;
            $return = $model->findAll('area_id = :id',array(':id' => $area_id));
        }

        return $return;
    }
    
    public static function getAreas()
    {
        $model = new Area();
        return $model->findAll();
    }

    public function getAgeRange($from = 10, $upto = 95)
    {
        return range($from,$upto);
    }

    public function getSewadarSections()
    {
        $model = new SewaSections();
        return $model->findAll();
    }

    public function getBloodDonorById($ID = null)
    {
        if ($ID == null) {
            return false;
        }
        $model = new BloodDonors();
        $data = $model->findByPk($ID);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
    
    public static function removeSpace($string)
    {
        return $string = str_replace(' ','_',$string); 
    }

    public static function getLatestSewadarSerialNumber()
    {
        $criteria = New CDbCriteria();
        $criteria->select = 'max(serial_no) as serial_no';
        $data = Sewadars::model()->find($criteria);
        return (int)$data->serial_no+1;
    }

    public static function getLatestNominalRollSerialNumber()
    {
        $criteria = New CDbCriteria();
        $criteria->select = 'max(serial_no) as serial_no';
        $data = NominalRoll::model()->find($criteria);
        return (int)$data->serial_no+1;
    }


    public static function addTotalSewadarCount($NomialRollID, $Type = null)
    {
        if ($Type == null || $NomialRollID == null ) {
            return false;
        }

        if ($Type == null || $NomialRollID == null ) {
            return false;
        }

        $data = NominalRoll::model()->findByPk($NomialRollID);

        if ($Type == 'Male') {

            $data->total_male = $data->total_male + 1;

        } else if ($Type == 'Female') {

            $data->total_female = $data->total_female + 1;

        }

        $data->total_sewadar = $data->total_sewadar + 1;
        return $data->save();
    }

    public static function removeTotalSewadarCount($NomialRollID, $Type = null)
    {
        if ($Type == null || $NomialRollID == null ) {
            return false;
        }

        $data = NominalRoll::model()->findByPk($NomialRollID);

        if ($Type == 'Male') {

            $data->total_male = $data->total_male - 1;

        } else if ($Type == 'Female') {

            $data->total_female = $data->total_female - 1;

        }

        $data->total_sewadar = $data->total_sewadar - 1;
        return $data->save();
    }
} 