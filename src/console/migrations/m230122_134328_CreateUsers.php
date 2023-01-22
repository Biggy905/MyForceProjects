<?php

use yii\db\Migration;

final class m230122_134328_CreateUsers extends Migration
{
    public function safeUp(): void
    {
        $this->createTable(
            '{{%users}}',
            [
                'id' => $this->bigInteger(32),
                'username' => $this->string(),
                'password' => $this->string(),
                'email' => $this->string(),
                'status' => $this->string(),
                'role' => $this->string(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );

        $this->addPrimaryKey('users_pkey', '{{%users}}', 'id');
    }

    public function safeDown(): void
    {
        $this->dropTable('{{%users}}');
    }
}
