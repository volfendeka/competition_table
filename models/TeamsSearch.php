<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teams;

/**
 * TeamsSearch represents the model behind the search form about `app\models\Teams`.
 */
class TeamsSearch extends Teams
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_id', 'result', 'result_result', 'doroga_number', 'team_zabig'], 'integer'],
            [['team_name'], 'safe'],
            [['estafeta', 'boyove', 'shturm', 'sto_metriv', 'dvoborstvo', 'tru_kolinna'], 'number'],
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
        $query = Teams::find();

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
            'team_id' => $this->team_id,
            'estafeta' => $this->estafeta,
            'boyove' => $this->boyove,
            'shturm' => $this->shturm,
            'sto_metriv' => $this->sto_metriv,
            'dvoborstvo' => $this->dvoborstvo,
            'tru_kolinna' => $this->tru_kolinna,
            'estafeta_result' => $this->estafeta_result,
            'boyove_result' => $this->boyove_result,
            'shturm_result' => $this->shturm_result,
            'sto_metriv_result' => $this->sto_metriv_result,
            'dvoborstvo_result' => $this->dvoborstvo_result,
            'tru_kolinna_result' => $this->tru_kolinna_result,
            'team_zabig' => $this->team_zabig,
            'doroga_number' => $this->doroga_number,
            'result' => $this->result,
            'place' => $this->result_result,
        ]);

        $query->andFilterWhere(['like', 'team_name', $this->team_name]);

        return $dataProvider;
    }
}
