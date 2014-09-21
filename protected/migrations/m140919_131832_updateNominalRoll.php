<?php

class m140919_131832_updateNominalRoll extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	        Yii::app()->db->createCommand("ALTER TABLE `stng_nominal_roll` CHANGE `sewa_sent` `sewa_sent` ENUM('YES','NO','PROGRESS') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;")->execute();
	}

	public function safeDown()
	{

    }
}