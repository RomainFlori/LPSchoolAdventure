<?= $this->element('header'); ?>
<?= $this->element('navbar'); ?>

<body>
    <div class="container mt-5 px-5 mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4 h1VeryBig text-center"><b>Notre equipe</b></h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 px-5 mb-5">
        <div class="row pb-5 flex-lg-row flex-column align-content-center justify-content-center">
            <?php foreach($teamsTable as $team): ?>
            <div class="col-lg-4 col-6 mt-4">
                <div class="divShadowRounded profileDiv d-flex flex-column justify-content-around align-items-center p-5 h-100">
                    <h4 class="text-center"><b><?= $team->first_name . " " ?><?= $team->last_name ?></b></h4>
                    <p class="text-center"><?= $team->description ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>

<?= $this->element('footer'); ?>