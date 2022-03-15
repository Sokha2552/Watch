<?php

use yii\bootstrap4\ActiveForm;
use yii\widgets\Pjax;

/** @var \backend\models\UserAddress $userAddress  */
/** @var \yii\web\View $this */

?>

<?php if (isset($success) && $success) : ?>
    <div class="alert alert-success">
        Your address was successfully update!
    </div>
<?php endif ?>
<?php $addressForm = ActiveForm::begin([
    'action' => ['/profile/update-address'],
    'options' => [
        'data-pjax' => 1
    ]
]); ?>
<?= $addressForm->field($userAddress, 'address') ?>
<?= $addressForm->field($userAddress, 'city') ?>
<?= $addressForm->field($userAddress, 'state') ?>
<?= $addressForm->field($userAddress, 'country') ?>
<?= $addressForm->field($userAddress, 'zipcode') ?>
<button class="btn1 btn-primary">Update</button>
<?php ActiveForm::end(); ?>