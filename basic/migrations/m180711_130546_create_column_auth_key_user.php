<?php

use yii\db\Migration;

/**
 * Class m180711_130546_create_column_auth_key_user
 */
class m180711_130546_create_column_auth_key_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'auth_key', $this->string(60)->unique()->notNull()->after('contact_phone'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'auth_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180711_130546_create_column_auth_key_user cannot be reverted.\n";

        return false;
    }
    */
}
