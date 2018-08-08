<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="content">
    <div id="page-header">  
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4><?= Yii::t('app', 'Our Team') ?></h4>
                </div><!-- col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li><a href="<?= Yii::$app->urlManager->getHostInfo() . Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Home') ?></a></li>
                        <li class="active"><?= Yii::t('app', 'Contact') ?></li>
                    </ol>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- ontainer -->    
    </div><!-- page-header -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="headline style-3">

                    <h5>North End Real Esate Investment</h5>
                    <h2>Meet our key team members</h2>
                    <p> Our management team and specialists</p>

                </div><!-- headline -->

            </div><!-- col -->
        </div><!-- row -->
    </div>

    <div class="container">
        <div class="row row-eq-height">

            <?php
                $members = \funson86\blog\models\BlogPost::find()->where(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])
                                ->andWhere(['catalog_id' => 59])
                                ->orderBy(['created_at' => SORT_DESC])->all();
                foreach ($members as $item) {
            ?>        
                    <div class="col-sm-4">

                        <div class="about-me wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">

                            <div class="about-me-thumbnail">

                                <img src="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->banner?>" alt="">

                                <div class="social-media">
                                        
                                    <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id' => $item->id])?>"> View</a>
                                    <!--a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a-->

                                </div><!-- social-media -->


                            </div><!-- about-me-thumbnail -->

                            <div class="about-me-details">

                                <h4><?=$item->title?></h4>
                                <h5><?=$item->keywords?></h5>

                            </div><!-- about-me-details -->

                        </div><!-- about-me -->
                    </div><!-- col -->
           <?php } ?>
        </div>
    </div>
</div>