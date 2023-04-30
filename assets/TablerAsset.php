<?php

namespace app\assets;

use yii\web\AssetBundle;


class TablerAsset extends AssetBundle
{
    public $basePath = '';
    public $baseUrl = '';
    public $css = [
        'https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css',
        'https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css'
    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
