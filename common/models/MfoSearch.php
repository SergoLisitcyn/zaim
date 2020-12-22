<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mfo;

/**
 * MfoSearch represents the model behind the search form of `common\models\Mfo`.
 */
class MfoSearch extends Mfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'odobrenie', 'akcii', 'home_page', 'status', 'created_at', 'updated_at'], 'integer'],
            [['mfo_name', 'srok', 'sum', 'stavka', 'rasmotrenie', 'phone', 'email', 'website', 'logo', 'video', 'rekvisit', 'link_offer', 'about_company', 'content', 'title', 'description', 'keywords'], 'safe'],
            [['rating'], 'number'],
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
        $query = Mfo::find();

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
            'rating' => $this->rating,
            'odobrenie' => $this->odobrenie,
            'akcii' => $this->akcii,
            'home_page' => $this->home_page,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'mfo_name', $this->mfo_name])
            ->andFilterWhere(['like', 'srok', $this->srok])
            ->andFilterWhere(['like', 'sum', $this->sum])
            ->andFilterWhere(['like', 'stavka', $this->stavka])
            ->andFilterWhere(['like', 'rasmotrenie', $this->rasmotrenie])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'rekvisit', $this->rekvisit])
            ->andFilterWhere(['like', 'link_offer', $this->link_offer])
            ->andFilterWhere(['like', 'about_company', $this->about_company])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'keywords', $this->keywords]);

        return $dataProvider;
    }
}
