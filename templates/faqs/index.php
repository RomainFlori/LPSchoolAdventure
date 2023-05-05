
<div class="container-fluid">

    <h3 class="text-center py-2">Page <?= $controllerName ?></h3>
    <?= $this->Html->link(
        'Ajouter une question',
        ['action' => 'add'],
        ['class' => 'btn btn-primary my-4']
        )
    ?>
    
    <table cellspacing=0 class="table table-bordered table-hover table-inverse table-striped" id='datatable' width=100%>
        <thead>
            <tr>
                <th>Question
                <th>Text
                <th>Actions
            </tr>
            <tfoot>
                <tr>
                    <!-- <th>Nom
                    <th>Prenom
                    <th>Description -->
                    <tbody>
                        <?php foreach($faqs as $faq) : ?>
                        <tr>
                            <td><?= $faq->question ?></td>
                            <td><?= $faq->text ?></td>
                            <td>
                                <div class="d-flex px-2">


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning mx-1" data-bs-toggle="modal" data-bs-target="#edit<?=$faq->id?>">
                                Modifier
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="edit<?=$faq->id?>" tabindex="-1" aria-labelledby="edit<?=$faq->id?>Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="edit<?=$faq->id?>Label">Modifier la question?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= $this->Form->create(null, [
                                                        'url' => [
                                                            'controller' => 'faqs',
                                                            'action' => 'edit',
                                                            $faq->id
                                                            ]]) ?>

                                                <fieldset>
                                                    <div class="d-flex justify-content-center row">
                                                        <div class="align-items-center col-12 d-flex flex-column">
                                                            <div class="container-fluid">
                                                                <label class="m-0 pt-3" for="question">Question</label><input value="<?= $faq->question ?>" type="text" name="first_name" class="form-control" id="question">
                                                                <label class="m-0 pt-3" for="text">Réponse</label><textarea type="text" name="last_name" class="form-control" id="text"><?= $faq->text ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                <button id="editBtn<?=$faq->id?>" type="submit" class="btn btn-warning" data-bs-dismiss="modal">Modifier</button>
                                                <?= $this->Form->end() ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#delete<?=$faq->id?>">
                                Supprimer
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete<?=$faq->id?>" tabindex="-1" aria-labelledby="delete<?=$faq->id?>Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="delete<?=$faq->id?>Label">Voulez vous vraiment supprimer cette question?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= $faq->question?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                <?= $this->Form->postLink(
                                                'Supprimer',
                                                ['action' => 'delete', $faq->id],
                                                ['class' => 'btn btn-danger']
                                                )
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                </div>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </tr>
            </tfoot>
        </thead>
    </table>


</div>
