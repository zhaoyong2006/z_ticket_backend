<?php

namespace backend\models;

use common\models\UserProfile;
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

    /**
     * 获取新工单号
     * @return int
     */
    public function newTicketNumber()
    {
        $randNumber = self::randNumber(8);
        $findResult = self::findAll(array('number' => $randNumber));
        if (!empty($findResult)) {
            self::newTicketNumber();
        }
        return (string)$randNumber;

    }

    /* Helper used to generate ticket IDs */
    protected function randNumber($len = 6, $start = false, $end = false)
    {

        $start = (!$len && $start) ? $start : str_pad(1, $len, "0", STR_PAD_RIGHT);
        $end = (!$len && $end) ? $end : str_pad(9, $len, "9", STR_PAD_RIGHT);

        return mt_rand($start, $end);
    }

    public function getCdata()
    {
        return $this->hasOne(TicketCdata::className(), array('ticket_id' => 'ticket_id'));
    }

    public function getTicketTopic()
    {
        return $this->hasMany(TicketTopicRelation::className(), array('ticket_id' => 'ticket_id'));
    }

    public function getFile()
    {
        return $this->hasMany(File::className(), array('attribute_id'=>'ticket_id'))
            ->where('attribute=:table_name',array('table_name'=>Ticket::tableName()));
    }
    public function getUserProfile()
    {
        return $this->hasOne(UserProfile::className(), array('user_id'=>'staff_id'));
    }
}
