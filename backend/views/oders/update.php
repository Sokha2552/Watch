<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Oders */

$this->title = 'Update Oders: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
