<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Participants;
use yii\db\Query;

/**
 * SearchParticipant represents the model behind the search form about `app\models\Participants`.
 */
class ParticipantSearch extends Participants
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['participant_id', 'team_id', 'age', 'doroga_number', 'shturm_zabig', 'sto_metriv_zabig', 'shturm_result', 'sto_metriv_result', 'dvoborstvo_result'], 'integer'],
            [['first_name', 'last_name'], 'safe'],
            [['shturm_try_1', 'shturm_try_2', 'shturm', 'sto_metriv_try_1', 'sto_metriv_try_2', 'sto_metriv', 'dvoborstvo'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Participants::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'participant_id' => $this->participant_id,
            'team_id' => $this->team_id,
            'age' => $this->age,
            'shturm_try_1' => $this->shturm_try_1,
            'shturm_try_2' => $this->shturm_try_2,
            'shturm' => $this->shturm,
            'shturm_zabig' => $this->shturm_zabig,
            'sto_metriv_try_1' => $this->sto_metriv_try_1,
            'sto_metriv_try_2' => $this->sto_metriv_try_2,
            'sto_metriv' => $this->sto_metriv,
            'sto_metriv_zabig' => $this->sto_metriv_zabig,
            'dvoborstvo' => $this->dvoborstvo,
            'doroga_number' => $this->doroga_number,
            'shturm_result' => $this->shturm_result,
            'sto_metriv_result' => $this->sto_metriv_result,
            'dvoborstvo_result' => $this->dvoborstvo_result,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name]);

        return $dataProvider;
    }
}
