<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OderItems */

$this->title = 'Update Oder Items: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oder Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oder-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
