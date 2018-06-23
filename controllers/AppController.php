<?php
/**
 * Created by PhpStorm.
 * User: twobomb
 * Date: 23.06.2018
 * Time: 17:40
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function actionError(){
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }
}