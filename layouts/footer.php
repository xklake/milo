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
                    	<div class="col-sm-4">
                        	
                            <div class="widget widget-text">
                            	
                                <h3 class="widget-title"><?=Yii::t('app','About Us')?></h3>
                                
                                <p>
                                    <?php 
                                        $footer_aboutus= Yii::$app->getHtmlBlock('footer-aboutus');
                                        if($footer_aboutus != null)
                                        {
                                            echo($footer_aboutus->content);
                                        }
                                    ?>                                
                                </p>
                            </div><!-- widget-text -->
                            <div class="widget widget-newsletter">                        	
                            </div><!-- widget-newsletter -->
                        </div><!-- col -->
                        <div class="col-sm-4">
                            <div class="widget widget-contact">
                                
                                <h3 class="widget-title"><?=Yii::t('app', "Contact Us")?></h3>
                                
                                <ul>
                                    <li>
                                        <span><?=Yii::t('app', "Phone")?></span>                                    
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
                                        <span><?=Yii::t('app', "E-MAIL")?></span>
                                        <a href="mailto:<?=Yii::$app->setting->get('email')?>"><?=Yii::$app->setting->get('email')?></a>
                                    </li>
                                    <li>
                                        <span><?=Yii::t('app', "Address")?></span>
                                        <?php echo(Yii::$app->setting->get('address')) ?>
                                    </li>
                                </ul>
                                
                            </div><!-- widget-contact -->
                            
                        </div><!-- col -->                        
                        <div class="col-sm-4">
                            <div class="widget widget-contact">
                                <h3 class="widget-title"><?=Yii::t('app', "CONTACT A MEMBER")?></h3>
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

                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- footer -->
            
            <div id="footer-bottom">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-12">
                        	
                            <div class="widget widget-text">	
                                <?php 
                                $copyright = Yii::$app->setting->get('copyright'); 
                                if($copyright != null){?>
                                    <p class="last text-center">
                                        <?=$copyright?><a style="margin-left:20px;" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['catalog/view', 'id'=> 66])?>"><span style="color:#bca480;font-size:0.95rem">Web Privacy Statement</span></a>
                                    </p>
                                <?php } ?>
                                <div class="text-lowercase text-center" style='font-size:1rem;'> 
                                    <?=Yii::t('app', 'Powered By')?>
                                    <a href="http://chinasoftware.co.uk" target="_blank" ref='nofollow external'><?=Yii::t('app', 'chinasoftware')?></a>
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
