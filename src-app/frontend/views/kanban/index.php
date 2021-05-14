<?php

use yii\web\View;

$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/fontawesome-free/css/all.min.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/ekko-lightbox/ekko-lightbox.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/dist/css/adminlte.min.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/css/kanban.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/dragula/dragula.min.css');

$this->registerJsFile(
    Yii::$app->request->BaseUrl . '/plugins/ekko-lightbox/ekko-lightbox.min.js',
    [
        'depends' => "yii\web\JqueryAsset",
        'position' => View::POS_END
    ]
);
$this->registerJsFile(
    Yii::$app->request->BaseUrl . '/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    [
        'depends' => "yii\web\JqueryAsset",
        'position' => View::POS_END
    ]
);
$this->registerJsFile(
    Yii::$app->request->BaseUrl . '/plugins/dist/js/adminlte.min.js',
    [
        'depends' => "yii\web\JqueryAsset",
        'position' => View::POS_END
    ]
);
$this->registerJsFile(
    Yii::$app->request->BaseUrl . '/plugins/filterizr/jquery.filterizr.min.js',
    [
        'depends' => "yii\web\JqueryAsset",
        'position' => View::POS_END
    ]
);
$this->registerJsFile(
    Yii::$app->request->BaseUrl . '/plugins/dragula/dragula.min.js',
    [
        'depends' => "yii\web\JqueryAsset",
        'position' => View::POS_END
    ]
);

$this->registerJsFile(
    Yii::$app->request->BaseUrl . '/js/dragula-impl.js',
    [
        'depends' => "yii\web\JqueryAsset",
        'position' => View::POS_END
    ]
);

?>
<h1>kandan</h1>

<div class="content-wrapper kanban">
    <section class="content pb-3">
        <div class="container-fluid h-100">

            <div class="card card-row card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        Backlog
                    </h3>
                </div>
                <div class="card-body">
                    <ul id="backlog" class="list-group">
                        <li class="list-group-item">
                            <p>name1</p>

                        </li>
                        <li class="list-group-item">
                            <p>name2</p>

                        </li>
                        <li class="list-group-item">
                            <p>name3</p>

                        </li>
                        <li class="list-group-item">
                            <p>name4</p>

                        </li>
                    </ul>
                </div>
            </div>

            <div class="card card-row card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        To Do
                    </h3>
                </div>
                <div class="card-body">
                    <ul id="todo" class="list-group">

                    </ul>
                </div>
            </div>

            <div class="card card-row card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        In progre
                    </h3>
                </div>
                <div class="card-body">
                    <ul id="doing" class="list-group">
                        <li class="list-group-item">
                            <p>name1</p>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>