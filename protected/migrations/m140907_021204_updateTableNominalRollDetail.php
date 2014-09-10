<?php

class m140907_021204_updateTableNominalRollDetail extends CDbMigration
{
	/*public function up()
	{
	}

	public function down()
	{
		echo "m140907_021204_updateTableNominalRollDetail does not support migration down.\n";
		return false;
	}*/


	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        Yii::app()->db->createCommand("ALTER TABLE `stng_nominal_roll_detail` ADD `order` ENUM('0','1','2') NOT NULL COMMENT '0- jathedar,1-male,2-female'")->execute();
    }

	public function safeDown()
	{
	}

}