<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Add a product</div>
        <div class="panel-body">
            <div class="col-md-6">
        <?= $this->Form->create($product) ?>
        <div class="form-group">
          <?= $this->Form->control('category_id', [
                  'options' => $categories,
              'class' => 'form-control'
          ]); ?>
        </div>
        <div class="form-group">
           <?= $this->Form->control('product_name', [
                   'class' => 'form-control'
           ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('unit_price', [
                    'class' => 'form-control'
            ]) ?>
        </div>
    <?= $this->Form->button('Save',[
            'class' => 'btn btn-primary'
    ]) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div><!-- /.col-->
