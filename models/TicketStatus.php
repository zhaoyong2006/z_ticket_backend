<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "z_ticket_status".
 *
 * @property integer $status_id
 * @property string $name
 * @property integer $sort
 * @property string $properties
 * @property string $created
 * @property string $updated
 */
class TicketStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_ticket_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['properties'], 'required'],
            [['properties'], 'string'],
            [['created', 'updated'], 'safe'],
            [['name'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'name' => 'Name',
            'sort' => 'Sort',
            'properties' => 'Properties',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
