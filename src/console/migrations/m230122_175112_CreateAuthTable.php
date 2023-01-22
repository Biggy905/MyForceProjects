<?php

use yii\db\Migration;

final class m230122_175112_CreateAuthTable extends Migration
{
    public function safeUp(): void
    {
        $this->createTable(
            '{{%auth_assignment}}',
            [
                'item_name' => $this->string(64),
                'user_id' => $this->string(64),
                'created_at' => $this->dateTime(),
                'PRIMARY KEY ([[item_name]], [[user_id]])',
            ]
        );

        $this->createTable(
            '{{%auth_rule}}',
            [
                'name' => $this->string(64),
                'data' => $this->binary(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'PRIMARY KEY ([[name]])',
            ]
        );

        $this->createTable(
            '{{%auth_item}}',
            [
                'name' => $this->string(64),
                'type' => $this->smallInteger(),
                'description' => $this->text(),
                'rule_name' => $this->string(64),
                'data' => $this->binary(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'PRIMARY KEY ([[name]])',
            ]
        );
        $this->createIndex('auth_item_type_index', '{{%auth_item}}', 'type');

        $this->createTable(
            '{{%auth_item_child}}',
            [
                'parent' => $this->string(64),
                'child' => $this->string(64),
                'PRIMARY KEY ([[parent]], [[child]])',
            ]
        );
    }

    public function safeDown(): void
    {
        $this->dropTable('{{%auth_assignment}}');
        $this->dropTable('{{%auth_item}}');
        $this->dropTable('{{%auth_item_child}}');
        $this->dropTable('{{%auth_rule}}');
    }
}
