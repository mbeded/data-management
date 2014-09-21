<?php

class m140915_022516_tech_detail_table extends CDbMigration
{
    public function safeUp()
    {
        Yii::app()->db->createCommand("
        CREATE TABLE IF NOT EXISTS `stng_sewadard_technical_detail` (
          `detail_id` int(11) NOT NULL AUTO_INCREMENT,
          `sewadar_id` int(11) NOT NULL,
          `job_type` int(11) NOT NULL COMMENT '1,govt.job , 2. pvt. job, 3 - business',
          `department_company` text NOT NULL,
          `designation` varchar(225) NOT NULL,
          `sewa_department` varchar(225) NOT NULL,
          `period_from` date NOT NULL,
          `period_to` date NOT NULL,
          `badget_no` int(11) NOT NULL,
          `center` int(11) NOT NULL,
          `merital_status` int(11) NOT NULL COMMENT '1-marrried,2-unmarried,3-others',
          `email_id` varchar(225) NOT NULL,
          PRIMARY KEY (`detail_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;")->execute();
    }

    public function safeDown()
    {
        Yii::app()->db->createCommand("DROP TABLE stng_sewadard_technical_detail");
    }
}