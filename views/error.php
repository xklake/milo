<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:25 PM
 */
?>

<section id="error" class="container text-center">
    <div class="container">
        <div class="row" style="margin-top:100px; margin-bottom:100px;">
            <h1>ERROR</h1>
            <p>The page does not exist, please check your url or contact the website owner.</p>

            <span class="btn btn-danger">
                <span class="text-success">Back To</span> <a  href="<?= Yii::$app->urlManager->getHostInfo() . Yii::$app->homeUrl ?>" style="margin-top: 20px;">IFS Home Page</a>
            <span>
        </div>
    </div>
</section><!--/#error-->
