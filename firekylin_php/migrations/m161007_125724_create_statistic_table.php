<?php

use yii\db\Migration;

/**
 * Handles the creation for table `statistic`.
 */
class m161007_125724_create_statistic_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('statistic', [
            'id' => $this->primaryKey(),
            'uuid' => $this->char(36),
            'user_id' => $this->integer(),
            'os_type' => $this->char(16),
            'channel' => $this->char(16),
            'device_id' => $this->string(),
            'status' => $this->char(16),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('statistic');
    }
}
