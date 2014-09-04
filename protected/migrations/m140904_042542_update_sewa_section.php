<?php

class m140904_042542_update_sewa_section extends CDbMigration
{
	public function safeUp()
	{
        Yii::app()->db->createCommand("ALTER TABLE `stng_sewa_sections` CHANGE `section_jathedar_mobile_no` `section_jathedar_mobile_no` BIGINT(11) NULL DEFAULT NULL, CHANGE `section_jathedar_mobile_secondary` `section_jathedar_mobile_secondary` BIGINT(11) NULL DEFAULT NULL;")->execute();
	}

	public function safeDown()
	{
	}
}