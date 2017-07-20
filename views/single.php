<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Yii::$app->params['currentCatalog'] = $catalog;
?>

<div class="col-sm-6">
    <div class="headline style-1">
        <h2><?=$catalog->surname?></h2>
    </div><!-- headline -->

    <div id="realcontent">
        <?= $catalog->content ?>
    </div>
    <br/><br/><br/>
</div><!-- col -->

<div class="col-sm-6">
    <p class="text-center wow pulse animated" style="visibility: visible; animation-name: pulse;">
        <img src="<?='/'.$catalog->banner?>" alt="">
    </p>
        <br/><br/><br/>

</div><!-- col -->
