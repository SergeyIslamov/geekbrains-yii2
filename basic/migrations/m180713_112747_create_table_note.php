<?php

use yii\db\Migration;

/**
 * Class m180713_112747_create_table_note
 */
class m180713_112747_create_table_note extends Migration
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
    //     echo "m180713_112747_create_table_note cannot be reverted.\n";

    //     return false;
    // }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `note` (
              `id` INT(11) NOT NULL AUTO_INCREMENT,
              `text` TEXT NOT NULL,
              `creator` INT(11) NOT NULL,
              `date_create` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              INDEX `fk_note_1_idx` (`creator` ASC))
            ENGINE = InnoDB CHARACTER SET UTF8 COLLATE = utf8_unicode_ci
        ");
    }

    public function down()
    {
        $this->dropTable('note');
    }
}
