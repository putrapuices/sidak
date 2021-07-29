<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;

$imgPath = Yii::getAlias('@web');

?>

  <?= Yii::$app->session->getFlash('msg') ?>

<?php $this->beginPage() ?>

<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
      <?php
$this->registerJs("jQuery('#reveal-password').change(function(){jQuery('#loginform-password').attr('type',this.checked?'text':'password');})");
?>



   <body>
      <!-- loader Start -->
     
      <!-- loader END -->
        <!-- Sign in Start -->
          

                  <form class="login100-form validate-form" action=" " method="POST">


            <?php $form = ActiveForm::begin(['class' => 'login100-form validate-form']); ?>
               <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#">
                              <!-- img src="images/logo-white.png" class="img-fluid" alt="logo"> -->
                              <?=Html::img($imgPath.'/themes2/images/logo-white.png',['class'=>'img-fluid'],['alt'=>'logo']); ?>

                            </a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <!-- img src="images/login/1.png" class="img-fluid mb-4" alt="logo"> -->
                              <?=Html::img($imgPath.'/themes2/images/login/1.png',['class'=>'img-fluid mb-4 '],['alt'=>'logo']); ?>

                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <!-- img src="images/login/2.png" class="img-fluid mb-4" alt="logo"> -->
                              <?=Html::img($imgPath.'/themes2/images/login/2.png',['class'=>'img-fluid mb-4 '],['alt'=>'logo']); ?>

                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <!-- img src="images/login/3.png" class="img-fluid mb-4" alt="logo"> -->
                              <?=Html::img($imgPath.'/themes2/images/login/3.png',['class'=>'img-fluid mb-4 '],['alt'=>'logo']); ?>

                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign up</h1>
                            <p>Enter your email address and password to access admin panel.</p>
                            <form class="mt-4">

               <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('NIK') ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
                 <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="login">Sign in</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                </div>
            </form>
        </div>
    </div>

           <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
