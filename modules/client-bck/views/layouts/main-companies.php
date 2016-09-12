<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
    //	print_r($this); die();
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
		<link rel="shortcut icon" type="image/png" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/favicon.png" >
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
       
    </head>
    <body class=" sidebar-mini skin-blue sidebar-collapse">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'header-companies.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left-companies.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content-companies.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <?php $this->endBody() ?>
	
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/input-mask/jquery.inputmask.extensions.js"></script>

<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/customfunctions.js"></script>


	
<!-- jQuery 2.1.4 -->


    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
