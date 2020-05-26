<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Add a user profile</div>
        <div class="panel-body">
            <div class="col-md-6">
                <?= $this->Form->create($profile) ?>
                <div class="form-group">
                    <?= $this->Form->control('profile_name',[
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
