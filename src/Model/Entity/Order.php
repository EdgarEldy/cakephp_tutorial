<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int $product_id
 * @property int $qty
 * @property float $total
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Product $product
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'product_id' => true,
        'qty' => true,
        'total' => true,
        'customer' => true,
        'product' => true,
    ];
}
