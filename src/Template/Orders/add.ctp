<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Add an order</div>
        <div class="panel-body">
            <div class="col-md-6">
                <?= $this->Form->create($order) ?>
                <fieldset>
                    <div class="form-group">
                        <?= $this->Form->control('customer_id', [
                            'options' => $customers,
                            'empty' => 'Select a customer',
                            'class' => 'form-control'
                        ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('product_id', [
                            'options' => $products,
                            'empty' => 'Select a product',
                            'class' => 'form-control'
                        ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('unit_price',[
                            'class' => 'form-control'
                        ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('qty', [
                            'class' => 'form-control',
                            'type' => 'text'
                        ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('total', [
                            'class' => 'form-control',
                            'type' => 'text']); ?>
                    </div>
                </fieldset>
                <?= $this->Form->button('Save',[
                    'class' => 'btn btn-primary'
                ]) ?>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div><!-- /.col-->