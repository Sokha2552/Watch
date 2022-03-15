<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use Yii;
use yii\web\ForbiddenHttpException;

class ProfileController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,

                'rules' => [
                    [
                        'actions' => ['index', 'update-address', 'update-account'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        /** @var \common\models\user $user */
        $user = Yii::$app->user->identity;
        $userAddress = $user->getAddress();
        return $this->render('index', [
            'user' => $user,
            'userAddress' => $userAddress
        ]);
    }
    public function actionUpdateAddress()
    {
        /** @var \common\models\user $user */
        $user = Yii::$app->user->identity;
        $userAddress = $user->getAddress();

        $success = false;
        if ($userAddress->load(Yii::$app->request->post())) {
            if ($userAddress->save()) {
                $success = true;
            }
        }
        return $this->renderAjax('user_address', [
            'userAddress' => $userAddress,
            'success' => $success
        ]);
    }
    public function actionUpdateAccount()
    {
        if (!Yii::$app->request->isAjax) {
            throw new ForbiddenHttpException("You are allowed to make ajax request");
        }
        /** @var \common\models\user $user */
        $user = Yii::$app->user->identity;

        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            if ($user->save()) {
                $success = true;
            }
        }
        return $this->renderAjax('user_account', [
            'user' => $user,
            'success' => $success
        ]);
    }
}
