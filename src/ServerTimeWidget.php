<?php

namespace kodexpert\yii2\widget\clock;

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