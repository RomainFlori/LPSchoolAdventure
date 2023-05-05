
<div class="p-3 m-1">
    <?= $this->Flash->render() ?>
    
    
    <?= $this->Html->link("< Retour", ['controller' => 'Admin', 'action' => 'login'], ['class' => 'btn btn-secondary']) ?>
    <div class="rounded bg-gray-light mt-5">
        <h3 class="mb-3">Reinitialiser votre mot de passe</h3>
        <?= $this->Form->create() ?>
        <fieldset>

            <input type="email" name="email" value="<?php if (isset($currentUser)) {echo $currentUser['email']; } ?>" class="form-control" required="required" id="email" aria-required="true">
            <!-- <?= $this->Form->control('email', ['class' => 'form-control','required' => true, 'value' => $settingsTable->email]) ?> -->
            <small id="" class="form-text text-muted">Un mot de passe aléatoire vous sera envoyé par mail (pensez à regarder vos spams)</small>
            
        </fieldset>
        <div class="d-flex">
            
            <?= $this->Form->submit(__('Reinitialiser'), ['class' => 'btn btn-warning mt-3']); ?>

        </div>
        <?= $this->Form->end() ?>
    </div>
</div>