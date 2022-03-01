<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OderItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oder Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oder-items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Oder Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_name',
            'product_id',
            'unit_price',
            'order_id',
            //'quantity',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OderItems $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
