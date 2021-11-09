<?php

use think\migration\Migrator;
use think\migration\db\Column;

class UsersMessages extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table  =  $this->table('users_messages1',array('engine'=>'MyISAM'));
        $table->addColumn('user_id', 'string',array('limit'  =>  15,'default'=>'','comment'=>'用户id'))


            ->addColumn('messages_id', 'integer',array('limit'  =>  11,'default'=>0,'comment'=>'最后登录IP'))

            ->addColumn('status', 'integer',array('limit'  =>  1,'default'=>0,'comment'=>'删除状态，1已删除'))

            ->create();
    }
    public function up()
    {

    }
    /**
     * Migrate Down.
     */
    public function down()
    {

    }


}
