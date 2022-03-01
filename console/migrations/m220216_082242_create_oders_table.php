<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%oders}}`.
 */
class m220216_082242_create_oders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%oders}}', [
            'id' => $this->primaryKey(),
            'total_price' => $this->decimal(10, 2)->notNull(),
            'status' => $this->tinyInteger(1)->notNull(),
            'firstname' => $this->string(45)->notNull(),
            'lastname' => $this->string(45)->notnull(),
            'email' => $this->string(255)->notNull(),
            'transaction_id' => $this->string(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
        ]);
        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-oders-created_by}}',
            '{{%oders}}',
            'created_by'
        );

        // add foreign key for table `{{%orders}}`
        $this->addForeignKey(
            '{{%fk-oders-created_by}}',
            '{{%oders}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%orders}}`
        $this->dropForeignKey(
            '{{%fk-oders-created_by}}',
            '{{%cart_items}}',
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-oders-created_by}}',
            '{{%cart_items}}',
        );

        $this->dropTable('{{%oders}}');
    }
}
