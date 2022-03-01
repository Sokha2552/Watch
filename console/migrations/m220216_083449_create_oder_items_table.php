<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%oder_items}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%product}}`
 * - `{{%oders}}`
 */
class m220216_083449_create_oder_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%oder_items}}', [
            'id' => $this->primaryKey(),
            'product_name' => $this->string(255)->notNull(),
            'product_id' => $this->integer(11)->notNull(),
            'unit_price' => $this->decimal(10, 2)->notNull(),
            'order_id' => $this->integer(11)->notNull(),
            'quantity' => $this->integer(2)->notNull(),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-oder_items-product_id}}',
            '{{%oder_items}}',
            'product_id'
        );

        // add foreign key for table `{{%product}}`
        $this->addForeignKey(
            '{{%fk-oder_items-product_id}}',
            '{{%oder_items}}',
            'product_id',
            '{{%product}}',
            'id',
            'CASCADE'
        );

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-oder_items-order_id}}',
            '{{%oder_items}}',
            'order_id'
        );

        // add foreign key for table `{{%oders}}`
        $this->addForeignKey(
            '{{%fk-oder_items-order_id}}',
            '{{%oder_items}}',
            'order_id',
            '{{%oders}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%product}}`
        $this->dropForeignKey(
            '{{%fk-oder_items-product_id}}',
            '{{%oder_items}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-oder_items-product_id}}',
            '{{%oder_items}}'
        );

        // drops foreign key for table `{{%oders}}`
        $this->dropForeignKey(
            '{{%fk-oder_items-order_id}}',
            '{{%oder_items}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-oder_items-order_id}}',
            '{{%oder_items}}'
        );

        $this->dropTable('{{%oder_items}}');
    }
}
