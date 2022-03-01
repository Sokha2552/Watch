<?php

use yii\db\Migration;

/**
 * Class m220216_030836_add_first_name_last_name_to_user
 */
class m220216_030836_add_first_name_last_name_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("{{%user}}", "first_name", $this->string()->after('email'));
        $this->addColumn("{{%user}}", "last_name", $this->string()->after('email'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', "first_name");
        $this->dropColumn('{{%user}}', "last_name");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220216_030836_add_first_name_last_name_to_user cannot be reverted.\n";

        return false;
    }
    */
}
