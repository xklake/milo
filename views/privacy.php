<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Yii::$app->params['currentCatalog'] = $catalog;
?>

<div class="container">
	<div class="row">
   	 	<div id="realcontent" style="margin:20px;">
        	<?= $catalog->content ?>
    	</div>
    </div>
    <br/><br/><br/>
</div><!-- col -->

