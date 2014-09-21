<?php

class m140915_025704_updateSewadarDetail extends CDbMigration
{
    public function safeUp()
    {
        Yii::app()->db->createCommand("ALTER TABLE `stng_sewadars` CHANGE `is_technical` `is_technical` TINYINT(1) NOT NULL DEFAULT '0';")->execute();
    }
}