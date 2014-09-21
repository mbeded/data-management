<?php

class m140915_030112_updateSewadarTechnicalDetail extends CDbMigration
{
    public function safeUp()
    {
        Yii::app()->db->createCommand("ALTER TABLE `stng_sewadard_technical_detail` CHANGE `detail_id` `detail_id` INT(11) NOT NULL AUTO_INCREMENT, CHANGE `sewadar_id` `sewadar_id` INT(11) NULL, CHANGE `job_type` `job_type` INT(11) NULL COMMENT '1,govt.job , 2. pvt. job, 3 - business', CHANGE `department_company` `department_company` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL, CHANGE `designation` `designation` VARCHAR(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL, CHANGE `sewa_department` `sewa_department` VARCHAR(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL, CHANGE `period_from` `period_from` DATE NULL, CHANGE `period_to` `period_to` DATE NULL, CHANGE `badget_no` `badget_no` INT(11) NULL, CHANGE `center` `center` INT(11) NULL, CHANGE `merital_status` `merital_status` INT(11) NULL COMMENT '1-marrried,2-unmarried,3-others', CHANGE `email_id` `email_id` VARCHAR(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;")->execute();
    }

    public function safeDown()
    {

    }
}