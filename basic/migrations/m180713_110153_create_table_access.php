<?php

use yii\db\Migration;

/**
 * Class m180713_110153_create_table_access
 */
class m180713_110153_create_table_access extends Migration
{
    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeUp()
    // {

    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeDown()
    // {
    //     echo "m180713_110153_create_table_access cannot be reverted.\n";

    //     return false;
    // }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->execute('
            CREATE TABLE IF NOT EXISTS `access` (
              `id` INT(11) NOT NULL AUTO_INCREMENT,
              `note_id` INT(11) NOT NULL,
              `user_id` INT(11) NOT NULL,
              PRIMARY KEY (`id`),
              INDEX `fk_access_1_idx` (`note_id` ASC),
              INDEX `fk_access_2_idx` (`user_id` ASC))
            ENGINE = InnoDB CHARACTER SET UTF8 COLLATE = utf8_unicode_ci
        ');
    }

    public function down()
    {
        $this->dropTable('access');
    }
}
