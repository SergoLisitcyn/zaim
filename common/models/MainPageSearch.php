<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MainPage;

/**
 * MainPageSearch represents the model behind the search form of `common\models\MainPage`.
 */
class MainPageSearch extends MainPage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'sub_title', 'description', 'registration_text', 'registration_item', 'how_take_title', 'how_take_text', 'how_take_text_left', 'how_take_text_right', 'how_take_point_title', 'how_take_point_text', 'advantages_title', 'advantages_text', 'advantages_list_1', 'advantages_list_2', 'advantages_list_3', 'advantages_list_4'], 'safe'],
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
        $query = MainPage::find();

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
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'sub_title', $this->sub_title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'registration_text', $this->registration_text])
            ->andFilterWhere(['like', 'registration_item', $this->registration_item])
            ->andFilterWhere(['like', 'how_take_title', $this->how_take_title])
            ->andFilterWhere(['like', 'how_take_text', $this->how_take_text])
            ->andFilterWhere(['like', 'how_take_text_left', $this->how_take_text_left])
            ->andFilterWhere(['like', 'how_take_text_right', $this->how_take_text_right])
            ->andFilterWhere(['like', 'how_take_point_title', $this->how_take_point_title])
            ->andFilterWhere(['like', 'how_take_point_text', $this->how_take_point_text])
            ->andFilterWhere(['like', 'advantages_title', $this->advantages_title])
            ->andFilterWhere(['like', 'advantages_text', $this->advantages_text])
            ->andFilterWhere(['like', 'advantages_list_1', $this->advantages_list_1])
            ->andFilterWhere(['like', 'advantages_list_2', $this->advantages_list_2])
            ->andFilterWhere(['like', 'advantages_list_3', $this->advantages_list_3])
            ->andFilterWhere(['like', 'advantages_list_4', $this->advantages_list_4]);

        return $dataProvider;
    }
}
