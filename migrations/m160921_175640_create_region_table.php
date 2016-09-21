<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `region`.
 */
class m160921_175640_create_region_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('region', [
            'id' => Schema::TYPE_PK,
            'region' => Schema::TYPE_STRING . ' NOT NULL',

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('region');
    }
}
