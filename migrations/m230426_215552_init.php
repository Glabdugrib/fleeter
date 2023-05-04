<?php

use app\models\enums\UserStatus;
use yii\db\Migration;

/**
 * Class m230426_215552_init
 */
class m230426_215552_init extends Migration
{
   public function up()
   {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
         $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }

      // Create user table
      $this->createTable('{{%user}}', [
         'id' => $this->primaryKey(),
         'username' => $this->string()->notNull()->unique(),
         'auth_key' => $this->string(32)->notNull(),
         'password_hash' => $this->string()->notNull(),
         'password_reset_token' => $this->string()->unique(),
         'email' => $this->string()->notNull()->unique(),

         'status' => $this->smallInteger()->notNull()->defaultValue(10),
         'created_at' => $this->integer()->notNull(),
         'updated_at' => $this->integer(),
      ], $tableOptions);

      // Create admin user
       $this->insert('{{%user}}', [
          'username' => 'admin',
          'auth_key' => Yii::$app->security->generateRandomString(),
          'password_hash' => Yii::$app->security->generatePasswordHash('password1234'),
          'password_reset_token' => Yii::$app->security->generateRandomString(),
          'email' => 'admin@fleeter.com',
          'status' => UserStatus::ACTIVE->value,
          'created_at' => time(),
       ]);
   }

   public function down()
   {
      $this->dropTable('{{%user}}');
   }
}
