<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $author_id
 * @property integer $img_id
 * @property string $date
 * @property integer $category_id
 * @property string $text
 * @property string $title
 * @property string $abridgment
 * @property integer $activity
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'category_id', 'text', 'title', 'abridgment'], 'required'],
            [['author_id', 'img_id', 'category_id', 'activity'], 'integer'],
            [['date'], 'safe'],
            [['text', 'abridgment'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'img_id' => 'Img ID',
            'date' => 'Date',
            'category_id' => 'Category ID',
            'text' => 'Text',
            'title' => 'Title',
            'abridgment' => 'Abridgment',
            'activity' => 'Activity',
            'keywords',
            'meta_desc',
        ];
    }
}
