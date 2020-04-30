<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Update a customer</div>
        <div class="panel-body">
            <div class="col-md-6">
                <?= $this->Form->create($customer) ?>
                <div class="form-group">
                    <?= $this->Form->control('first_name',[
                        'class' => 'form-control'
                    ]); ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('last_name',[
                        'class' => 'form-control'
                    ]); ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('email',[
                        'class' => 'form-control'
                    ]); ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('tel',[
                        'class' => 'form-control'
                    ]); ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('address',[
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
