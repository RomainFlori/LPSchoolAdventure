
<div class="container">
    <h3 class="text-center py-2">Reinitialisation de votre mot de passe</h3>

    <div class="mt-4">
        <?= $this->Form->create() ?>
        <fieldset>
            <div class="d-flex justify-content-center row">
                <div class="align-items-center col-12 d-flex flex-column w-50">
                    <div class="form-control p-5">
                        <label class=" pt-3" for="password">Nouveau mot de passe</label><input type="password" name="password" class="form-control" id="password" minlength="8" required>
                        <label class=" pt-3" for="password_confirm">Confirmer votre mot de passe</label><input type="password" name="password_confirm" class="form-control" id="password_confirm" minlength="8" required>
                        <button class="btn btn-primary mt-4" type="submit">Valider</button>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>
    </div>
</div>

