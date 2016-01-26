<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "z_ticket_topic".
 *
 * @property integer $topic_id
 * @property string $topic_name
 * @property string $topic_signature
 * @property string $created
 * @property string $updated
 */
class TicketTopic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_ticket_topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_signature'], 'required'],
            [['topic_signature'], 'string'],
            [['created', 'updated'], 'safe'],
            [['topic_name'], 'string', 'max' => 128],
            [['topic_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'topic_id' => 'Topic ID',
            'topic_name' => 'Topic Name',
            'topic_signature' => 'Topic Signature',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
