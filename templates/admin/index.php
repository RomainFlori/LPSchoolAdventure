<?php
// debug($currentUser);
?>

<div class="container">
    <div>
        <h1 class="">Bienvenue</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 p-3  animate__animated animate__backInDown">
                <div class="d-flex justify-content-center align-items-center designBox first-color flex-column">
                    <div class="d-flex flex-column">
                        <h3 class="text-center text-white"><b><?= ($currentUser['first_name']) ?></b></h3>
                        <p class="text-center p-0 m-0"><?= ($currentUser['last_name']) ?></p>
                        <small class="text-center"><?= ($currentUser['email']) ?></small>

                    </div>

                    <div class="d-flex mt-2">
                        <a href="<?= \Cake\Routing\Router::url(['controller' => 'Admin', 'action' => 'logout']); ?>"><btn class="btn btn-danger mx-1">Se deconnecter</btn></a>
                    </div>

                </div>
            </div>
            <div class="col-6 p-3  animate__animated animate__backInRight">
                <div class="d-flex designBox second-color  text-center justify-content-center align-items-center flex-column">
                    <div class="d-flex flex-column">

                      <h3 class="text-center text-white">Gestion d'utilisateur</h3>
                      <a href="<?= \Cake\Routing\Router::url(['controller' => 'Users', 'action' => 'add']); ?>"><btn class="btn btn-light mx-1">Ajouter un utilisateur</btn></a>
                      <a href="<?= \Cake\Routing\Router::url(['controller' => 'Users', 'action' => 'index']); ?>"><btn class="btn btn-danger mx-1">Supprimer un utilisateur</btn></a>

                    </div>


                </div>
            </div>
            <div class="col-6 p-3  animate__animated animate__backInLeft">
                <div class="d-flex designBox third-color text-center justify-content-center align-items-center flex-column">
                    <div class="d-flex flex-column">
                        <h3 class="text-center text-white">Options rapides</h3>

                        <a href="<?= \Cake\Routing\Router::url(['controller' => 'Admin', 'action' => 'resetPassword']); ?>"><btn class="btn btn-light mx-1">Reinitialiser le mot de passe</btn></a>
                        <a href="<?= \Cake\Routing\Router::url(['controller' => 'Admin', 'action' => 'changeEmail']); ?>"><btn class="btn btn-light mx-1">Modifier votre email</btn></a>

                    </div>


                </div>
            </div>
            <div class="col-6  p-3  animate__animated animate__backInUp">
                <div class="d-flex designBox fourth-color container text-center justify-content-center align-items-center flex-column">

                  <div class="align-items-center clock justify-content-center">
                      <div id = "clock" onload="currentTime()" style="font-size: 5vw;" class="text-white m-0 p-0"></div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
  function currentTime() {
    let options = {
        timeZone: 'Europe/Paris',
        hour: 'numeric',
        minute: 'numeric',
      },
      formatter = new Intl.DateTimeFormat([], options);
      // console.log(formatter.format(new Date()));
    
    let date = formatter.format(new Date());
    document.getElementById("clock").innerText = date; 
    let t = setTimeout(function(){ currentTime() }, 1000);
  }
  currentTime();
</script>