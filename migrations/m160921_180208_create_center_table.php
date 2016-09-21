<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `center`.
 */
class m160921_180208_create_center_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('center', [
            'id' => Schema::TYPE_PK,
            'center_id' => Schema::TYPE_INTEGER,
            'osmd_name' => Schema::TYPE_STRING . ' NOT NULL',
            'address' => Schema::TYPE_STRING,
            'date_registration' => Schema::TYPE_DATE,
            'floor' => Schema::TYPE_INTEGER,
            'square' => Schema::TYPE_INTEGER,
            'apartments' => Schema::TYPE_STRING,
            'cooperative' => Schema::TYPE_STRING,
            'balance' => Schema::TYPE_STRING,
            'president' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
            'mail' => Schema::TYPE_STRING,
            'note' => Schema::TYPE_STRING,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('center');
    }
}
