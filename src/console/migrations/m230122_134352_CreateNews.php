<?php

use yii\db\Migration;

final class m230122_134352_CreateNews extends Migration
{
    public function safeUp(): void
    {
        $this->createTable(
            '{{%news}}',
            [
                'id' => $this->bigInteger(32),
                'id_category' => $this->string(),
                'title' => $this->string(),
                'description' => $this->text(),
                'status' => $this->string(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );

        $this->addPrimaryKey('news_pkey', '{{%news}}', 'id');
    }

    public function safeDown(): void
    {
        $this->dropTable('{{%news}}');
    }
}
