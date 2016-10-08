<?php

use yii\db\Migration;

/**
 * Handles the creation for table `message`.
 */
class m161007_125505_create_message_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('message', [
            'id' => $this->primaryKey(),
            'uuid' => $this->char(36),
            'title' => $this->string(),
            'content' => $this->string(),
            'users' => $this->string(),
            'time' => $this->datetime(),
            'params' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('message');
    }
}
