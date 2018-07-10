<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:18 PM
 */
use yii\helpers\Html;
$model = new \frontend\models\QuoteForm();

?>
        <div class="content">
            
            <div id="page-header">  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4><?=Yii::t('app', 'Contact')?></h4>
                        </div><!-- col -->

                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li><a href="<?=Yii::$app->urlManager->getHostInfo().Yii::$app->homeUrl?>"><?=Yii::t('app', 'Home')?></a></li>
                                <li class="active"><?=Yii::t('app', 'Contact')?></li>
                            </ol>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- ontainer -->    
            </div><!-- page-header -->
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="headline style-3">
                            <!--h5>Say hello</h5-->
                            <h2><?=Yii::t('app', 'Contact our team')?></h2>
                            <p> <?=Yii::t('app', 'We aim to reply to all emails within 24 hours.')?></p>
                        </div><!-- headline -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
            
            <div class="container">
                <div class="row">
            <div class="col-sm-offset-1 col-sm-6">
                <form id='contact-form'>
                <fieldset>
                    <div id="alert-area">
                    </div>                    
                        <?= yii\helpers\Html::activeTextInput($model, 'name', ['class' => 'col-xs-12', 'placeholder' => Yii::t('app', 'Name')]) ?>
                        <?= Html::activeTextInput($model, 'phone', ['class' => 'col-xs-12', 'placeholder' => Yii::t('app', 'Phone')]) ?>
                        <?= Html::activeTextInput($model, 'email', ['class' => 'col-xs-12', 'placeholder' => Yii::t('app', 'Email')]) ?>
                        <?= Html::activeTextarea($model, 'body', ['class' => 'col-xs-12', 'placeholder' => Yii::t('app', 'Message'), 'rows' => 5, 'id'=> 'message']) ?>
                        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-default', 'name' => 'quote-button']) ?>
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->csrfToken?>">
                </fieldset>
                </form>
                <?php /*yii\widgets\ActiveForm::end(); */?>
            </div>

                    <div class="col-sm-5">
                    	
                        <div class="widget widget-contact">
                        	
                            <h3 class="widget-title"><?=Yii::t('app', 'CONTACT INFORMATION')?></h3>
                            <ul>
                                <li>
                                	<span><?=Yii::t('app', 'OFFICE MAIN CONTACT')?></span> <br/>                                
                                    <a href="telto:<?=Yii::$app->setting->get('mobile')?>">
                                        <?php echo(Yii::$app->setting->get('mobile')) ?>
                                    </a><br/>
                                    <a href="mailto:<?=Yii::$app->setting->get('email')?>"><?=Yii::$app->setting->get('email')?></a><br/><br/>
                                    <?php echo(Yii::$app->setting->get('address')) ?>
                                </li>
                                
                                <li>
                                  <span><?=Yii::t('app', 'CONTACT A MEMBER')?></span><br/>
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
                        <iframe src="<?=Yii::$app->setting->get('googlemap')?>" width="100%" height="400" frameborder="1" style="border-top:#bca480 1px solid;border-bottom:#bca480 1px solid;" allowfullscreen>
                        </iframe>                            
                    </div>
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- CONTENT -->