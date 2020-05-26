<!DOCTYPE html>
<html>
<?= $this->element('head') ?>
<body>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading"><?= $this->Flash->render() ?> </div>
            <div class="panel-heading">CAKEPHP TUTORIAL | Authentification </div>
            <div class="panel-body">
                <?= $this->Form->create() ?>
                <div class="form-group">
                    <?= $this->Form->control('username',[
                        'class' => 'form-control'
                    ]); ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('password',[
                        'class' => 'form-control'
                    ]); ?>
                </div>
                <?= $this->Form->button('Save',[
                    'class' => 'btn btn-primary'
                ]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<?= $this->element('scripts') ?>

</body>

</html>
