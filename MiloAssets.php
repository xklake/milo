<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 06/09/16
 * Time: 3:40 PM
 */
namespace frontend\web\template\milo;
use yii;
use yii\web\AssetBundle;


class MiloAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '/milo/assets';


    public $css = [
        'css/bootstrap.min.css',
        'css/fontawesome/css/font-awesome.min.css',
        'css/miuiconfont/miuiconfont.css',
        'css/fancybox/jquery.fancybox.css',
        'css/revolutionslider/css/settings.css',
        'css/bxslider/jquery.bxslider.css',
        'css/ytplayer/css/YTPlayer.css',
        'css/custom.css',
        'css/pages-style.css',
        //'css/main.css',
    ];

    public $js = [
        'js/bootstrap.min.js',
        'js/viewport/jquery.viewport.js',
        'js/menu/hoverIntent.js',  
        'js/menu/superfish.js',
        'js/fancybox/jquery.fancybox.pack.js',
        'js/revolutionslider/js/jquery.themepunch.tools.min.js',
        'js/revolutionslider/js/jquery.themepunch.revolution.min.js',
        'js/bxslider/jquery.bxslider.min.js',
        'js/parallax/jquery.parallax-scroll.min.js',
        'js/isotope/imagesloaded.pkgd.min.js', 
        'js/isotope/isotope.pkgd.min.js', 
        'js/placeholders/jquery.placeholder.min.js',
        'js/validate/jquery.validate.min.js',
        'js/submit/jquery.form.min.js', 
        'js/googlemaps/jquery.gmap.min.js', 
        'js/counter/jQuerySimpleCounter.js', 
        'js/charts/chart.min.js', 
        'js/charts/jquery.easypiechart.min.js',
        'js/ytplayer/jquery.mb.YTPlayer.js', 
        'js/twitter/twitterfetcher.js', 
        'js/animations/wow.min.js', 
        'js/custom.js'
    ];

    public $depends = [
        //'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        if($this->baseUrl != null){
            $this->baseUrl = Yii::$app->urlManager->getHostInfo().$this->baseUrl;
        }
        parent::init();
    }
}
