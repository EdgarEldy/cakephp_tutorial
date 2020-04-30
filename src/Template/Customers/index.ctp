<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading"><?= $this->Flash->render() ?></div>
        <div class="panel-heading">Customers</div>
        <div class="panel-body">
            <?= $this->Html->link('New','customers/add',[
                    'class' => 'btn btn-primary'
            ]) ?>
            <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                   data-sort-name="name" data-sort-order="desc">
            <thead>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Tel</th>
            <th>Address</th>
            <th><?= __('Options') ?></th>
            </thead>
                <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->id) ?></td>
                    <td><?= h($customer->first_name) ?></td>
                    <td><?= h($customer->last_name) ?></td>
                    <td><?= h($customer->email) ?></td>
                    <td><?= h($customer->tel) ?></td>
                    <td><?= h($customer->address) ?></td>
                    <td>
                    <?= $this->Html->link(__('view'), [
                            'action' => 'view',
                            $customer->id
                    ]) ?>
                    <?= $this->Html->link(__('Edit'), [
                            'action' => 'edit',
                            $customer->id
                    ]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete'],[
                            'confirm' => __('Are you sure you want to delete customer # {0} ?', $customer->id)
                    ]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
