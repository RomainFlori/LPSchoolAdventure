<div class="container">
    <h3 class="text-center py-2">Liste des utilisateurs</h3>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Superadmin</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <th scope="row"><?=$user->id?></th>
                <td><?php if($user->superadmin):
                    echo "Oui";
                    else:
                    echo "Non";
                    endif;
                ?></td>
                <td><?= $user->first_name ?></td>
                <td><?= $user->last_name ?></td>
                <td><?= $user->email ?></td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$user->id?>">
                    Supprimer
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="id<?=$user->id?>" tabindex="-1" aria-labelledby="id<?=$user->id?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="id<?=$user->id?>Label">Voulez vous vraiment supprimer cet utilisateur?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <?= $user->first_name." " ?><?= $user->last_name ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <?= $this->Form->postLink(
                            'Supprimer',
                            ['action' => 'delete', $user->id],
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
    </table>
</div>

