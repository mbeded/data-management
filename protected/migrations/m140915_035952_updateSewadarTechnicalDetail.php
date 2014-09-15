<?php

class m140915_035952_updateSewadarTechnicalDetail extends CDbMigration
{
    public function safeUp()
    {
        Yii::app()->db->createCommand("ALTER TABLE `stng_sewadard_technical_detail` CHANGE `center` `center` VARCHAR(11) NULL DEFAULT NULL;")->execute();
    }

    public function safeDown()
    {

    }
}