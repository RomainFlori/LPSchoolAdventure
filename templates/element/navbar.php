<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<nav class="navbar-expand-lg px-5 py-1 container-fluid navbarcss">

    <div class=" d-lg-flex d-none ">
        <div class="row w-100">
            <div class="col-2 d-flex justify-content-end align-items-center">
                <a class="d-flex justify-content-center navbar-brand" href="/"><img class="img-fluid w-50" src="/webroot/img/logo.png"></a>
                <!-- <a class="navbar-brand font-weight-bold" href="/"><b>SchoolAventure</b></a> -->
            </div>
    
            <div class="col-7 d-flex">
                <div class="px-3 d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item  mx-2  align-items-center d-flex active">
                            <?= $this->Html->link(__('Accueil'), ['controller' => 'Pages', 'action' => 'index'], array('class' => "")) ?>
                        </li>
                        <li class="nav-item  mx-2 align-items-center d-flex">
                            <?= $this->Html->link(__('Notre équipe'), ['controller' => 'Pages', 'action' => 'team'], array('class' => "")) ?>
                        </li>
                        <li class="nav-item mx-2 align-items-center d-flex">
                            <?= $this->Html->link(__('FAQ'), ['controller' => 'Pages', 'action' => 'faq'], array('class' => "")) ?>
                        </li>
                        <li class="nav-item mx-2 align-items-center d-flex">
                            <!-- <a class="" href="#">Nos prix</a> -->
                            <?= $this->Html->link(__('Timeline'), ['controller' => 'Pages', 'action' => 'timeline'], array('class' => "")) ?>

                        </li>
                        <li class="nav-item mx- align-items-center d-flex">
                            <?= $this->Html->link(__('Contactez nous'), ['controller' => 'Pages', 'action' => 'contact'], array('class' => "")) ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-around align-items-center">
                <a class="seConnecterBtn">Se connecter</a>
                <a class="btn inscriptionBtn">S'inscrire</a>
            </div>
    
        </div>

    </div>

    <div class="row w-100 d-flex d-lg-none">
        
        <div class="col-12">
            <input type="checkbox" id="active">
            <label for="active" class="align-items-center d-flex justify-content-center menu-btn"><i class="fas fa-bars"></i></label>
            <div class="wrapper container-fluid">
                <ul class="navbar-nav w-100">
                    <li class="align-items-center d-flex justify-content-center nav-item">
                        <a class="seConnecterBtn">Se connecter</a>
                        <a class="btn inscriptionBtn">S'inscrire</a>
                    </li>
                    <li class="nav-item align-items-center active">
                        <?= $this->Html->link(__('Accueil'), ['controller' => 'Pages', 'action' => 'index'], array('class' => "")) ?>
                    </li>
                    <li class="nav-item align-items-center">
                        <?= $this->Html->link(__('Notre équipe'), ['controller' => 'Pages', 'action' => 'team'], array('class' => "")) ?>
                    </li>
                    <li class="nav-item align-items-center">
                        <?= $this->Html->link(__('FAQ'), ['controller' => 'Pages', 'action' => 'faq'], array('class' => "")) ?>
                    </li>
                    <li class="nav-item align-items-center">
                        <?= $this->Html->link(__('Timeline'), ['controller' => 'Pages', 'action' => 'timeline'], array('class' => "")) ?>

                    </li>
                    <li class="nav-item mx- align-items-center">
                        <?= $this->Html->link(__('Contactez nous'), ['controller' => 'Pages', 'action' => 'contact'], array('class' => "")) ?>
                    </li>
                </ul>
            </div>
        </div>


    </div>


</nav>
<div class="margin_navbar"></div>