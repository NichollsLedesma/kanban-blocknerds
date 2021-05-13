<?php

namespace app\jobs;

use Yii;

/**
 * Class CreateLogs.
 */
class CreateLogs extends \yii\base\BaseObject implements \yii\queue\JobInterface
{
    public $url;
    public $file;

    public function execute($queue)
    {
        Yii::info($this->file);
        Yii::info("aasdasdasdasd");
        file_put_contents($this->file, file_get_contents($this->url));
    }
}
