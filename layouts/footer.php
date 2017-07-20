<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:16 PM
 */
?>

<footer>
    <div id="footer-top">
    </div><!-- footer-top -->
    
            <div id="footer">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-3">
                        	
                            <div class="widget widget-text">
                            	
                                <h3 class="widget-title">About IFS</h3>
                                
                                <p>
                                    <?php 
                                        $footer_aboutus= Yii::$app->getHtmlBlock('footer-aboutus');
                                        if($footer_aboutus != null)
                                        {
                                            echo($footer_aboutus->content);
                                        }
                                    ?>                                
                                </p>
                                <p>
                                    <span style="color:#bca480;">WE'RE MEMBER OF</span>
                                    <?php
                                        $images = Yii::$app->getImageByGroup('qualification');
                                        foreach ($images as $img) {
                                    ?>
                                        <img src="<?='/'.$img->image?>">
                                    <?php } ?>
                                </p>
                                
                            </div><!-- widget-text -->
                            
                            <div class="widget widget-newsletter">                        	

                            
                            
                        </div><!-- widget-newsletter -->
                        
                        </div><!-- col -->
                        <div class="col-sm-3">
                            <div class="widget widget-contact">
                                
                                <h3 class="widget-title">Contact Us</h3>
                                
                                <ul>
                                    <li>
                                        <span>Phone</span>                                    
                                        <a href="telto:<?=Yii::$app->setting->get('mobile')?>">
                                            <?php echo(Yii::$app->setting->get('mobile'));?>
                                        </a>
                                        
                                        <?php 
                                        $phone = Yii::$app->setting->get('phone'); 
                                        if($phone != null){?>
                                        <br/>
                                            <a href="telto:<?=$phone?>">
                                                <?=$phone?>
                                            </a>                                        
                                        <?php } ?>
                                    </li>
                                    <li>
                                        <span>E-mail</span>
                                        <a href="mailto:<?=Yii::$app->setting->get('email')?>"><?=Yii::$app->setting->get('email')?></a>
                                    </li>
                                    <li>
                                        <span>Address</span>
                                        <?php echo(Yii::$app->setting->get('address')) ?>
                                    </li>
                                </ul>
                                
                            </div><!-- widget-contact -->
                            
                        </div><!-- col -->                        
                        <div class="col-sm-3">
                            <div class="widget widget-contact">
                                <h3 class="widget-title">CONTACT A MEMBER</h3>
                                <ul>
                                    <?php 
                                        $members = common\models\Product::find()->where(['status' => funson86\blog\models\Status::STATUS_ACTIVE])->all();
                                        foreach($members as $item){
                                    ?>
                                        <li>
                                            <span><?=$item['name']?></span>                                    
                                            <?= $item['content']?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div><!-- widget-recent-posts -->
                        </div><!-- col -->

                        <div class="col-sm-3">
                            <div class="widget widget-flickr">
                                <h3 class="widget-title">IN GOOGLEMAP</h3>
                                <div class="flickr-photos">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9087491777095!2d-0.1257258843067004!3d51.51489007963633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ccab26369b%3A0xcbca337b01407c64!2s75+Shelton+St%2C+London+WC2H+9JQ!5e0!3m2!1szh-CN!2suk!4v1499953249615" width="100%" height="295" frameborder="1" style="border:#bca480 1px solid;" allowfullscreen>
                                    </iframe>
                                </div><!-- flickr-photos -->
                                
                            </div><!-- widget-flickr -->
                            
                        </div><!-- col -->

                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- footer -->
            
            <div id="footer-bottom">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-12">
                        	
                            <div class="widget widget-text">	
                            	
                                <p class="last text-center text-uppercase">&copy; All Rights Reserved,2017, <span class="text-primary">IFS-TAX.COM</span> 
                                <div class="text-lowercase text-center" style='font-size:1rem;'> Powered By 
                                    <a href="http://chinasoftware.co.uk" target="_blank" ref='nofollow external'>chinasoftware</a>
                                </div>
                                
                            </div><!-- widget-text -->
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
                
            </div><!-- footer-bottom -->
            
<?php
$google_analysis = Yii::$app->getHtmlBlock('google-analysis');

if($google_analysis != null){
    echo($google_analysis->content);
}
?>