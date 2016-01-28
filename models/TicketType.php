<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "z_ticket_type".
 *
 * @property integer $type_id
 * @property string $type_name
 * @property integer $manager_id
 * @property string $dept_signature
 * @property integer $ispublic
 * @property string $updated
 * @property string $created
 */
class TicketType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_ticket_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manager_id', 'ispublic'], 'integer'],
            [['dept_signature', 'updated', 'created'], 'required'],
            [['dept_signature'], 'string'],
            [['updated', 'created'], 'safe'],
            [['type_name'], 'string', 'max' => 128],
            [['type_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => Yii::t('app', 'Type ID'),
            'type_name' => Yii::t('app', 'Type Name'),
            'manager_id' => Yii::t('app', 'Manager ID'),
            'dept_signature' => Yii::t('app', 'Dept Signature'),
            'ispublic' => Yii::t('app', 'Ispublic'),
            'updated' => Yii::t('app', 'Updated'),
            'created' => Yii::t('app', 'Created'),
        ];
    }
}
