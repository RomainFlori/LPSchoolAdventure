
<div class="container-fluid">

    <?= $this->Html->link(
        '< Retour',
        ['controller' => $controllerName, 'action' => 'index'],
        ['class' => 'btn btn-secondary']
    ); ?>
    <h3 class="text-center py-4">Ajouter un membre à l'équipe</h3>

    <div class="mt-4">
        <?= $this->Form->create() ?>
        <fieldset>
            <div class="d-flex justify-content-center row">
                <div class="align-items-center col-12 d-flex flex-column w-50">
                    <div class="bg-white container p-5 rounded">
                        <label class=" pt-3" for="prenom">Prenom</label><input type="text" name="first_name" class="form-control" id="prenom">
                        <label class=" pt-3" for="nom">Nom</label><input type="text" name="last_name" class="form-control" id="nom">
                        <label class=" pt-3" for="description">Description</label><input type="description" name="description" class="form-control" id="description">
                        <button class="btn btn-primary mt-4" type="submit">Valider</button>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>
    </div>
</div>

