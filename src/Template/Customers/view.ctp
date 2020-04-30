<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Customer details</div>
        <div class="panel-body">
        <h3>Customer ID : <?= h($customer->id) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Id :') ?></th>
                <td><?= $this->Number->format($customer->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('First Name :') ?></th>
                <td><?= h($customer->first_name) ?></td>
            </tr>

            <tr>
                <th scope="row"><?= __('Last Name :') ?></th>
                <td><?= h($customer->last_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email :') ?></th>
                <td><?= h($customer->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Tel :') ?></th>
                <td><?= h($customer->tel) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Address :') ?></th>
                <td><?= h($customer->address) ?></td>
            </tr>
        </table>
        </div>
    </div>
</div>
