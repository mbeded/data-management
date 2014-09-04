<?php

class m140904_042525_change_in_nomial_roll extends CDbMigration
{
	public function safeUp()
	{
        Yii::app()->db->createCommand("ALTER TABLE `stng_nominal_roll` CHANGE `drive_mobile_no` `drive_mobile_no` BIGINT(12) NULL DEFAULT NULL;")->execute();
	}

	public function safeDown()
	{
	}
}