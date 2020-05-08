<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Customer details</div>
        <div class="panel-body">
            <h3>Product ID : <?= h($product->id) ?></h3>
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Id :') ?></th>
                    <td><?= $product->has('category') ? $this->Html->link($product->category->cat_name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('First Name :') ?></th>
                    <td><?= h($product->product_name) ?></td>
                </tr>

                <tr>
                    <th scope="row"><?= __('Last Name :') ?></th>
                    <td><?= h($product->unit_price) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
