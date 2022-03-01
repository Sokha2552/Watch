<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "oder_items".
 *
 * @property int $id
 * @property string $product_name
 * @property int $product_id
 * @property float $unit_price
 * @property int $order_id
 * @property int|null $quantity
 *
 * @property Oders $order
 * @property Product $product
 */
class OderItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oder_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_id', 'unit_price', 'order_id'], 'required'],
            [['product_id', 'order_id', 'quantity'], 'integer'],
            [['unit_price'], 'number'],
            [['product_name'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Oders::class, 'targetAttribute' => ['order_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'product_id' => 'Product ID',
            'unit_price' => 'Unit Price',
            'order_id' => 'Order ID',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Oders::class, ['id' => 'order_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
