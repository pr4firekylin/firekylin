<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user`.
 */
class m161005_121131_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->char(64),
            'password' => $this->char(32),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
