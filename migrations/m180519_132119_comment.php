<?php

use yii\db\Migration;

/**
 * Class m180519_132119_comment
 */
class m180519_132119_comment extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('comment', [
            'id' => $this->primaryKey(),
			'username' => $this->integer(15)->defaultValue(1),
            'comment' => $this->string(255)->notNull(),
            'priority' =>"ENUM('Acil','Normal')",
            'date' => $this->dateTime(),
			'email'=> $this->text(),
        ], $tableOptions);

       

    }

    public function down()
    {
        $this->dropTable('comment');
    }
}
