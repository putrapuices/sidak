<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\SignupForm;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login','signup', 'error'],
                        'allow' => true,
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
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'main-login-xtray';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

      public function actionSignup()
    {

        $this->layout = 'main-login-xtray';
        
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {



              $params = [
              "nik"=>$model->username,
              "user_id"=>"1010201912196devi",
              "password"=>"acxkom1377",
              "ip_user"=>Yii::$app->getRequest()->getUserIP(),
            ];
            $curl = new \linslin\yii2\curl\Curl();
            $apiUrl = 'http://172.16.160.43:8080/dukcapil/get_json/13-77/1377_diskominfo/adm_desa';
           $getAPI = $curl->setRequestBody(json_encode($params))
                ->setHeaders([
                    'Content-Type' => 'application/json; charset=UTF-8',
                 ])
                ->post($apiUrl);
            $rest = json_decode($getAPI,true);
            // var_dump($rest);die();


            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
     }

    //  public function actionSignup()
    // {
    //     // if (!Yii::$app->user->isGuest) {
    //     //     return $this->goHome();
    //     // }

    //     $this->layout = 'main-login-xtray';

    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     } else {
    //         $model->password = '';

    //         return $this->render('signup', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
