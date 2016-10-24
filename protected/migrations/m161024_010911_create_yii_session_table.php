<?php

class m161024_010911_create_yii_session_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('yiisession', array(
            'id'        =>  "CHAR(32) NOT NULL",
            'expire'    =>  "int(11) NOT NULL COMMENT '文件创建人id'",
            'data'   =>  "LONGBLOB",
            'userId'    =>  "INT(11) NOT NULL COMMENT '用户id'",
            "PRIMARY KEY (`id`)",
        ), "ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='session'");
	}

	public function down()
	{
		$this->dropTable('yiisession');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}