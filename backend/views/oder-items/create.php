<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OderItems */

$this->title = 'Create Oder Items';
$this->params['breadcrumbs'][] = ['label' => 'Oder Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oder-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
