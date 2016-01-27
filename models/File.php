<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "z_file".
 *
 * @property integer $attach_id
 * @property string $attribute
 * @property integer $attribute_id
 * @property string $file_name
 * @property string $file_index
 * @property string $size
 * @property string $type
 * @property string $created
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attribute_id'], 'integer'],
            [['created'], 'safe'],
            [['attribute', 'size', 'type'], 'string', 'max' => 16],
            [['file_name', 'file_index'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attach_id' => 'Attach ID',
            'attribute' => 'Attribute',
            'attribute_id' => 'Attribute ID',
            'file_name' => 'File Name',
            'file_index' => 'File Index',
            'size' => 'Size',
            'type' => 'Type',
            'created' => 'Created',
        ];
    }
}
