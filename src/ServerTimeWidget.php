<?php

namespace rubin\yii2\widget\servertime;

use yii\base\Widget;
use yii\helpers\Html;

class ServerTimeWidget extends Widget
{
    public function run()
    {
        return Html::tag('div', '', [
            'class' => 'servertime',
            'data-time' => time()
        ]);
    }
}