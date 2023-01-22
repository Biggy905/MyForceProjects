<?php

use yii\db\Migration;

class m230122_134433_CreateNewsCategories extends Migration
{
    public function safeUp(): void
    {
        $this->createTable(
            '{{%news_categories}}',
            [
                'id' => $this->bigInteger(32),
                'name' => $this->string(),
                'status' => $this->string(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );

        $this->addPrimaryKey('news_categories_pkey', '{{%news_categories}}', 'id');
    }

    public function safeDown(): void
    {
        $this->dropTable('{{%news_categories}}');
    }
}
