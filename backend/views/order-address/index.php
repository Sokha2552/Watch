<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderAddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-address-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Address', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'address',
            'city',
            'state',
            'country',
            //'zipcode',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OrderAddress $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'order_id' => $model->order_id]);
                 }
            ],
        ],
    ]); ?>


</div>
