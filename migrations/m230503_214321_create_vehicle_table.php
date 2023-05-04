<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vehicle}}`.
 */
class m230503_214321_create_vehicle_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vehicle}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'brand' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer(),
        ]);

        $this->createIndex(
            '{{idx-vehicle-brand}}',
            '{{%vehicle}}',
            'brand'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex(
            '{{idx-vehicle-brand}}',
            '{{%vehicle}}'
        );

        $this->dropTable('{{%vehicle}}');
    }
}
