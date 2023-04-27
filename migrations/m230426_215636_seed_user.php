<?php

use app\models\enums\UserStatus;
use yii\db\Migration;

/**
 * Class m230426_215636_seed_user
 */
class m230426_215636_seed_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $currentTime = time();

        $this->insert('{{%user}}', [
            'username' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('password1234'),
            'password_reset_token' => Yii::$app->security->generateRandomString(),
            'email' => 'admin@fleeter.com',
            'status' => UserStatus::ACTIVE->value,
            'created_at' => $currentTime,
            'updated_at' => $currentTime,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }
}
