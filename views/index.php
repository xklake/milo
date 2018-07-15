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
                                $service = Yii::$app->getTextBlock('home-service-startupbiz');
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
                                $service = Yii::$app->getTextBlock('home-service-personalbiztax');
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
    
    <br><br><br>
</div><!-- CONTENT -->