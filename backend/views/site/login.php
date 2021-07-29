
<?php
// use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
// use backend\assets\LoginXtrayAsset;

// dmstr\web\AdminLteAsset::register($this);
// LoginXtrayAsset::register($this);

// LoginXtrayAsset::register($this);
$imgPath = Yii::getAlias('@web');

// var_dump($imgPath2);
?>

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
            <h1 class="mb-0">Sign in</h1>
            <p>Enter your email address and password to access admin panel.</p>
            <form class="mt-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <!-- input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email"> -->
                    <?= Html::activeInput('text', $model, 'username', ['class' => 'form-control mb-0',  'placeholder' => 'User Name']) ?>
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputPassword1">Password</label> -->
                    <!-- <a href="#" class="float-right">Forgot password?</a> -->
                    <!-- input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password"> -->
                    <!-- ?= Html::activeInput('password', $model, 'password', ['class' => 'form-control mb-0','placeholder' => 'Password']) ?> -->

                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <!-- ?= Html::checkbox('reveal-password', false, ['id' => 'my-password-field-id']) ?>  -->
                    <!-- ?= Html::label('Show password', 'reveal-password') ?> -->
                </div>
                               <!--  <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign in</button>
                                </div> -->
                                <div class="sign-info">
                                   
                                  <!--   <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul> -->
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign in</button>

                                </div>
                                <div class="sign-info">

                                 <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="signup">Sign up</a></span>
                             </div>

                            </form>
                        </div>
                    </div>
                </div>


                <?php ActiveForm::end(); ?>
                <br>
                <?php if (Yii::$app->session->hasFlash('failure')): ?>
                    <div class="alert alert-warning" style="font-size: 16px;">
                        <center><?= Yii::$app->session->getFlash('failure') ?></center>
                    </div>
                <?php endif; ?>
                <!-- Sign in END -->
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->




            </body>
            </html>

            <?php $this->endPage() ?>