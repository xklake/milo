<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 7/28/16
 * Time: 2:49 PM
 */
?>

<div class="widget widget-recent-posts">

    <h3 class="widget-title">Our Projects</h3>
    <ul>
        <?php 
          $projects = \funson86\blog\models\BlogPost::find()->where(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])
            ->andWhere(['catalog_id' => 73])
            ->orderBy(['created_at' => SORT_DESC])->all();
            foreach($projects as $item){
        ?>
        <li>
            <img src="/images/blog/blog-post/post-1.jpg" alt="">
            <a class="post-title" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id' => $item->id])?>"><?=$item->title?></a>
            <p class="post-date">March 05, 2015</p>
        </li>
            <?php } ?>
    </ul>
</div><!-- widget-recent-posts -->

