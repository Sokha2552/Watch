<?php

/** @var \common\models\User $user */
/** @var \yii\web\View $this */

/** @var \backend\models\UserAddress $userAddress  */


use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\widgets\Pjax;

?>
<style>
    .btn1 {
        font-family: "Josefin Sans", sans-serif;
        text-transform: uppercase;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 0.03em;
        padding: 20px 18px;
        border-radius: 5px;
        display: inline-block;
        line-height: 0;
        cursor: pointer;
        margin-bottom: 0;
        margin: 10px;
        cursor: pointer;
        transition: color 0.4s linear;
        position: relative;
        z-index: 1;
        -moz-user-select: none;
        border: 0;
        overflow: hidden;
        margin: 0;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Address Information
                </div>
                <div class="card-body">
                    <?php Pjax::begin([
                        'enablePushState' => false
                    ]) ?>
                    <?= $this->render('user_address', [
                        'userAddress' => $userAddress
                    ]) ?>
                    <?php Pjax::end() ?>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Account Information
                </div>
                <div class="card-body">
                    <?php Pjax::begin([
                        'enablePushState' => false
                    ]) ?>
                    <?= $this->render('user_account', [
                        'user' => $user
                    ]) ?>
                    <?php Pjax::end() ?>
                </div>
            </div>
        </div>
    </div>
</div>