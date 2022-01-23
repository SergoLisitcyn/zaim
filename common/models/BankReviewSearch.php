<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BankReview;

/**
 * BankReviewSearch represents the model behind the search form of `common\models\BankReview`.
 */
class BankReviewSearch extends BankReview
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'bank_id', 'status'], 'integer'],
            [['body', 'plus', 'minus', 'email', 'name_client', 'otvet_review', 'date'], 'safe'],
            [['prostota', 'speed', 'support'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = BankReview::find();

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
            'id' => $this->id,
            'bank_id' => $this->bank_id,
            'prostota' => $this->prostota,
            'speed' => $this->speed,
            'support' => $this->support,
            'date' => $this->date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'plus', $this->plus])
            ->andFilterWhere(['like', 'minus', $this->minus])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'name_client', $this->name_client])
            ->andFilterWhere(['like', 'otvet_review', $this->otvet_review]);

        return $dataProvider;
    }
}
