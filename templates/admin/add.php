
<div class="">
    <?= $this->Flash->render() ?>
    <h3>Ajouter un utilisateur</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('first_name', ['required' => true]) ?>
        <?= $this->Form->control('last_name', ['required' => true]) ?>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Add')); ?>
    <?= $this->Form->end() ?>

</div>