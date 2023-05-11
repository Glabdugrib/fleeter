<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int        $id
 * @property string     $name
 * @property int        $group
 * @property string     $currency
 * @property int        $created_at
 * @property int|null   $updated_at
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'group', 'currency', 'created_at'], 'required'],
            [['group', 'created_at', 'updated_at'], 'integer'],
            [['name', 'currency'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'group' => Yii::t('app', 'Group'),
            'currency' => Yii::t('app', 'Currency'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
