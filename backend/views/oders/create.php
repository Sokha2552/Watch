<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Oders */

$this->title = 'Create Oders';
$this->params['breadcrumbs'][] = ['label' => 'Oders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
