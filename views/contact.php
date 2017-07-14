<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:18 PM
 */
?>
        <div class="content">
            
            <div id="page-header">  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Contact</h4>
                        </div><!-- col -->

                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- ontainer -->    
            </div><!-- page-header -->
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="headline style-3">
                            <h5>Say hello</h5>
                            <h2>Contact our team</h2>
                            <p> We will get back to you asap.</p>
                        </div><!-- headline -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-6">
                        <form id="contact-form" name="contact-form" action="assets/php/send.php" method="post">
                            <fieldset>
                                <div id="alert-area"></div>
                                <input class="col-xs-12" id="name" type="text" name="name" placeholder="name">
                                <input class="col-xs-12" id="email" type="text" name="email" placeholder="email">
                                <input class="col-xs-12" id="subject" type="text" name="subject" placeholder="subject">
                                <textarea class="col-xs-12" id="message" name="message" rows="8" cols="25" placeholder="message"></textarea>
                                <input class="btn btn-default" id="submit" type="submit" name="submit" value="Submit">
                            </fieldset>
                        </form>
                    </div><!-- col -->
                    <div class="col-sm-5">
                    	
                        <div class="widget widget-contact">
                        	
                            <h3 class="widget-title">Contact Information</h3>
                            <ul>
                                <li>
                                	<span>Office Main Contact</span> <br/>                                
                                    <a href="telto:<?=Yii::$app->setting->get('mobile')?>">
                                        <?php echo(Yii::$app->setting->get('mobile')) ?>
                                    </a><br/>
                                    <a href="mailto:<?=Yii::$app->setting->get('email')?>"><?=Yii::$app->setting->get('email')?></a><br/><br/>
                                    <?php echo(Yii::$app->setting->get('address')) ?>
                                </li>
                                
                                <li>
                                  <span>CONTACT A MEMBER</span><br/>
                                        <?php 
                                            $members = common\models\Product::find()->where(['status' => funson86\blog\models\Status::STATUS_ACTIVE])->all();
                                            foreach($members as $item){
                                        ?>
                                                <span><?=$item['name']?></span>                                    
                                                <?= $item['content']?>
                                                <br/>
                                        <?php } ?>
                                </li>
                            </ul>
                        </div><!-- widget-contact -->
                    </div><!-- col -->
                </div><!-- row --> 
            </div><!-- container -->
            
            <div class="container-fluid">
                <div class="row">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9087491777095!2d-0.1257258843067004!3d51.51489007963633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ccab26369b%3A0xcbca337b01407c64!2s75+Shelton+St%2C+London+WC2H+9JQ!5e0!3m2!1szh-CN!2suk!4v1499953249615" width="100%" height="400" frameborder="1" style="border-top:#bca480 1px solid;border-bottom:#bca480 1px solid;" allowfullscreen>
                        </iframe>                            
                    </div>
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- CONTENT -->