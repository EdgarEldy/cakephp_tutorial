<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('profile_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 45,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addIndex(['profile_id']);
        $table->create();

        $table = $this->table('users');
        $table->addForeignKey('profile_id','profiles','id',[
           'update' => 'RESTRICT',
           'delete' => 'RESTRICT'
        ]);
        $table->update();
    }

    public function down()
    {
        $this->table('users')
            ->dropForeignKey('profile_id')
            ->save();
        $this->table('users')
            ->drop()
            ->save();
    }
}
