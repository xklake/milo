<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 11:55 AM
 */
?>
<div class="content">
    <div id="page-header">  
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4><?= $post->title ?></h4>
                </div><!-- col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li><a href="<?= Yii::$app->urlManager->getHostInfo() . Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Home') ?></a></li>
                        <li class="active"> <?= Yii::t('app', $post->catalog->title)?></li>
                    </ol>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- ontainer -->    
    </div><!-- page-header -->

    <div class="container">
        <div class="col-md-8">
            <div class="blog-article">
                    <?php if($post->catalog->id != 59){?>
                
                <!--div class="blog-article-thumbnail">
                    <img src="/images/blog/image-2.jpg" alt="">
                </div--><!-- blog-article-thumbnail -->
                    <?php } ?>
                <div class="blog-article-details">

                    <!--h4>5 March 2015</h4-->
                    <h2><?=$post->title?></h2>
                    <?php if($post->catalog->id == 59){?>
                    <h4><?=$post->keywords?></h4>
                    <?php } ?>

                    <!--p>
                            <i class="miu-icon-business_namecard_contact_info_outline_stroke"></i>
                        <a href="#">Jane Smith</a><br class="visible-xs">
                        <i class="miu-icon-editor_folder_add_outline_stroke"></i>
                        <a href="#">Design</a>, <a href="#">Web design</a><br class="visible-xs">
                        <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>
                        <a href="#">2</a>
                    </p-->

                </div><!-- blog-article-details -->
                <?= $post->content ?>

            </div>
        </div><!--/.col-md-8-->

        <aside class="col-md-4">
            <?= $this->render('/blogsidenav.php', ['catalog' => $post->catalog]) ?>
        </aside>
    </div>    
</div>
