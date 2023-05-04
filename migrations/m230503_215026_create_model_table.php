<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%model}}`.
 */
class m230503_215026_create_model_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%model}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'vehicle_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer(),
        ]);

        $this->createIndex(
            '{{idx-model-vehicle_id}}',
            '{{%model}}',
            'vehicle_id'
        );

        $this->addForeignKey(
            '{{fk-model-vehicle_id}}',
            'model',
            'vehicle_id',
            'vehicle',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            '{{fk-model-vehicle_id}}',
            'model'
        );

        $this->dropIndex(
            '{{idx-model-vehicle_id}}',
            '{{%model}}'
        );

        $this->dropTable('{{%model}}');
    }
}
