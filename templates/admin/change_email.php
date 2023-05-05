
<div class="container">
    <h3 class="text-center py-2">Modifier votre email</h3>

    <div class="mt-4">
        <?= $this->Form->create() ?>
        <fieldset>
            <div class="d-flex justify-content-center row">
                <div class="align-items-center col-12 d-flex flex-column w-50">
                    <div class="form-control p-5">
                        <label class=" pt-3" for="oldemail">Votre email</label><input value="<?= $currentUser->email ?>" type="email" name="oldemail" class="form-control" disabled>
                        <label class=" pt-3" for="email">Nouvel email</label><input type="email" name="email" class="form-control" id="email" required>
                        <label class=" pt-3" for="email_confirm">Confirmer votre email</label><input type="email" name="email_confirm" class="form-control" id="email_confirm" required>
                        <button class="btn btn-primary mt-4" type="submit">Valider</button>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </fieldset>
    </div>
</div>

