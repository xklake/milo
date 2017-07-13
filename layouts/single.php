<?php
    use yii\helpers\Html;
    use frontend\web\template\milo\MiloAssets;
    MiloAssets::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <?php if(isset(Yii::$app->params['keywords'])){ ?>
        <meta name="keywords" content="<?= Html::encode(Yii::$app->params['keywords']) ?>" />
    <?php } ?>
        
    <?php if(isset(Yii::$app->params['description'])) { ?>    
        <meta name="description" content="<?= Html::encode(Yii::$app->params['description']) ?>" />
    <?php } ?>
    <meta name="author" content="http://chinasoftware.co.uk">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/images/icons/apple-touch-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/icons/apple-touch-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/icons/apple-touch-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/icons/apple-touch-144x144.png">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
    <title><?=$this->title?></title>
    <?php $this->head() ?>
</head><!--/head-->

<body class="sticky-header">
    <div id="page-wrapper">
        <?php $this->beginBody() ?>
        <?= $this->render('header.php') ?>
        <div class="content">
            <div id="page-header">  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Services</h4>
                        </div><!-- col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li><a href="<?=Yii::$app->urlManager->getHostInfo().Yii::$app->homeUrl?>">Home</a></li>
                                <li class="active">
                                    <?php 
                                        $currCatalog = Yii::$app->params['currentCatalog']; 
                                        if($currCatalog != null){
                                            echo($currCatalog->surname);
                                        }
                                    ?>
                                </li>
                            </ol>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- ontainer -->    
            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <?= $content ?>
                </div><!-- row -->
            </div>
        </div>
        <?= $this->render('footer.php') ?>
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <?php $this->endBody() ?>
    </div>
</body>

</html>
<?php $this->endPage() ?>
