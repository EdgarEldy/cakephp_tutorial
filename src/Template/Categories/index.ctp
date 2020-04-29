<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading"><?= $this->Flash->render() ?></div>
        <div class="panel-heading">Product categories</div>
        <div class="panel-body">
            <?= $this->Html->link('New','categories/add',[
                    'class' => 'btn btn-primary'
            ]) ?>
            <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                   data-sort-name="name" data-sort-order="desc">
            <thead>
            <th>ID</th>
            <th>Category name</th>
            <th><?= __('Options') ?></th>
            </thead>
                <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $this->Number->format($category->id) ?></td>
                    <td><?= h($category->cat_name) ?></td>
                    <td>
                    <?= $this->Html->link(__('view'), [
                            'action' => 'view',
                            $category->id
                    ]) ?>
                    <?= $this->Html->link(__('Edit'), [
                            'action' => 'edit',
                            $category->id
                    ]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete'],[
                            'confirm' => __('Are you sure you want to delete category # {0} ?', $category->id)
                    ]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
