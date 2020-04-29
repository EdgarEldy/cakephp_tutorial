<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Update a product category</div>
        <div class="panel-body">
            <div class="col-md-6">
                <?= $this->Form->create($category) ?>
                <div class="form-group">
                    <?= $this->Form->control('cat_name',[
                        'class' => 'form-control'
                    ]); ?>
                </div>

                <?= $this->Form->button('Save',[
                    'class' => 'btn btn-primary'
                ]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div><!-- /.col-->
