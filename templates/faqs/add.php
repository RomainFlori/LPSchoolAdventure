
<div class="container-fluid">

    <?= $this->Html->link(
        '< Retour',
        ['controller' => $controllerName, 'action' => 'index'],
        ['class' => 'btn btn-secondary']
    ); ?>
    <h3 class="text-center py-4">Ajouter une question à la FAQ</h3>

    <div class="mt-4">
        <?= $this->Form->create() ?>
        <fieldset>
            <div class="d-flex justify-content-center row">
                <div class="align-items-center col-12 d-flex flex-column w-50">
                    <div class="bg-white container p-5 rounded">
                        <label class="m-0 pt-3" for="question">Question</label><input value="" type="text" name="question" class="form-control" id="question">
                        <label class="m-0 pt-3" for="text">Réponse</label><textarea type="text" name="text" class="form-control" id="text"></textarea>
                        <button class="btn btn-primary mt-4" type="submit">Valider</button>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>
    </div>
</div>

