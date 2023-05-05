
<body>
    <div class="container mt-5 px-5 mb-4">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1 class="mb-4 h1VeryBig"><b>Apprenez en jouant avec SchoolAventure</b></h1>
                <p class="greyText">SchoolAdventure est une plateforme d’apprentissage ludique pour enfant. Vous pouvez apprendre gràce à des jeux éducatifs du CP au CM1 tout en vous amusant. En effet, notre solution permet de remplacer les cahiers de vacances via nos jeux éducatifs. Nous proposons plusieurs matières, allant des mathématiques à l'anglais ou encore l'histoire géographie.</p>
                <btn class="btn downloadBtn mt-5 mb-4">Télécharger</btn>
            </div>
            <div class="col-lg-6 col-12 d-lg-flex d-none">
                <img class="img-fluid" src="\webroot\img\working.png">
            </div>
        </div>
    </div>

    <div class="container mt-5 px-5">
        <div class="row">
            <div class="col-12">
                <div class="divShadowRounded row justify-content-center align-items-center">
                    <div class="col-3 text-center">
                        <p class="m-0 textdivShadowRounded">De CP à CM1</p>
                    </div>
                    <div class="col-1 text-center"><vl class="ligneHorizontal"></div>

                    <div class="col-4 text-center">
                        <p class="m-0 textdivShadowRounded">X niveaux gratuit à vie</p>
                    </div>
                    <div class="col-1 text-center"><vl class="ligneHorizontal"></vl></div>

                    <div class="col-3 text-center">
                        <p class="m-0 textdivShadowRounded">Des nouveaux jeux tous les mois</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 px-5 mb-4 d-lg-flex d-none">
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="\webroot\img\working2.png">
            </div>
            <div class="col-6">
                <h2 class="mb-4">Tout pour apprendre et progresser</h1>
                <p class="greyText">Avec notre méthode de fonctionnement, vous pouvez apprendre et jouer à plein de mini jeux éducatifs</p>
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center my-2">
                        <i class="fa-solid fa-check"></i>
                        <p class="m-0 mx-1">Rapide et ludique</p>
                    </div>
                    <div class="d-flex align-items-center my-2">
                        <i class="fa-solid fa-check"></i>
                        <p class="m-0 mx-1">Toutes les matières premières disponibles</p>
                    </div>
                    <div class="d-flex align-items-center my-2">
                        <i class="fa-solid fa-check"></i>
                        <p class="m-0 mx-1">Suivi via dashboard pour les parents</p>
                    </div>
                    <div class="d-flex align-items-center my-2">
                        <i class="fa-solid fa-check"></i>
                        <p class="m-0 mx-1">Solution gratuite ou payante</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 px-lg-5 mb-4 px-0">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4">Choisisez votre plan</h2>
                <p class="greyText">Choissisez le plan qui vous correspond le mieux.</p>
            </div>
            <div class="align-content-center flex-column flex-lg-row justify-content-center mb-5 row">
                <?php foreach($subTable as $sub): ?>
                <div class="col-md-6 col-12 justify-content-center d-flex pt-5">
                    <div class="bordedDivGrayPrice d-flex flex-column justify-content-between py-5 w-75">
                        <div class="d-flex flex-column align-items-center mb-5">
                            <p class="h4"><b><?= $sub->subscriptions_type->type ?></b></p>
                            <?php if(!empty($sub->description)): ?>
                            <div class="d-flex align-items-center my-2">
                                <i class="fa-solid fa-check"></i>
                                <p class="m-0 mx-1"><?= $sub->description ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty($sub->description2)): ?>

                            <div class="d-flex align-items-center my-2">
                                <i class="fa-solid fa-check"></i>
                                <p class="m-0 mx-1"><?= $sub->description2 ?></p>
                            </div> 
                            <?php endif; ?>

                        </div>
                        <div class="align-items-center d-flex flex-column justify-content-center pt-5 text-center">
                            <p class="h3"><b><?= $sub->price ?></b></p>
                            <btn class="btn downloadBtn mt-4">Choisir</btn>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="container mt-5 px-5 mb-4">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4">Nos jeux éducatifs</h2>
                <p class="greyText">Voici quelques exemples de jeux éducatifs jouable gratuitement sur notre platform.</p>
            </div>
            <div class="col-12 mb-5 d-flex justify-content-center" style="z-index: -1">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner divCarouselGames">
                        <div class="carousel-item active text-center">
                            <p class=""><b>Point & Click</b></p>
                            <p class="greyText">Un Point & Click est un type de jeu à part. Des jeux d'aventure et de réflexion qui se jouent avec la souris.</p>
                            <div class="d-flex justify-content-center">
                                <img src="\webroot\img\clickcollect.png" class="d-block" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item text-center">
                            <p><b>Pirun</b></p>
                            <p class="greyText">Pirun est un jeu où l’on apprend les mathématiques et plus précisément le calcul mental. Dans ce jeu, votre personnage cours vers des coffres. Il faut alors trouver le bon résultat affiché. En cas d’échec, on perd une vie.</p>
                            <div class="d-flex justify-content-center">
                                <img src="\webroot\img\pirun.png" class="d-block" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item text-center">
                            <p class=""><b>Coin collect</b></p>
                            <p class="greyText">Coin collect est un jeu ou l’on doit récuperer des pièces de façon réfléchie.</p>
                            <div class="d-flex justify-content-center">
                                <img src="\webroot\img\coincollect.png" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container mt-5 px-5 mb-5">
        <div class="row">
            <div class="col-12">
                <div class="divShadowRounded d-flex flex-row justify-content-around align-items-center p-5">
                    <div class="d-flex flex-column pl-3">
                        <h3 class=""><b>Ne ratez rien de SchoolAdventure</b></h1>
                        <p class="greyText">Abonnez-vous et restez à jour de nos nouveautées.</p>
                    </div>
                    <btn class="btn downloadBtn">Abonnez vous maintenant</btn>
                </div>
            </div>
        </div>
    </div>

    
</body>

<?= $this->element('footer'); ?>
