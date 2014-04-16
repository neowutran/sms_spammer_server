<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sms".
 *
 * @property integer $id
 * @property string $recipient
 * @property string $message
 * @property string $status
 */
class Sms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['recipient', 'message', 'status'], 'required'],
            [['status'], 'string'],
            [['recipient'], 'string', 'max' => 15],
            [['message'], 'string', 'max' => 160]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'recipient' => 'Recipient',
            'message' => 'Message',
            'status' => 'Status',
        ];
    }
}
