<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user_device`.
 */
class m161005_122000_create_user_device_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_device', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'os_type' => $this->char(16),
            'channel' => $this->char(16),
            'device_id' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_device');
    }
}
