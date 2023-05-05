
<div class="container">
<h3 class="text-center py-2">Ajouter un utilisateur</h3>

    <div class="mt-4">
        <?= $this->Form->create() ?>
        <fieldset>
            <div class="d-flex justify-content-center row">
                <div class="align-items-center col-12 d-flex flex-column w-50">
                    <div class="form-control p-5">
                        <label class="" for="email">Email</label><input type="text" name="email" class="form-control" id="email">
                        <label class=" pt-3" for="nom">Nom</label><input type="text" name="last_name" class="form-control" id="nom">
                        <label class=" pt-3" for="prenom">Prenom</label><input type="text" name="first_name" class="form-control" id="prenom">
                        <label class=" pt-3" for="password">Mot de passe</label><input type="password" name="password" class="form-control" id="password">
                        <button class="btn mt-4" type="submit">Valider</button>
                    </div>
                </div>
            </div>
        </fieldset>
        <?= $this->Form->end() ?>
    </div>
</div>

