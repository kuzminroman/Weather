<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%weather}}`.
 */
class m190720_103358_create_weather_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%weather}}', [
            'id' => $this->primaryKey(),
            'date' => $this->text(),
            'degrees' => $this->text(),
            'description' => $this->text(),
            'pressure' => $this->text(),
            'humidity' => $this->text(),
            'wind' => $this->text(),
            'type_wind' => $this->text(),
            'extra' => $this->text(),
            'date_regist' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%weather}}');
    }
}