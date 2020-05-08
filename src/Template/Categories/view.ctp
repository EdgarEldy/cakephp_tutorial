<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Category details</div>
        <div class="panel-body">
        <h3>Category ID : <?= h($category->id) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Id :') ?></th>
                <td><?= $this->Number->format($category->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Category Name :') ?></th>
                <td><?= h($category->cat_name) ?></td>
            </tr>
        </table>
        </div>
    </div>
</div>
