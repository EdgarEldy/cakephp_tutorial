<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Update profile</div>
        <div class="panel-body">
            <div class="col-md-6">
                <?= $this->Form->create($user) ?>
                <fieldset>

                    <div class="form-group">
                        <?= $this->Form->control('profile_id', [
                            'options' => $profiles,
                            'empty' => 'Profile name :',
                            'class' => 'form-control'
                        ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('username', [
                            'class' => 'form-control'
                        ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('password', [
                            'class' => 'form-control'
                        ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('confirm_password', [
                            'type' => 'password',
                            'class' => 'form-control'
                        ]); ?>
                    </div>
                </fieldset>
                <?= $this->Form->button('Save', [
                    'class' => 'btn btn-primary'
                ]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div><!-- /.col-->
