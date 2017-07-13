<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="col-sm-6">
    <div class="headline style-1">
        <h4>IFS Services</h4>
        <h2><?=$catalog->surname?></h2>
    </div><!-- headline -->

    <div>
        <?= $catalog->content ?>
    </div>
    <br/>
    <a class="btn btn-default" href="<?= Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=> 60])?>">Free Quotation</a>
</div><!-- col -->

<div class="col-sm-6">
    <p class="text-center wow pulse animated" style="visibility: visible; animation-name: pulse;">
        <img src="/images/services/image-1.png" alt="">
    </p>
</div><!-- col -->
