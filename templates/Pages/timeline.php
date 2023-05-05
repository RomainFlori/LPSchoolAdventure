<?= $this->element('header'); ?>
<?= $this->element('navbar'); ?>

<body>
    <div class="container mt-5 px-5 mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4 h1VeryBig text-center"><b>Notre timeline</b></h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 px-5 mb-5">
        
        <div class="timeline">
            <ul>
            <li>
                <span>Septembre 2021</span>
                <div class="">
                    <h3>Premières idées</h3>
                    <p class="text-dark">
                        Début de la réflexion sur le projet SchoolAdventure et ses fonctionnalités
                    </p>
                </div>
            </li>
            <li>
                <span>November 2021</span>
                <div class="">
                    <h3>Validation sujet</h3>
                    <p class="text-dark">
                    Validation de votre sujet par votre équipe pédagogique régionale
                    </p>
                </div>
            </li>
            <li>
                <span>Janvier 2022</span>
                <div class="">
                    <h3>Validation projet</h3>
                    <p class="text-dark">
                    Transformation du sujet en projet
                    </p>
                </div>
            </li>
            <li>
                <span>Février 2022 - Janvier 2023</span>
                <div class="">
                    <h3>Début du developpement du projet SchoolAdventure</h3>
                    <p class="text-dark">
                    Developpement du Dashboard et de son design pour les parents. Developpement des premières versions des jeux vidéos éducatifs et du dashboard.
                    </p>
                </div>
            </li>
            <li>
                <span>Février 2023 - Mai 2023</span>
                <div class="">
                    <h3>BETA du projet</h3>
                    <p class="text-dark">
                    Début de la phase de test du projet SchoolAdventure.
                    </p>
                </div>
            </li>
            <li>
                <span>Janvier 2024</span>
                <div class="">
                    <h3>Epitech Expérience (rendu final)</h3>
                    <p class="text-dark">
                    Présentation du projet achevé durant l’Epitech Expérience.
                    </p>
                </div>
            </li>
            </ul>
        </div>
    
    </div>


</body>

<?= $this->element('footer'); ?>