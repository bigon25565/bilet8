<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m191226_073456_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(25),
            'text' => $this->text(),
            'date' => $this->date(8),
            'author' => $this->string(25),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
