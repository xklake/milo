<div class="content">

    <section class="full-section full-screen parallax" style="background-image:url(/images/backgrounds/bg-6.jpg);">
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

                        <p class="text-center"><a class="btn btn-default" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>60])?>">
                                <?=Yii::t('app', 'Free quotation')?> <i class="fa fa-arrow-right"></i></a></p>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- full-section-content -->
    </section><!-- full-section -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="headline style-3">
                    <h2>Services</h2>
                    
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
            <div class="col-sm-4">

                <div class="services-boxes style-2 wow fadeInDown">

                    <div class="services-boxes-content">

                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>53])?>">ACCOUNTING AND TAX SOLUTIONS</a>
                            <small>---------------------</small>
                        </h3>

                        <p>
                            <?php 
                                $service = Yii::$app->getTextBlock('home-service-accounting');
                                if($service){
                                    echo($service->content);
                                }                            
                            ?>
                        </p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->

            </div><!-- col -->
            <div class="col-sm-4">

                <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="services-boxes-content">

                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>54])?>">Company Secretarial Services</a>
                            <small>---------------------</small>
                        </h3>

                        <p>
                            <?php 
                                $service = Yii::$app->getTextBlock('home-service-companysecretarialservices');
                                if($service){
                                    echo($service->content);
                                }                            
                            ?>
                        </p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->
            </div><!-- col -->

            <div class="col-sm-4">
                <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                    <div class="services-boxes-content">

                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>55])?>">Business Start-up and Development</a>
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
            
            <div class="col-sm-4">
                <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                    <div class="services-boxes-content">
                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>56])?>">Personal & Business Tax</a>
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
            <?php 
                $service = Yii::$app->getTextBlock('home-service-non-domicile');            
                if($service){ ?>
                    <div class="col-sm-4">
                        <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                            <div class="services-boxes-content">
                                <h3>
                                    <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>64])?>">NON-DOMICILED INDIVIDUALS</a>
                                    <small>---------------------</small>
                                </h3>
                                <p>
                                    <?=$service->content ?>
                                </p>
                            </div><!-- services-boxes-content -->
                        </div><!-- services-boxes -->                                                
                    </div><!-- col -->          
            <?php } ?>
            
            <div class="col-sm-4">
                <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                    <div class="services-boxes-content">
                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>57])?>">Property Tax</a>
                            <small>---------------------</small>
                        </h3>

                        <p>
                            <?php 
                                $service = Yii::$app->getTextBlock('home-service-propertytax');
                                if($service){
                                    echo($service->content);
                                }                            
                            ?>
                        </p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->                                                
            </div><!-- col -->
            
            <div class="col-sm-4">
                <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                    <div class="services-boxes-content">
                        <h3>
                            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>58])?>">Inheritance Tax</a>
                            <small>---------------------</small>
                        </h3>
                        <p>
                            <?php
                            $service = Yii::$app->getTextBlock('home-service-inheritancetax');
                            if ($service) {
                                echo($service->content);
                            }
                            ?>
                        </p>
                    </div><!-- services-boxes-content -->
                </div><!-- services-boxes -->                                                
            </div><!-- col -->
            
            <?php 
                $service = Yii::$app->getTextBlock('home-service-estatewills');            
                if($service){ ?>
                    <div class="col-sm-4">
                        <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                            <div class="services-boxes-content">
                                <h3>
                                    <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>63])?>">ESTATES & WILLS</a>
                                    <small>---------------------</small>
                                </h3>
                                <p>
                                    <?=$service->content ?>
                                </p>
                            </div><!-- services-boxes-content -->
                        </div><!-- services-boxes -->                                                
                    </div><!-- col -->          
            <?php } ?>
                    
                    
            <?php 
                $service = Yii::$app->getTextBlock('home-service-vat');            
                if($service){ ?>
                    <div class="col-sm-4">
                        <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                            <div class="services-boxes-content">
                                <h3>
                                    <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>61])?>">VAT AND INDIRECT TAX</a>
                                    <small>---------------------</small>
                                </h3>
                                <p>
                                    <?=$service->content ?>
                                </p>
                            </div><!-- services-boxes-content -->
                        </div><!-- services-boxes -->                                                
                    </div><!-- col -->          
            <?php } ?>                    
        </div><!-- row -->
    </div><!-- ontainer --> 
    
    <br><br><br>
</div><!-- CONTENT -->