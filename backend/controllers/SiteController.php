<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'captcha'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],

            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode'=> YII_ENV_TEST?'testme':null,
                'height' => 40,
                'width' => 80,
                'maxLength' => 4,
                'minLength' => 4,
                'offset' => -1,
                'testLimit' => 10,
                'backColor' => '0xEAEAEC',
            ],
        ];
    }

    public function actionIndex()
    {
        if(Yii::$app->user->can('backendLogin') == false){
            //need check whether the client can access backend
            Yii::$app->user->logout();

            $model = new \backend\models\LoginForm();
            $this->layout = 'guest';

            return $this->render('login', [
                'model' => $model,
            ]);
        }

        return $this->render('index');
    }

    public function actionError(){
        $this->layout = 'main';

        return $this->render('error', []);
    }

    public function actionLogin()
    {
        $this->layout = 'guest';

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new \backend\models\LoginForm();

        if ($model->load(Yii::$app->request->post())) {
            //need check whether the user has backend login auth


            if($model->login()) {
                if(Yii::$app->user->can('backendLogin') == false){
                    //need check whether the client can access backend
                    Yii::$app->user->logout();
                    return $this->render('login', [
                        'model' => $model,
                    ]);
                } else {
                    return $this->goBack();
                }
            }
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
