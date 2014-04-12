<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
        'css/site.css',
        'css/goth_blue.css',

    ];
	public $js = [
        'javascript/supersized/js/jquery.easing.min.js',
        'javascript/supersized/js/supersized.3.2.7.min.js',
        'javascript/supersized/theme/supersized.shutter.min.js',
        'javascript/main.js',

	];
	public $depends = [
		'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
   ];


    public function registerAssetFiles($view)
    {
        //$language = $this->language ? $this->language : Yii::$app->language;
        //$this->js[] = 'language-' . $language . '.js';
        parent::registerAssetFiles($view);
    }

}
