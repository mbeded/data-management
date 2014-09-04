<?php

class m140904_042445_new_user_table extends CDbMigration
{
	public function safeUp()
	{
        Yii::app()->db->createCommand("CREATE TABLE `stng_users` (
          `user_id` int(11) NOT NULL AUTO_INCREMENT,
          `username` varchar(225) NOT NULL,
          `password` varchar(225) NOT NULL,
          `email` varchar(225) NOT NULL,
          `status` enum('enable','disable') NOT NULL,
          `user_type` enum('admin','user') NOT NULL,
          PRIMARY KEY (`user_id`),
          UNIQUE KEY `username` (`username`,`email`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
        ")->execute();
	}

	public function safeDown()
	{
        $this->dropTable('stng_users');
    }
}