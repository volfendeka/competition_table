<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "participants".
 *
 * @property integer $participant_id
 * @property integer $team_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $age
 * @property double $shturm_try_1
 * @property double $shturm_try_2
 * @property double $shturm
 * @property integer $shturm_zabig
 * @property double $sto_metriv_try_1
 * @property double $sto_metriv_try_2
 * @property double $sto_metriv
 * @property integer $sto_metriv_zabig
 * @property double $dvoborstvo
 * @property integer $doroga_number
 * @property integer $shturm_result
 * @property integer $sto_metriv_result
 * @property integer $dvoborstvo_result
 */
class Participants extends \yii\db\ActiveRecord
{
    public static $participants_amount = 6;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'participants';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_id', 'first_name', 'last_name', 'age',], 'required'],
            [['team_id', 'age', 'doroga_number', 'shturm_zabig', 'sto_metriv_zabig', 'shturm_result', 'sto_metriv_result', 'dvoborstvo_result'], 'integer'],
            [['shturm_try_1', 'shturm_try_2','shturm', 'sto_metriv_try_1', 'sto_metriv_try_2', 'sto_metriv', 'dvoborstvo'], 'number'],
            [['first_name', 'last_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'participant_id' => 'ID учасника',
            'team_id' => 'ID команди',
            'first_name' => 'Ім\'я',
            'last_name' => 'Прізвище',
            'age' => 'Вік',
            'shturm_try_1' => 'Штурмова 1 спроба',
            'shturm_try_2' => 'Штурмова 2 спроба',
            'shturm' => 'Штурмова кращий час',
            'shturm_zabig' => 'Штурмова забіг',
            'sto_metriv_try_1' => '100 метрів 1 спроба',
            'sto_metriv_try_2' => ' 100 метрів 2 спроба',
            'sto_metriv' => '100 метрів кращий час',
            'sto_metriv_zabig' => '100 метрів забіг',
            'dvoborstvo' => 'Двоборство',
            'doroga_number' => 'Номер доріжки',
            'shturm_result' => 'Штурмова місце',
            'sto_metriv_result' => '100 метрів місце',
            'dvoborstvo_result' => 'Двоборство місце',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            $this->compareTries('shturm_try_1', 'shturm_try_2', 'shturm');
            $this->compareTries('sto_metriv_try_1', 'sto_metriv_try_2', 'sto_metriv');

            $this->getDvoborstvo();

            return true;
        } else {
            return false;
        }
    }


    public function compareTries($try_1, $try_2, $vud){
            if($this->{$try_1} == 0 ){
                $this->{$vud} = $this->{$try_2};
            }
            elseif($this->{$try_2} == 0 ){
                $this->{$vud} = $this->{$try_1};
            }
            elseif($this->{$try_1} == $this->{$try_2}) {
                $this->{$vud} = $this->{$try_1};
            }
            elseif($this->{$try_1} > $this->{$try_2}) {
                $this->{$vud} = $this->{$try_2};
            }
            elseif($this->{$try_1} < $this->{$try_2}) {
                $this->{$vud} = $this->{$try_1};
            }

    }

    public function getDvoborstvo(){
        $this->dvoborstvo = ($this->shturm != null &&
            $this->shturm != 0 &&
            $this->sto_metriv != null &&
            $this->sto_metriv != 0)?$this->shturm + $this->sto_metriv: 0;
    }

    public function getTitle($title){
        switch($title){
            case '1':
                $title = 'Стартовий протокол Штурмовка';
                break;
            case '2':
                $title = 'Стартовий протокол 100 метрів';
                break;
            default:
                $title = 'Стартовий протокол';
        }
        return $title;
    }

    public function getTeam_id_paire(){
        $teams = (new Query())
            ->select(['team_id', 'team_name'])
            ->from('teams')
            ->all();

        $new_teams = [];
        foreach ($teams as $team){
            if(isset($team['team_id']) && isset($team['team_name'])){
                $new_teams[$team['team_id']] = $team['team_name'];
            }
        }
        return $new_teams;
    }



    public function generateParticipantsZabigu(){

        $participants = (new Query())
            ->select(['participant_id','team_id'])
            ->from('participants')
            ->all();

        $teams = (new Query())
            ->select('*')
            ->from('teams')
            ->all();

        $zabigu_amount = ceil(count($participants)/4);


        $teams_array = [];
        $teams_id = [];
        $counter = 0;
        foreach ($teams as $team){
            $teams_id[$counter] = $team['team_id'];

            $teams_array[$team['team_id']] = [];
            foreach ($participants as $participant){
                if($participant['team_id'] == $team['team_id']){
                     array_push($teams_array[$participant['team_id']], $participant['participant_id']);
                }
            }

            $counter++;
        }

        $teams_list = [];
        foreach ($teams_array as $team){
            array_push($teams_list, $team);
        }

        $all_participants_merged = [];
        foreach ($teams_list as $item => $value){
            foreach ($value as $participant){
                array_push($all_participants_merged, $participant);
            }
        }

        $mixed_normaly = [];
        for ($a=0; $a < $zabigu_amount; $a++){
            for($b = $a; $b < count($all_participants_merged); $b += count($teams_list[0])){
                if(isset($all_participants_merged[$b])){
                    if(!in_array($all_participants_merged[$b], $mixed_normaly)){
                        array_push($mixed_normaly, $all_participants_merged[$b]);
                    }
                }
            }
        }


        $zabigu_array = [];
        for($i=0; $i < count($mixed_normaly); $i +=4){
            $zabigu_array[$i] = [];
            for($k=$i; $k < $i+4; $k++){
                if(isset($mixed_normaly[$k])){
                    if(!in_array($mixed_normaly[$k], $zabigu_array[$i])){
                        array_push($zabigu_array[$i], $mixed_normaly[$k]);
                    }
                }
            }
        }

        return $zabigu_array;
    }

    public function saveParticipantsZabigu($zabigu_array){

        if(is_array($zabigu_array)){
            $zabig_counter = 1;
            foreach ($zabigu_array as $zabig => $item){
                $doroga_counter = 1;
                foreach ($item as $participant => $participant_id){
                    Yii::$app->db->createCommand()
                        ->update('participants', ['shturm_zabig' => $zabig_counter,
                            'sto_metriv_zabig' => $zabig_counter,
                            'doroga_number' => $doroga_counter], "participant_id = {$participant_id}")
                        ->execute();
                    $doroga_counter++;
                }
                $zabig_counter++;
            }
        }

    }

    public function generateTeamsZabigu(){
        $teams = (new Query())
            ->select('team_id')
            ->from('teams')
            ->all();

        $teams_list = [];
        foreach ($teams as $team => $item){
            array_push($teams_list, $item['team_id']);
        }

        $zabigu_array = [];
        for($i=0; $i < count($teams_list); $i +=2){
            $zabigu_array[$i] = [];
            for($k=$i; $k < $i+2; $k++){
                if(isset($teams_list[$k])){
                    if(!in_array($teams_list[$k], $zabigu_array[$i])){
                        array_push($zabigu_array[$i], $teams_list[$k]);
                    }
                }
            }
        }

        return $zabigu_array;
    }

    public function saveTeamsZabigu($zabigu_array){
        if(is_array($zabigu_array)){
            $zabig_counter = 1;
            foreach ($zabigu_array as $zabig => $item){
                $doroga_counter = 1;
                foreach ($item as $team => $team_id){
                    Yii::$app->db->createCommand()
                        ->update('teams', ['team_zabig' => $zabig_counter,
                            'doroga_number' => $doroga_counter], "team_id = {$team_id}")
                        ->execute();
                    $doroga_counter++;
                }
                $zabig_counter++;
            }
        }
    }

    public function addTimeToZeroes($vud){
        $max = Participants::find()->max($vud);

        $all_participants = (new Query())
            ->select([$vud, 'participant_id'])
            ->from('participants')
            ->all();

        foreach ($all_participants as $participant){
            if($participant[$vud] == null || $participant[$vud] == 0){
                Yii::$app->db->createCommand()
                    ->update('participants', [$vud => $max+10], "participant_id = {$participant['participant_id']}")
                    ->execute();
            }
        }

    }

    public function getParticipantsAmount($team_id = 1){
        $participants = (new Query())
            ->select(['participant_id'])
            ->where(['team_id' => $team_id])
            ->from('participants')
            ->all();
        return count($participants)+1;
    }


}
