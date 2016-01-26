<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "z_ticket".
 *
 * @property integer $ticket_id
 * @property string $number
 * @property integer $user_id
 * @property integer $status_id
 * @property integer $type_id
 * @property integer $topic_id
 * @property integer $staff_id
 * @property integer $team_id
 * @property string $ip_address
 * @property integer $source_id
 * @property string $created
 * @property string $updated
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_ticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status_id', 'type_id', 'topic_id', 'staff_id', 'team_id', 'source_id'], 'integer'],
            [['created', 'updated'], 'required'],
            [['created', 'updated'], 'safe'],
            [['number'], 'string', 'max' => 20],
            [['ip_address'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ticket_id' => 'Ticket ID',
            'number' => 'Number',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
            'type_id' => 'Type ID',
            'topic_id' => 'Topic ID',
            'staff_id' => 'Staff ID',
            'team_id' => 'Team ID',
            'ip_address' => 'Ip Address',
            'source_id' => 'Source ID',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
