<?php
use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
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
        $table = $this->table('products');
        $table->addColumn('category_id','integer',[
           'default' => null,
           'limit' => 11,
           'null' => false
        ]);
        $table->addColumn('product_name','string',[
           'default' => null,
           'limit' => 45,
           'null' => false
        ]);
        $table->addColumn('unit_price','integer',[
            'default' => null,
            'limit' => 11,
            'null' => false
        ]);
        $table->addIndex(['category_id']);

        $table->create();

        $table = $this->table('products');
        $table->addForeignKey('category_id','categories','id',[
                'update' => 'RESTRICT',
                'delete' => 'RESTRICT'
            ]);
        $table->update();
    }

    public function down()
    {
        $this->table('products')
            ->dropForeignKey('category_id')
            ->save();
        $this->table('products')->drop()->save();
    }
}
