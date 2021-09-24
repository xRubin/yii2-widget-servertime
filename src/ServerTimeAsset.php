<?php

namespace rubin\yii2\widget\servertime;

use yii\web\AssetBundle;

class ServerTimeAsset extends AssetBundle
{
    public $css = [
        'css/servertime.css',
    ];

    public $js = [
        'js/servertime.js',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        parent::init();
    }
}