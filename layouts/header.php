        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <!-- LOGO -->
                        <div id="logo">
							<a href="<?=Yii::$app->urlManager->getHostInfo().Yii::$app->homeUrl?>">
								<img src="<?=Yii::$app->urlManager->getHostInfo().'/'.Yii::$app->getImages('logo')->image?>" alt="">
							</a>
						</div><!-- logo -->
                    </div><!-- col -->
                    <div class="col-sm-10">
                        <a class='search-button' href="http://en.ifs-tax.com">
                            <img src="/images/cn.png" style='vertical-align: middle;'/>
                        </a>                        
                        <!-- MENU --> 
                        <nav>
                            <a id="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>
                                             
                            <ul class="menu clearfix" id="menu">
                                <li class="megamenu active">
                                    <a href="<?=Yii::$app->urlManager->getHostInfo().Yii::$app->homeUrl?>">Home</a>  
                                </li>
                                
                                <?php 
                                    foreach(Yii::$app->params['mainMenu'] as $item) {
                                    $sons = \funson86\blog\models\BlogCatalog::find()->where(['parent_id' =>$item['id']])->andWhere(['status'=> \funson86\blog\models\Status::STATUS_ACTIVE])->all();
                                    if(count($sons) == 0){
                                ?>
                                        <li>
                                            <a href="<?=Yii::$app->urlManager->getHostInfo().$item['url']?>">
                                                <?=$item['surname']?>
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="dropdown">
                                           <a href="#"><?=$item['surname']?></a>
                                           <ul>
                                               <?php                                       
                                                    foreach ($sons as $subcata){ 
                                                ?>
                                               <li><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id' => $subcata->id])?>"><?=$subcata['surname']?></a></li>
                                               <?php } ?>
                                           </ul>
                                        </li>                        
                                    <?php } ?>
                                <?php } ?>                                
                            </ul>
                    	</nav>
                    </div><!-- col -->
                    <?php 
                        $websiteTitle = Yii::$app->getTextBlock('home-site');
                        if($websiteTitle != null)
                        { ?>
                        <div class="col-sm-12" style="margin-bottom: 0px;margin-left:3px;color:#c9bfbf;">
                            <?=$websiteTitle->content?>
                        </div>
                        <?php } ?>
                    ?>                            
                    


                </div><!-- row -->

            </div><!-- container -->    
                    
        </header><!-- HEADER -->
