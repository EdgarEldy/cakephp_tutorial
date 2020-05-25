<?php
use Migrations\AbstractMigration;

class CreateOrders extends AbstractMigration
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
        $table = $this->table('orders')
        ->addColumn('customer_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('product_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('qty', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('total', 'float', [
            'default' => null,
            'null' => false,
        ])
        ->addIndex(
            [
                'customer_id'
            ]
        )
        ->addIndex(
            [
                'product_id'
            ]
        )
        ->create();

        $this->table('orders')
        ->addForeignKey(
            'customer_id',
            'customers',
            'id',
            [
                'update' => 'RESTRICT',
                'delete' => 'RESTRICT'
            ]
        )
        ->addForeignKey(
            'product_id',
            'products',
            'id',
            [
                'update' => 'RESTRICT',
                'delete' => 'RESTRICT'
            ]
        )
        ->update();
    }
}
