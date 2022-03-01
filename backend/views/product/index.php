<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="float-right">
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="clearfix"></div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'mt-3 table table-bordered',
        ],
        'layout' => '
            {items} 
            <div class="row mb-3">
                <div class="col-lg-4">
                    {summary} 
                </div>
                <div class="col-lg-6">
                    {pager} 
                </div>
            </div>
        ',
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id',
                'contentOptions' => [
                    'style' => 'width: 70px'
                ]
            ],
            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return $model->category->name;
                }
            ],
            [
                'attribute' => 'name',
                'contentOptions' => [
                    'style' => 'width: 150px'
                ]
            ],
            // 'description:ntext',
            [
                'label' => 'Image',
                'attribute' => 'image_url',
                'content' => function ($model) {
                    /** @var \backend\models\Product $model */
                    return Html::img($model->getImageUrl(), ['style' => 'width: 50px ']);
                },
                'contentOptions' => [
                    'style' => 'width:140px'
                ]
            ],
            [
                'attribute' => 'price',
                'contentOptions' => [
                    'style' => 'width: 140px'
                ]
            ],
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    /** @var \backend\models\Product $model */
                    return Html::tag('span', $model->status ? 'Active' : 'Craft', [
                        'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                    ]);
                },
                'contentOptions' => [
                    'style' => 'width:80px'
                ]
            ],
            [
                'attribute' => 'created_at',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space:nowrap'],
                'contentOptions' => [
                    'style' => 'width:140px'
                ]
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space:nowrap'],
                'contentOptions' => [
                    'style' => 'width:140px'
                ]
            ],
            //'created_by',
            //'updated_by',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'header' => 'Action',
                'contentOptions' => [
                    'style' => 'width:140px'
                ]
            ],
        ],
    ]); ?>


</div>