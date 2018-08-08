<div class="content">
    <div id="page-header">  
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4><?= Yii::t('app', 'OUR PROJECTS') ?></h4>
                </div><!-- col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li><a href="<?= Yii::$app->urlManager->getHostInfo() . Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Home') ?></a></li>
                        <li class="active"><?= Yii::t('app', 'OUR PROJECTS') ?></li>
                    </ol>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- ontainer -->    
    </div><!-- page-header -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="headline style-3">
                    <h2>Our Projects</h2>
                    
                    <?php 
                        $subtitle = Yii::$app->getTextBlock('home-our-projects');
                        if($subtitle){ ?>
                        <h5>
                            <?=$subtitle->content?>
                        </h5>
                    <?php } ?>
                </div><!-- headline -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- ontainer -->    
    
    <div class="container">
        <div class="row row-eq-height">
        <?php 
          $projects = \funson86\blog\models\BlogPost::find()->where(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])
            ->andWhere(['catalog_id' => 73])
            ->orderBy(['created_at' => SORT_DESC])->all();
            foreach($projects as $item){
        ?>
                <div class="col-md-3 col-sm-6">
                    <div class="portfolio-item wow fadeInLeft">

                        <div class="portfolio-item-thumbnail">

                            <img src="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->banner?>" alt="">

                            <div class="portfolio-item-hover">                                	                                    

                                <div class="portfolio-item-description">

                                    <h3><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id' => $item->id])?>"><?=$item->title?></a></h3>
                                    <h5><?=$item->keywords?></h5>

                                </div><!-- portfolio-item-description -->

                                <a class="fancybox-portfolio-gallery zoom-action" href="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->banner?>" ><!--i class="fa fa-plus"></i--></a>

                            </div><!-- portfolio-item-hover -->

                        </div><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                </div><!-- col -->
        <?php } ?>
        </div><!-- row -->
    </div><!-- container -->    
</div>