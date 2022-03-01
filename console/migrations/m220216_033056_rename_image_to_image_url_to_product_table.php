<?php

use yii\db\Migration;

/**
 * Class m220216_033056_rename_image_to_image_url_to_product_table
 */
class m220216_033056_rename_image_to_image_url_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn("{{%product}}", 'image', 'image_url');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn("{{%product}}", "image_url",  "image");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220216_033056_rename_image_to_image_url_to_product_table cannot be reverted.\n";

        return false;
    }
    */
}
