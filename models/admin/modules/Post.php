<?php

namespace app\models\admin\modules;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $id
 * @property string $title
 * @property string $excerpt
 * @property string $text
 * @property string $keywords
 * @property string $description
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'excerpt', 'text', 'keywords', 'description'], 'required'],
            [['id'], 'integer'],
            [['text'], 'string'],
            [['title', 'excerpt', 'keywords', 'description'], 'string', 'max' => 256],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'text' => 'Text',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
