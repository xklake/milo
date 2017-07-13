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

                        <p class="text-center"><a class="btn btn-default" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>60])?>">A free quotation <i class="fa fa-arrow-right"></i></a></p>

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
                    <h5>All in one</h5>
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
                            <a href="single-service.html">Retina Ready</a>
                            <small>Nice &amp; Clean</small>
                        </h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem 
                            aperiam, eaque ipsa.</p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->

            </div><!-- col -->
            <div class="col-sm-4">

                <div class="services-boxes style-2 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="services-boxes-content">

                        <h3>
                            <a href="single-service.html">E-commerce</a>
                            <small>New project</small>
                        </h3>

                        <p>Praesent volutpat libero justo, ac ornare dui aliquet fermentum. Suspendisse dolor tellus, cursus at sapien ac 
                            porttitor sed nibh.</p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->

            </div><!-- col -->
            <div class="col-sm-4">

                <div class="services-boxes style-2 wow wow fadeInDown" data-wow-delay="0.6s">

                    <div class="services-boxes-content">

                        <h3>
                            <a href="single-service.html">Web developing</a>
                            <small>We are the best</small>
                        </h3>

                        <p>Quisque pharetra egestas libero ut congue. Curabitur justo enim, malesuada quis purus eget, porta porttitor mauris
                            dolor amet.</p>

                    </div><!-- services-boxes-content -->

                </div><!-- services-boxes -->                                                

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- ontainer --> 

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <p class="text-center wow pulse"><a class="btn btn-default" href="#">Join us</a></p>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- ontainer -->

    <section class="full-section parallax" id="section-9">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="counter">

                        <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>

                        <div class="counter-value" data-value="139"></div>

                        <div class="counter-details">
                            <p>Satisfied clients</p>
                        </div><!-- counter-details -->

                    </div><!-- counter -->

                </div><!-- col -->
                <div class="col-sm-3">

                    <div class="counter">

                        <i class="miu-icon-editor_alarm_clock_outline_stroke"></i>

                        <div class="counter-value" data-value="24"></div>

                        <div class="counter-details">
                            <p>Hours a day</p>
                        </div><!-- counter-details -->

                    </div><!-- counter -->

                </div><!-- col -->
                <div class="col-sm-3">

                    <div class="counter">

                        <i class="miu-icon-editor_setting_gear_outline_stroke"></i>

                        <div class="counter-value" data-value="1127"></div>

                        <div class="counter-details">
                            <p>Project in work</p>
                        </div><!-- counter-details -->

                    </div><!-- counter -->

                </div><!-- col -->
                <div class="col-sm-3">

                    <div class="counter">

                        <i class="miu-icon-editor_documents_files_outline_stroke"></i>

                        <div class="counter-value" data-value="253"></div>

                        <div class="counter-details">
                            <p>Employes</p>
                        </div><!-- counter-details -->

                    </div><!-- counter -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- ontainer -->
    </section><!-- fullsection -->

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <div class="headline style-1">

                    <h4>Skills</h4>
                    <h2>Progress</h2>

                </div><!-- headline -->

                <div class="progress">                        
                    <div class="progress-bar" data-width="90"></div>
                </div><!-- progess -->

                <div class="progress-bar-title">
                    <h5>Marketing <span style="left:90%">90%</span></h5>
                </div><!-- progress-bar-title -->

                <div class="progress">                        
                    <div class="progress-bar" data-width="95"></div>
                </div><!-- progess -->

                <div class="progress-bar-title">
                    <h5>Design <span style="left:95%">95%</span></h5>
                </div><!-- progress-bar-title -->

                <div class="progress">                        
                    <div class="progress-bar" data-width="85"></div>
                </div><!-- progess -->

                <div class="progress-bar-title">
                    <h5>Team work <span style="left:85%">85%</span></h5>
                </div><!-- progress-bar-title -->

            </div><!-- col -->
            <div class="col-sm-4">

                <div class="headline style-1">

                    <h4>Some text</h4>
                    <h2>Our Work</h2>

                </div><!-- headline -->

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Praesent et justo 
                    vitae nunc venenatis. </p>

            </div><!-- col -->
            <div class="col-sm-4">

                <div class="headline style-1">

                    <h4>Checklist</h4>
                    <h2>The List</h2>

                </div><!-- headline -->

                <ul class="check-list">
                    <li>Nullam commodo sapien ac</li>
                    <li>Fusce et turpis massa sed</li>
                    <li>Quisque vel elit ac omis</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Ut enim ad minim veniam</li>
                    <li>Praesent ullamco laboris</li>
                </ul>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <br><br><br>

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

    <section class="full-section parallax" id="section-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="headline style-2">	

                        <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>
                        <h2>What people say</h2>

                    </div><!-- headline -->

                    <div class="testimonial-slider">
                        <ul>
                            <li>
                                <div class="testimonial">

                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                                            aliquip ex ea commodo consequat.</p>
                                    </blockquote> 

                                    <h5>John Smith, Crazytown inc.</h5>                        

                                </div><!-- testimonial -->
                            </li>
                            <li>
                                <div class="testimonial">

                                    <blockquote>
                                        <p>Quisque neque orci, dictum eu egestas eget, porta vel dolor. Etiam vel nunc pulvinar, suscipit urna 
                                            sit amet, efficitur nibh. Nulla convallis ut lectus a tempor. Nullam tincidunt pulvinar sodales. Nunc 
                                            sed erat et risus luctus sollicitudin.</p>
                                    </blockquote> 

                                    <h5>Jane Smith, MiloBrand</h5>                        

                                </div><!-- testimonial -->
                            </li>
                            <li>
                                <div class="testimonial">

                                    <blockquote>
                                        <p>Phasellus finibus erat non ligula semper tempor. Curabitur augue lacus, mattis id enim vehicula, 
                                            dictum sollicitudin arcu. Cras sodales dolor quis ligula hendrerit, auctor dapibus nibh sagittis. Sed 
                                            congue, purus semper dapibus sagittis arcu.</p>
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

                    <h5>Millo</h5>
                    <h2>Blog</h2>
                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum</p>

                </div><!-- headline -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- ontainer -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="isotope col-3 clearfix">

                    <div class="isotope-item">

                        <div class="blog-article wow fadeIn">

                            <div class="blog-article-thumbnail"> 

                                <img src="images/blog/image-8.jpg" alt="">                                

                                <div class="blog-article-hover">
                                    <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-8.jpg"><i class="fa fa-eye"></i></a>
                                </div><!-- blog-article-hover -->

                            </div><!-- blog-article-thumbnail -->

                            <div class="blog-article-details">

                                <h6>5 March 2015</h6>
                                <h4><a href="blog-post.html">Design: from thought to print</a></h4>

                                <p>
                                    <i class="miu-icon-business_namecard_contact_info_outline_stroke"></i>
                                    <a href="#">Jane Smith</a><br class="visible-xs">
                                    <i class="miu-icon-editor_folder_add_outline_stroke"></i>
                                    <a href="#">Design</a>, <a href="#">Web design</a><br class="visible-xs">
                                    <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>
                                    <a href="#">2</a>
                                </p>

                            </div><!-- blog-article-details -->

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                                aliqua. </p>

                            <a class="btn btn-default" href="blog-post.html">Read more</a>

                        </div><!-- blog-article -->

                    </div><!-- isotope-item -->

                    <div class="isotope-item">

                        <div class="blog-article wow fadeIn" data-wow-delay="0.3s">

                            <div class="blog-article-thumbnail"> 

                                <img src="images/blog/image-9.jpg" alt="">                                

                                <div class="blog-article-hover">
                                    <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-9.jpg"><i class="fa fa-eye"></i></a>
                                </div><!-- blog-article-hover -->

                            </div><!-- blog-article-thumbnail -->

                            <div class="blog-article-details">

                                <h6>4 March 2015</h6>
                                <h4><a href="blog-post.html">2015 new design trends</a></h4>

                                <p>
                                    <i class="miu-icon-business_namecard_contact_info_outline_stroke"></i>
                                    <a href="#">Jane Smith</a><br class="visible-xs">
                                    <i class="miu-icon-editor_folder_add_outline_stroke"></i>
                                    <a href="#">Design</a>, <a href="#">Web design</a><br class="visible-xs">
                                    <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>
                                    <a href="#">4</a>
                                </p>

                            </div><!-- blog-article-details -->

                            <p>Donec mollis dapibus est, eget convallis mauris finibus consectetur. Fusce nibh nunc, sagittis at tincidunt vitae, 
                                sagittis a felis.</p>

                            <a class="btn btn-default" href="blog-post.html">Read more</a>

                        </div><!-- blog-article -->

                    </div><!-- istope-item -->

                    <div class="isotope-item">

                        <div class="blog-article wow fadeIn" data-wow-delay="0.6s">

                            <div class="blog-article-thumbnail">   

                                <img src="images/blog/image-10.jpg" alt="">                                

                                <div class="blog-article-hover">
                                    <a class="fancybox-blog-gallery zoom-action" href="images/blog/image-10.jpg"><i class="fa fa-eye"></i></a>
                                </div><!-- blog-article-hover -->

                            </div><!-- blog-article-thumbnail -->

                            <div class="blog-article-details">

                                <h6>3 March 2015</h6>
                                <h4><a href="blog-post.html">interview with a great designer</a></h4>

                                <p>
                                    <i class="miu-icon-business_namecard_contact_info_outline_stroke"></i>
                                    <a href="#">Jane Smith</a><br class="visible-xs">
                                    <i class="miu-icon-editor_folder_add_outline_stroke"></i>
                                    <a href="#">Design</a>, <a href="#">Web design</a><br class="visible-xs">
                                    <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>
                                    <a href="#">3</a>
                                </p>

                            </div><!-- blog-article-details -->

                            <p>Donec nec egestas dolor, sit amet dignissim justo. Donec aliquam sit amet magna quis ultricies. Aenean bibendum 
                                felis dui dolor. </p>

                            <a class="btn btn-default" href="blog-post.html">Read more</a>

                        </div><!-- blog-article -->

                    </div><!-- istope-item -->

                </div><!-- isotope -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <p class="text-center"><a class="btn btn-white load-more" href="more-blog-articles.html">Load more</a></p>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <ul class="logos clearfix">
                    <li><img src="images/logos/image-1.png" alt=""></li>
                    <li><img src="images/logos/image-2.png" alt=""></li>
                    <li><img src="images/logos/image-3.png" alt=""></li>
                    <li><img src="images/logos/image-4.png" alt=""></li>
                    <li><img src="images/logos/image-5.png" alt=""></li>
                </ul>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <br><br><br>

</div><!-- CONTENT -->