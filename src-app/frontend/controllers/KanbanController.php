<?php

namespace frontend\controllers;

use yii\web\Controller;

class KanbanController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'kanban';
        return $this->render('index');
    }

}
