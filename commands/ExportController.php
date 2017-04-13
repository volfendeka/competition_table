<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Participants;
use app\models\Teams;
use yii\console\Controller;

use yii2tech\csvgrid\CsvGrid;
use yii\data\ActiveDataProvider;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ExportController extends Controller
{

    public function actionIndex()
    {
        $exporter_patrtisipants = new CsvGrid([
            'dataProvider' => new ActiveDataProvider([
                'query' => Participants::find(),
                'pagination' => [
                    'pageSize' => 200, // export batch size
                ],
            ]),
        ]);
        $exporter_patrtisipants->export()->saveAs('csv/participants.csv');

        $exporter_teams = new CsvGrid([
            'dataProvider' => new ActiveDataProvider([
                'query' => Teams::find(),
                'pagination' => [
                    'pageSize' => 200, // export batch size
                ],
            ]),
        ]);
        $exporter_teams->export()->saveAs('csv/teams.csv');
    }
}
