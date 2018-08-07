<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 7/28/16
 * Time: 2:49 PM
 */
?>

<div class="widget widget-recent-posts">

    <h3 class="widget-title"><?=$catalog->surname?></h3>
    <ul>
        <?php 
          $projects = \funson86\blog\models\BlogPost::find()->where(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])
            ->andWhere(['catalog_id' => $catalog->id])
            ->orderBy(['created_at' => SORT_DESC])->all();
            foreach($projects as $item){
        ?>
            <li>
                <?php if($catalog->id == 73){?>
                <img src="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->banner?>" alt="" style="max-width: 80px;">
                <?php } else if ($catalog->id == 59) {?>
                <img src="/images/blank-profile.png" alt="" style="width:40px;">
                <?php } ?>
                <a class="post-title" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id' => $item->id])?>"><?=$item->title?></a>
            </li>
        <?php } ?>
    </ul>
</div><!-- widget-recent-posts -->

