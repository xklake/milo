<div class="content">
    <section class="full-section full-screen" style="background-image:url(/images/backgrounds/bg-6.jpg);">
        <div class="full-section-content">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">	

                        <h1 class="text-center">
                            <?php 
                                $home_banner = Yii::$app->getTextBlock('home-banner');
                                if($home_banner != null)
                                {
                                    echo($home_banner->content);
                                }
                            ?>
                        </h1>

                        <br>

                        <p class="text-center"><a class="btn btn-default" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>60])?>">CONTACT US NOW<i class="fa fa-arrow-right"></i></a></p>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- full-section-content -->
    </section><!-- full-section -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="headline style-3">
                    <h2>Our Services</h2>
                    
                    <?php 
                        $subtitle = Yii::$app->getTextBlock('home-service-subtitle');
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
        <div class="row">
            <div class="col-sm-6">
                <div class="services-boxes style-2 wow fadeInDown">

                    <div class="services-boxes-content">

                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>67])?>">PROPERTY DEVELOPMENT</a>
                            <small>---------------------</small>
                        </h3>

                        <p>
                            <?php 
                                $service = Yii::$app->getTextBlock('development');
                                if($service){
                                    echo($service->content);
                                }                            
                            ?>
                        </p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->

            </div><!-- col -->
            <div class="col-sm-6">

                <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="services-boxes-content">

                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>68])?>">PROPERTY INVESTMENT</a>
                            <small>---------------------</small>
                        </h3>

                        <p>
                            <?php 
                                $service = Yii::$app->getTextBlock('investment');
                                if($service){
                                    echo($service->content);
                                }                            
                            ?>
                        </p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->
            </div><!-- col -->

            <div class="col-sm-6">
                <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                    <div class="services-boxes-content">

                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>69])?>">LAND INVESTMENT</a>
                            <small>---------------------</small>
                        </h3>

                        <p>
                            <?php 
                                $service = Yii::$app->getTextBlock('land');
                                if($service){
                                    echo($service->content);
                                }                            
                            ?>
                        </p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->                                                
            </div><!-- col -->
            
            <div class="col-sm-6">
                <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                    <div class="services-boxes-content">
                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>70])?>">INVESTMENT ADVISORS</a>
                            <small>---------------------</small>
                        </h3>
                        <p>
                            <?php 
                                $service = Yii::$app->getTextBlock('advisors');

                                if($service){
                                    echo($service->content);
                                }                            
                            ?>
                        </p>
                    </div><!-- services-boxes-content -->
                </div><!-- services-boxes -->                                                
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container --> 
    
    <section class="full-section parallax" id="section-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="headline style-2">	

                        <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>
                        <h2>Our key team members</h2>

                    </div><!-- headline -->

                    <div class="testimonial-slider">
                        <ul>
                            <?php  
                                $members = \funson86\blog\models\BlogPost::find()->where(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])
                                        ->andWhere(['catalog_id' => 59])
                                        ->orderBy(['created_at' =>SORT_DESC])->all();
                                foreach($members as $item){
                            ?>
                            <li>
                                <div class="testimonial">

                                    <blockquote>
                                        <p><?=$item->brief?></p>
                                    </blockquote> 
                                    
                                    <div style="margin-bottom: 30px;">
                                        <h5>Role & Certification</h5>
                                        <?=$item->keywords?>
                                    </div>    
                                    <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id' => $item->id])?>">
                                        <h5>
                                            <?=$item->title?>
                                        </h5>    
                                    </a>       

                                </div><!-- testimonial -->
                            </li>
                            <?php }?>
                        </ul>
                        <div id="thumb-pager">
                            <?php  
                            $index = 0;
                            foreach($members as $item) { 
                                
                            ?>
                            <a data-slide-index="<?=$index?>" href=""><img src="images/testimonials/image-<?=$index + 1?>.jpg" alt=""></a>
                            <?php  
                                $index ++;
                            } ?>
                        </div><!-- thumb-pager -->

                    </div><!-- testimonial-slider -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->             	
    </section><!-- full-section -->

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
        <?php 
          $projects = \funson86\blog\models\BlogPost::find()->where(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])
            ->andWhere(['catalog_id' => 73])
            ->orderBy(['created_at' => SORT_DESC])->all();
            foreach($projects as $item){
        ?>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="portfolio-item wow fadeInLeft">

                        <div class="portfolio-item-thumbnail">

                            <img src="/images/portfolio/image-1.jpg" alt="">

                            <div class="portfolio-item-hover">                                	                                    

                                <div class="portfolio-item-description">

                                    <h3><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id' => $item->id])?>"><?=$item->title?></a></h3>
                                    <h5><?=$item->keywords?></h5>

                                </div><!-- portfolio-item-description -->

                                <a class="fancybox-portfolio-gallery zoom-action" href="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->banner?>"><i class="fa fa-plus"></i></a>

                            </div><!-- portfolio-item-hover -->

                        </div><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                </div><!-- col -->
            </div><!-- row -->
        <?php } ?>
    </div><!-- container -->    
    
    <br><br><br>
</div><!-- CONTENT -->