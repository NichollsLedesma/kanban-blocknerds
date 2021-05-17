<?php

namespace frontend\controllers;

use common\models\Board;
use Yii;
use yii\base\Event;
use yii\helpers\VarDumper;
use yii\web\Controller;

class KanbanController extends Controller
{
    const EVENT_TEST_BOARD = "demo";

    public function actionIndex()
    {
        $this->layout = 'kanban';
        $board = new Board();
        // $this->on(self::EVENT_TEST_BOARD, "move", "Something");
        // $this->trigger(self::EVENT_TEST_BOARD);
        // $this->off(self::EVENT_TEST_BOARD);

        return $this->render('index', [
            'board' => $this->getDump(),
        ]);
    }

    public function actionMove()
    {
        $movement = Yii::$app->request->post();
        VarDumper::dump( $movement);
        die;
        // TODO shoot trigger
    }

    private function getDump()
    {
        return [
            "id" => 1,
            "name" => "board_name",
            "columns" => [
                [
                    "id" => 1,
                    "name" => "backlog",
                    "tasks" => [
                        [
                            "id" => 1,
                            "name" => "task 1",
                            "description" => "something",
                        ],
                        [
                            "id" => 2,
                            "name" => "task 2",
                            "description" => "something",
                        ],
                        [
                            "id" => 3,
                            "name" => "task 3",
                            "description" => "something",
                        ],
                        [
                            "id" => 4,
                            "name" => "task 4",
                            "description" => "something",
                        ],
                        [
                            "id" => 5,
                            "name" => "task 5",
                            "description" => "something",
                        ]
                    ]
                ],
                [
                    "id" => 2,
                    "name" => "todo",
                    "tasks" => []
                ],
                [
                    "id" => 3,
                    "name" => "doing",
                    "tasks" => []
                ],
                [
                    "id" => 4,
                    "name" => "done",
                    "tasks" => []
                ],
            ]
        ];
    }
}
