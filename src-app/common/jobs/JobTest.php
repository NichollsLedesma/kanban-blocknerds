<?php

namespace common\jobs;

use Yii;
use yii\helpers\VarDumper;

/**
 * Class JobTest.
 */
class JobTest extends \yii\base\BaseObject implements \yii\queue\JobInterface
{

    public $file;
    public $url;
    /**
     * @inheritdoc
     */
    public function execute($queue)
    {
        $file = file_get_contents($this->url);
        // VarDumper::dump($file);

        file_put_contents($this->file, $file);
    }
}
