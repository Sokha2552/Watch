<?php

/** @var array $items */

use yii\helpers\Html;
use yii\helpers\Url;
?>

<style>
    .btn1 {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn2 {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Your cart items</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>
                        <tr>
                            <td><?php echo $item['name'] ?></td>
                            <td>
                                <img src="<?php echo Yii::$app->params['frontendUrl'] . '/storage' . $item['image_url'] ?>" style="width: 50px;s" alt="<?php echo $item['name'] ?>">
                            </td>
                            <td><?php echo $item['price'] ?></td>
                            <td><?php echo $item['quantity'] ?></td>
                            <td><?php echo $item['total_price'] ?></td>
                            <td>
                                <?php echo Html::a('Delete', ['/cart/delete', 'id' => $item['id']], [
                                    'class' => 'btn1 btn-outline-danger btn-sm',
                                    'data-method' => 'post',
                                    'data-confirm' => 'Are you sure you want to remove this product from cart?'
                                ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="card-body text-right">
                <a href="<?php echo Url::to(['/cart/checkout']) ?>" class="btn2 btn-primary">Checkout</a>
            </div>
        </div>
    </div>
</div>