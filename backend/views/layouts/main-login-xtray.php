
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
<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<!-- <head> -->
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <!-- <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title> -->
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" />
  <!-- Bootstrap CSS -->
  <!-- link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link href="/sidak/themes2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Typography CSS -->
  <!-- link rel="stylesheet" href="css/typography.css"> -->
  <link href="/sidak/themes2/css/typography.css" rel="stylesheet">

  <!-- Style CSS -->
  <!-- link rel="stylesheet" href="css/style.css"> -->
  <link href="/sidak/themes2/css/style.css" rel="stylesheet">

  <!-- Responsive CSS -->
  <!-- link rel="stylesheet" href="css/responsive.css"> -->
  <link href="/sidak/themes2/css/responsive.css" rel="stylesheet">

  <!-- </head> -->

  <!-- link rel="stylesheet" href="/kartu/themes2/css/bootstrap.min.css"> -->
  <!-- Typography CSS -->
  <!-- link rel="stylesheet" href="/kartu/themes2/css/typography.css"> -->
  <!-- Style CSS -->
  <!-- link rel="stylesheet" href="/kartu/themes2/css/style.css"> -->
  <!-- Responsive CSS -->
  <!-- link rel="stylesheet" href="/kartu/themes2/css/responsive.css"> -->


  <body>
    <!-- loader Start -->
    <div id="loading">
     <div id="loading-center">
     </div>
   </div>
   <!-- loader END -->
   <!-- Sign in Start -->
   <section class="sign-in-page">
    <div class="container sign-in-page-bg mt-5 p-0">


      <?php $this->beginPage() ?>
      <!DOCTYPE html>
      <html lang="<?= Yii::$app->language ?>">
      <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
      </head>
      <body class="blank">
        <?php $this->beginBody() ?>

        <div class="container">

          <div class="wrap">
            <?= $content ?>
          </div>

        </div>

        <?php $this->endBody() ?>
      </body>
      </html>
      <?php $this->endPage() ?>


      <div class="row no-gutters">
        <div class="col-md-6 text-center">

        </div>
        <div class="col-md-6 position-relative">

        </div>
      </div>
    </div>
  </section>



  <!-- Sign in END -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->



  <script src="/sidak/themes2/js/jquery.min.js"></script>
  <script src="/sidak/themes2/js/popper.min.js"></script>
  <script src="/sidak/themes2/js/bootstrap.min.js"></script>
  <!-- Appear JavaScript -->
  <script src="/sidak/themes2/js/jquery.appear.js"></script>
  <!-- Countdown JavaScript -->
  <script src="/sidak/themes2/js/countdown.min.js"></script>
  <!-- Counterup JavaScript -->
  <script src="/sidak/themes2/js/waypoints.min.js"></script>
  <script src="/sidak/themes2/js/jquery.counterup.min.js"></script>
  <!-- Wow JavaScript -->
  <script src="/sidak/themes2/js/wow.min.js"></script>
  <!-- Apexcharts JavaScript -->
  <script src="/sidak/themes2/js/apexcharts.js"></script>
  <!-- Slick JavaScript -->
  <script src="/sidak/themes2/js/slick.min.js"></script>
  <!-- Select2 JavaScript -->
  <script src="/sidak/themes2/js/select2.min.js"></script>
  <!-- Owl Carousel JavaScript -->
  <script src="/sidak/themes2/js/owl.carousel.min.js"></script>
  <!-- Magnific Popup JavaScript -->
  <script src="/sidak/themes2/js/jquery.magnific-popup.min.js"></script>
  <!-- Smooth Scrollbar JavaScript -->
  <script src="/sidak/themes2/js/smooth-scrollbar.js"></script>
  <!-- Chart Custom JavaScript -->
  <script src="/sidak/themes2/js/chart-custom.js"></script>
  <!-- Custom JavaScript -->
  <script src="/sidak/themes2/js/custom.js"></script>
</body>
</html>

<?php $this->endPage() ?>