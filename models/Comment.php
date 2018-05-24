<?php

namespace kouosl\comment\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property text $email
 * @property string $comment
 * @property string $priority
 * @property string $date
 * @property string $username
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'comment', 'priority','email'], 'required'],
            [['username', 'priority'], 'string'],
            [['date'], 'safe'],
            [['comment'], 'string', 'max' => 255],
            [['email'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'comment' => 'Comment',
            'priority' => 'Priority',
            'date' => 'Date',
            'email' => 'Email',
        ];
    }
}
