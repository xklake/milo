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

                        <p class="text-center"><a class="btn btn-default" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>60])?>">Free quotation <i class="fa fa-arrow-right"></i></a></p>

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
                    <h5>
                        <?php 
                            $subtitle = Yii::$app->getTextBlock('home-service-subtitle');
                            if($subtitle){
                                echo($subtitle->content);
                            }
                        ?>
                    </h5>
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
                            <a href="single-service.html">Accounting, Tax & trust Solutions </a>
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
                            <a href="single-service.html">Company Secretarial Services</a>
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
                            <a href="single-service.html">Business Start-up & Development</a>
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
                            <a href="single-service.html">Personal & Business Tax</a>
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
            
            
            <div class="col-sm-4">
                <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">
                    <div class="services-boxes-content">
                        <h3>
                            <a href="single-service.html">Property Tax</a>
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
                            <a href="single-service.html">Inheritance Tax</a>
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
        </div><!-- row -->
    </div><!-- ontainer --> 

    <section class="full-section parallax" id="section-9">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center" style="font-size: 3rem;margin-bottom: 60px;">OUR QUALIFICATION
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="counter">
                    </div><!-- counter -->
                </div><!-- col -->
                
                <?php 
                    $images = Yii::$app->getImageByGroup('qualification');
                    foreach ($images as $img) {
                ?>
                    <div class="col-sm-3">
                        <div class="counter">
                            <div>
                                <img src="<?='/'.$img->image?>">
                            </div>
                            <div class="counter-details">
                                <p><?= strtoupper($img->name)?></p>
                            </div><!-- counter-details -->
                        </div><!-- counter -->
                    </div><!-- col -->
                <?php } ?>

                <div class="col-sm-3">
                    <div class="counter">
                    </div><!-- counter -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- ontainer -->
    </section><!-- fullsection -->

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="headline style-1">
                    <h2>About IFS</h2>
                </div><!-- headline -->

                <div id="realcontent">
                    <?php 
                        $aboutifs = Yii::$app->getHtmlBlock('home-aboutifs');
                        if ($aboutifs) {
                            echo($aboutifs->content);
                        }
                    ?>
                </div>
                <br/>
            </div><!-- col -->

            <div class="col-sm-6">
                <p class="text-center wow pulse animated" style="visibility: visible; animation-name: pulse;">
                    <?php 
                        $img = Yii::$app->getImages('aboutifs');
                        if($img){ 
                    ?>
                        <img src="<?='/'.$img->image?>" alt="">
                    <?php } ?>
                </p>
            </div>
        </div>
    </div>
    
    <br><br><br>
</div><!-- CONTENT -->