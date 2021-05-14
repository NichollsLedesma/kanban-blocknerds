<?php

use yii\web\View;

$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/fontawesome-free/css/all.min.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/ekko-lightbox/ekko-lightbox.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/dist/css/adminlte.min.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/css/kanban.css');
$this->registerCssFile(Yii::$app->request->getBaseUrl() . '/plugins/dragula/dragula.min.css');

$columns = ["backlog", "todo", "doing"];
$this->registerJsVar('columns', $columns, View::POS_END);

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

            <div class="card card-row card-secondary" >
                <div class="card-header">
                    <h3 class="card-title">
                        Backlog
                    </h3>
                </div>
                <div class="card-body"  id="backlog">
                    <div class="card card-info card-outline task">
                        <div class="card-header">
                            <h5 class="card-title">Create Labels</h5>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-link">#3</a>
                                <a href="#" class="btn btn-tool">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" disabled>
                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" disabled>
                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" disabled>
                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" disabled>
                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline task">
                        <div class="card-header">
                            <h5 class="card-title">Create Issue template</h5>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-link">#4</a>
                                <a href="#" class="btn btn-tool">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1_1" disabled>
                                <label for="customCheckbox1_1" class="custom-control-label">Bug Report</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1_2" disabled>
                                <label for="customCheckbox1_2" class="custom-control-label">Feature Request</label>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline task">
                        <div class="card-header">
                            <h5 class="card-title">Create PR template</h5>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-link">#6</a>
                                <a href="#" class="btn btn-tool">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-light card-outline task">
                        <div class="card-header">
                            <h5 class="card-title">Create Actions</h5>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-link">#7</a>
                                <a href="#" class="btn btn-tool">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>

                        </div>
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-row card-secondary" >
                <div class="card-header">
                    <h3 class="card-title">
                        To Do
                    </h3>
                </div>
                <div class="card-body"  id="todo">
                    
                </div>
            </div>
            <div class="card card-row card-secondary" >
                <div class="card-header">
                    <h3 class="card-title">
                        In progress
                    </h3>
                </div>
                <div class="card-body"  id="doing">
                    
                </div>
            </div>




        </div>
    </section>
</div>