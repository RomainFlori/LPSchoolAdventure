

<?= $this->Html->css('admin/datatables') ?>
<?= $this->Html->script('admin/datatables.min.js') ?>
<?= $this->Html->script('jQuery-3.6.0/jquery-3.6.0.js') ?>


<!-- <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js></script> -->
<!-- <link href=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/dataTables.bootstrap4.min.css rel=stylesheet> -->
<!-- <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js></script> -->
<!-- <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap4.min.js></script> -->

<link href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css rel=stylesheet>
<link rel="stylesheet" href="/dist/DataTables/css/dataTables.bootstrap4.min.css">

<script src="/dist/DataTables/js/jquery.dataTables.min.js"></script>
<script src="/dist/DataTables/js/dataTables.bootstrap4.min.js"></script>


<div class="container-fluid">

    <h3 class="text-center py-2">Page <?= $controllerName ?></h3>
    <?= $this->Html->link(
        'Ajouter un membre',
        ['action' => 'add'],
        ['class' => 'btn btn-primary my-4']
        )
    ?>
    
    <table cellspacing=0 class="table table-bordered table-hover table-inverse table-striped" id='datatable' width=100%>
        <thead>
            <tr>
                <th>Nom
                <th>Prenom
                <th>Description
                <th>Actions
            </tr>
            <tfoot>
                <tr>
                    <!-- <th>Nom
                    <th>Prenom
                    <th>Description -->
                    <tbody>
                        <?php foreach($teams as $team) : ?>
                        <tr>
                            <td><?= $team->last_name ?></td>
                            <td><?= $team->first_name ?></td>
                            <td><?= $team->description ?></td>
                            <td class="d-flex px-2">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning mx-1" data-bs-toggle="modal" data-bs-target="#edit<?=$team->id?>">
                                Modifier
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="edit<?=$team->id?>" tabindex="-1" aria-labelledby="edit<?=$team->id?>Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="edit<?=$team->id?>Label">Modifier l'utilisateur suivant?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= $this->Form->create(null, [
                                                        'url' => [
                                                            'controller' => 'Teams',
                                                            'action' => 'edit',
                                                            $team->id
                                                            ]]) ?>

                                                <fieldset>
                                                    <div class="d-flex justify-content-center row">
                                                        <div class="align-items-center col-12 d-flex flex-column">
                                                            <div class="container-fluid">
                                                                <label class="m-0 pt-3" for="prenom">Prenom</label><input value="<?= $team->first_name ?>" type="text" name="first_name" class="form-control" id="prenom">
                                                                <label class="m-0 pt-3" for="nom">Nom</label><input value="<?= $team->last_name ?>" type="text" name="last_name" class="form-control" id="nom">
                                                                <label class="m-0 pt-3" for="description">Description</label><input value="<?= $team->description ?>" type="description" name="description" class="form-control" id="description">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                <button id="editBtn<?=$team->id?>" type="submit" class="btn btn-warning" data-bs-dismiss="modal">Modifier</button>
                                                <?= $this->Form->end() ?>
                                                
                                                <!-- <?= $this->Form->postLink(
                                                'Modifier',
                                                ['action' => 'edit', $team->id],
                                                ['class' => 'btn btn-warning']
                                                )
                                                ?> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#delete<?=$team->id?>">
                                Supprimer
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete<?=$team->id?>" tabindex="-1" aria-labelledby="delete<?=$team->id?>Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="delete<?=$team->id?>Label">Voulez vous vraiment supprimer ce membre?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <?= $team->first_name." " ?><?= $team->last_name ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                <?= $this->Form->postLink(
                                                'Supprimer',
                                                ['action' => 'delete', $team->id],
                                                ['class' => 'btn btn-danger']
                                                )
                                                ?>
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



<script>

$( "#target" ).click(function() {
  alert( "Handler for .click() called." );
});

$.ajax({
    method: "POST",
    url: '',
    data: { first_name: first_name, last_name: last_name, description: description },
    success: function(response){
        console.log(response);
    },
    error: function(xhr, status, error){
        console.error(xhr);
    }
});

</script>