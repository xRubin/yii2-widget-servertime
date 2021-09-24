<?php

namespace rubin\yii2\widget\servertime;

use yii\web\AssetBundle;

class ServerTimeAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/servertime.css',
    ];

    public $js = [
        'js/servertime.js',
    ];
}