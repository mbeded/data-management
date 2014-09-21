<?php

class m140919_122550_insertUSers extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        Yii::app()->db->createCommand("INSERT INTO `stng_users` (`user_id`, `username`, `password`, `email`, `status`, `user_type`) VALUES
                                    (1, 'lucky', 'd745958ee78d10bcd3537ca9c46b43ac', 'lucky@admin.com', 'enable', 'user'),
                                (2, 'harry', 'harry123@', 'harry@admin.com', 'enable', 'user'),
                                (3, 'anil', 'anil123@', 'anil@admin.com', 'enable', 'user'),
                                (4, 'mintu', 'mintu123@', 'mintu@admin.com', 'enable', 'user'),
                                (5, 'admin', '@dmin123@', 'admin@admin.com', 'enable', 'admin');")->execute();
	}

	public function safeDown()
	{

	}

}