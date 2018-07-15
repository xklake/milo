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
                                <li>
                                <div class="testimonial">

                                    <blockquote>
                                        <p>TEAM MEMBER 1, TEAM MEMBER 1, TEAM MEMBER 1, TEAM MEMBER 1, TEAM MEMBER 1, </p>
                                    </blockquote> 

                                    <h5>John Smith</h5>                        

                                </div><!-- testimonial -->
                            </li>
                            <li>
                                <div class="testimonial">

                                    <blockquote>
                                        <p>TEAM MEMBER 2, TEAM MEMBER 2TEAM MEMBER 2TEAM MEMBER 2TEAM MEMBER 2TEAM MEMBER 2</p>
                                    </blockquote> 

                                    <h5>Jane Smith, MiloBrand</h5>                        

                                </div><!-- testimonial -->
                            </li>
                            <li>
                                <div class="testimonial">

                                    <blockquote>
                                        <p>TEAM MEMBER 3，TEAM MEMBER 3TEAM MEMBER 3TEAM MEMBER 3TEAM MEMBER 3TEAM MEMBER 3</p>
                                    </blockquote> 

                                    <h5>Paul Willson, The Muse</h5>                        

                                </div><!-- testimonial -->
                            </li>
                        </ul>
                        <div id="thumb-pager">
                            <a data-slide-index="0" href=""><img src="images/testimonials/image-1.jpg" alt=""></a>
                            <a data-slide-index="1" href=""><img src="images/testimonials/image-2.jpg" alt=""></a>
                            <a data-slide-index="2" href=""><img src="images/testimonials/image-3.jpg" alt=""></a>
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
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item wow fadeInLeft">

                    <div class="portfolio-item-thumbnail">

                        <img src="images/portfolio/image-1.jpg" alt="">

                        <div class="portfolio-item-hover">                                	                                    

                            <div class="portfolio-item-description">

                                <h3><a href="portfolio-single.html">Vector design</a></h3>
                                <h5>Industrial design</h5>

                            </div><!-- portfolio-item-description -->

                            <a class="fancybox-portfolio-gallery zoom-action" href="images/portfolio/image-1.jpg"><i class="fa fa-plus"></i></a>

                        </div><!-- portfolio-item-hover -->

                    </div><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

            </div><!-- col -->
            <div class="col-md-3 col-sm-6">

                <div class="portfolio-item wow fadeInLeft" data-wow-delay="0.3s">

                    <div class="portfolio-item-thumbnail">

                        <img src="images/portfolio/image-2.jpg" alt="">

                        <div class="portfolio-item-hover">                                	                                    

                            <div class="portfolio-item-description">

                                <h3><a href="portfolio-single.html">Lamp design</a></h3>
                                <h5>Industrial design</h5>

                            </div><!-- portfolio-item-description -->

                            <a class="fancybox-portfolio-gallery zoom-action" href="images/portfolio/image-2.jpg"><i class="fa fa-plus"></i></a>

                        </div><!-- portfolio-item-hover -->

                    </div><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

            </div><!-- col -->
            <div class="col-md-3 col-sm-6">

                <div class="portfolio-item wow fadeInRight" data-wow-delay="0.3s">

                    <div class="portfolio-item-thumbnail">

                        <img src="images/portfolio/image-3.jpg" alt="">

                        <div class="portfolio-item-hover">                                	                                    

                            <div class="portfolio-item-description">

                                <h3><a href="portfolio-single.html">Modern lamp</a></h3>
                                <h5>Industrial design</h5>

                            </div><!-- portfolio-item-description -->

                            <a class="fancybox-portfolio-gallery zoom-action" href="images/portfolio/image-3.jpg"><i class="fa fa-plus"></i></a>

                        </div><!-- portfolio-item-hover -->

                    </div><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

            </div><!-- col -->
            <div class="col-md-3 col-sm-6">

                <div class="portfolio-item wow fadeInRight">

                    <div class="portfolio-item-thumbnail">

                        <img src="images/portfolio/image-4.jpg" alt="">

                        <div class="portfolio-item-hover">                                	                                    

                            <div class="portfolio-item-description">

                                <h3><a href="portfolio-single.html">Vitamin</a></h3>
                                <h5>Industrial design</h5>

                            </div><!-- portfolio-item-description -->

                            <a class="fancybox-portfolio-gallery zoom-action" href="images/portfolio/image-4.jpg"><i class="fa fa-plus"></i></a>

                        </div><!-- portfolio-item-hover -->

                    </div><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->    
    
    <br><br><br>
</div><!-- CONTENT -->