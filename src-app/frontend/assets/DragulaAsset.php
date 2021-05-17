<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class DragulaAsset extends AssetBundle
{
    public $sourcePath = '@frontend/assets/dragula';
    public $css = [
        'dragula.min.css',
    ];
    public $js = [
        'dragula.min.js'
    ];
    public $depends = [];
    public $publishOptions = [
        'forceCopy' => true,
    ];
}
