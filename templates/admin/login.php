<div class="p-3 m-1">

    <h1 class="text-center"><b><?= $Settings['project_name'] ?></b></h1>

    <div class="rounded bg-gray-light">
        <h3 class="mb-3">Connexion</h3>
        <?= $this->Form->create() ?>
        <fieldset>
            <?= $this->Form->control('email', ['class' => 'form-control','required' => true]) ?>
            <div class="mt-3"></div>
            
            <p class="p-0 m-0">Password</p>
            <div class="input-group">
                <!-- <?= $this->Form->control('password', ['class' => 'form-control']) ?> -->
                <input type="password" name="password" class="form-control" id="passwordLogin" required>
                <div class="input-group-append">
                    <span class="h-100 input-group-text"><i class="fa-solid fa-eye h-100 d-flex input-group-text" id="btnEyeChange" onclick="hidepasseword('passwordLogin', 'btnEyeChange')"></i></span>
                </div>
            </div>

        </fieldset>
        <div class="d-flex justify-content-between">
            
            <?= $this->Form->submit(__('Se connecter'), ['class' => 'btn btn-primary mt-3']); ?>

            <?= $this->Html->link("Mot de passe oublié", ['controller' => 'Email', 'action' => 'resetPassword']) ?>

        </div>
        <?= $this->Form->end() ?>
    </div>

    <!-- <?= $this->Html->link("Add User", ['action' => 'add']) ?> -->
</div>