<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "teams".
 *
 * @property integer $team_id
 * @property string $team_name
 * @property double $estafeta
 * @property int $estafeta_result
 * @property double $boyove
 * @property int $boyove_result
 * @property double $shturm
 * @property int $shturm_result
 * @property double $sto_metriv
 * @property int $sto_metriv_result
 * @property double $dvoborstvo
 * @property int $dvoborstvo_result
 * @property double $tru_kolinna
 * @property int $tru_kolinna_result
 * @property int $doroga_number
 * @property int $team_zabig
 * @property integer $result
 * @property integer $result_result
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_name',], 'required'],
            [['estafeta', 'boyove', 'shturm', 'sto_metriv', 'dvoborstvo', 'tru_kolinna'], 'number'],
            [['result', 'result_result', 'doroga_number', 'team_zabig'], 'integer'],
            [['team_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_id' => 'ID команди',
            'team_name' => 'Назва команди',
            'estafeta' => 'Естафета',
            'boyove' => 'Бойове',
            'shturm' => 'Штурмовка',
            'sto_metriv' => '100 метрів',
            'dvoborstvo' => 'Двоборство',
            'tru_kolinna' => 'Висувна',
            'estafeta_result' => 'Естафета місце',
            'boyove_result' => 'Бойове місце',
            'shturm_result' => 'Штурмова місце',
            'sto_metriv_result' => '100 метрів місце',
            'dvoborstvo_result' => 'Двоборство місце',
            'tru_kolinna_result' => 'Висувна місце',
            'team_zabig' => 'Забіг',
            'doroga_number' => 'Номер доріжки',
            'result' => 'Сума очок',
            'result_result' => 'Місце',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {


            return true;
        } else {
            return false;
        }
    }

    public function getTeamsTimes($vud){

//        $max = Participants::find()->max($vud);

        $all_participants = (new Query())
            ->select([$vud, 'participant_id'])
            ->from('participants')
            ->all();
/*
        foreach ($all_participants as $participant){
            if($participant[$vud] == null || $participant[$vud] == 0){
                Yii::$app->db->createCommand()
                    ->update('participants', [$vud => $max+10], "participant_id = {$participant['participant_id']}")
                    ->execute();
            }
        }
*/
        $teams = (new Query())
            ->select(['team_id'])
            ->from('teams')
            ->all();
        foreach ($teams as $team) {
            foreach ($team as $item => $id) {
                $data_save = '';
                if($vud == 'dvoborstvo'){
                    $rows = (new Query())
                        ->select([$vud])
                        ->from('participants')
                        ->orderBy($vud)
                        ->limit(4)
                        ->where(['team_id' => $id])
                        ->all();
                }else{
                    $rows = (new Query())
                        ->select([$vud])
                        ->from('participants')
                        ->where(['team_id' => $id])
                        ->all();
                }

                if (!empty($rows)) {
                    foreach ($rows as $row) {
                        $data_save += $row[$vud];
                    }

                    Yii::$app->db->createCommand()
                        ->update('teams', [$vud => $data_save], "team_id = {$id}")
                        ->execute();
                }
            }
        }

        return $all_participants;
    }

    public function getPlaces(){
        $teams = (new Query())
            ->select('*')
            ->from('teams')
            ->all();
        foreach ($teams as $item => $team) {
            $result = $team['boyove_result'] +
                $team['dvoborstvo_result'] +
                $team['shturm_result'] +
                $team['estafeta_result'] +
                $team['sto_metriv_result'] +
                $team['tru_kolinna_result'];

            Yii::$app->db->createCommand()
                ->update('teams', ['result' => $result], "team_id = {$team['team_id']}")
                ->execute();
        }
    }

    public function setResult($fields, $table){
        $table_name = $table.'s';
        $table_id = $table.'_id';
        if(is_array($fields)) {
            foreach ($fields as $field) {
                $field_result = $field.'_result';
                $counter = 1;
                $count1 = 1;
                $order = (new Query())
                    ->select([$table_id, $field])
                    ->from($table_name)
                    ->orderBy($field)
                    ->all();

                $order_length = [];
                foreach ($order as $key){
                    if($key[$field] != 0 && $key[$field] != null){
                        $count1++;
                        array_push($order_length, $key[$field]);
                    }
                }
                $unique_amount = count(array_unique($order_length))+1;


                $place_array = [];
                foreach ($order as $participant) {
                    $id = $participant[$table_id];
                    if($participant[$field] != 0 && $participant[$field] != null){
                        if(isset($place_array[$participant[$field]])){
                            $this->updateResult($id, $field_result, $place_array[$participant[$field]], $table_name, $table_id);
                        }else{
                            $place_array[$participant[$field]] = $counter;
                            $this->updateResult($id, $field_result, $counter, $table_name, $table_id);
                            $counter++;
                        }
                    } elseif($participant[$field] == null){
                        $this->updateResult($id, $field_result, null, $table_name, $table_id);
                    }else{
                        $this->updateResult($id, $field_result, $unique_amount, $table_name, $table_id);
                    }
                }
            }
        }
        return $place_array;
    }

    public function setFinalResult($field, $table, $priority_column){
        $table_name = $table.'s';
        $table_id = $table.'_id';
        $field_result = $field.'_result';


        $order = (new Query())
            ->select([$table_id, $field, $priority_column])
            ->from($table_name)
            ->orderBy([
                $field => SORT_ASC,
                $priority_column => SORT_ASC,
            ])
            ->all();

        $counter = 1;
        foreach ($order as $team){
            $id = $team[$table_id];
            $this->updateResult($id, $field_result, $counter, $table_name, $table_id);
            $counter++;
        }

        return $order;
    }

    private function updateResult($id, $field, $value, $table_name, $table_id){
        if (!empty($id)) {
            Yii::$app->db->createCommand()
                ->update($table_name, [$field => $value], "{$table_id} = {$id}")
                ->execute();
        }
    }

    public static function getTeams(){
        $items = [];
        $counter = 0;
        $teams = (new Query())
            ->select(['team_id', 'team_name'])
            ->from('teams')
            ->all();

        foreach ($teams as $team){
            $items[$counter] = ['label' => $team['team_name'], 'url' => ["/participant/view_participants_by_team/{$team['team_id']}"]];
            $counter++;
        }
        return $items;
    }

    public static function getZabigu($vud){
        $vud_zabig = $vud.'_zabig';
        $max_zabig = (new Query())
            ->select(["{$vud_zabig}"])
            ->from('participants')
            ->orderBy("{$vud_zabig} DESC")
            ->one();

        for($i=1; $i <= $max_zabig[$vud_zabig]; $i++){
            $items[$i] = ['label' => $i, 'url' => ["/participant/view_participants_by_zabig?vud={$vud}&zabig_number={$i}"]];
        }

        return $items = $items ?? [];
    }

}
