<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%price}}`.
 */
class m230504_204858_create_price_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%price}}', [
            'id' => $this->primaryKey(),
            'model_id' => $this->integer()->notNull(),
            'customer_id' => $this->integer()->notNull(),
            'valid_from' => $this->integer()->notNull(),
            'valid_until' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer(),
        ]);

        $this->createIndex(
            '{{idx-price-model_id}}',
            '{{%price}}',
            'model_id'
        );

        $this->createIndex(
            '{{idx-price-customer_id}}',
            '{{%price}}',
            'customer_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex(
            '{{idx-price-customer_id}}',
            '{{%price}}'
        );

        $this->dropIndex(
            '{{idx-price-model_id}}',
            '{{%price}}'
        );

        $this->dropTable('{{%price}}');
    }
}
