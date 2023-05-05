<?= $this->element('header'); ?>
<?= $this->element('navbar'); ?>

<body>
    <div class="container mt-5 px-5 mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4 h1VeryBig text-center"><b>Contactez-nous</b></h1>
            </div>
        </div>
    </div>
    
    <div class="container mb-5">
        <div class="row flex-row-reverse d-flex">
           <div class="col-4 d-lg-flex d-none flex-column justify-content-center align-items-start">
              <p>
                 <i class="fas fa-map-marker-alt"></i> Adresse <br />
                 <span> Lorem, ipsum dolor
                 New York, USA
                 </span>
              </p>
              <p>
                 <i class="fas fa-phone-alt"></i> Téléphone <br />
                 <span>0787878787</span>
              </p>
              <p>
                 <i class=" far fa-envelope"></i> Email <br />
                 <span><?= $Email ?></span>
              </p>
           </div>

           <div class="col-lg-8 col-12 d-flex flex-column justify-content-center align-items-center">
           <?= $this->Form->create(null, ['type' => 'post',
                    'url' => ['controller' => 'Email', 'action' => 'email'], 'class' => 'w-75']); ?>
              <div class="w-100">
                 <p class="m-0 mt-3">Nom *</p>
                 <input class="form-control" name="name" id="txt_name" type="text" Required="required">
                 <p class="m-0 mt-3">Email *</p>
                 <input class="form-control" name="email"  id="txt_email" type="text" Required="required">
                 <p class="m-0 mt-3">Téléphone *</p>
                 <input class="form-control" name="phone" id="txt_phone" type="text" Required="required">
                 <p class="m-0 mt-3">Sujet *</p>
                 <input class="form-control" name="subject"  id="txt_subject" type="text" Required="required">
                 <p class="m-0 mt-3">Message *</p>
                 <textarea class="form-control" name="message" id="txt_message" rows="4" cols="20" Required="required" ></textarea>
            </div>
            <input class="mt-3 btn inscriptionBtn" type="submit" id="" value="Envoyer">
           </div>
           <?= $this->Form->end(); ?>

        </div>
     </div>
        
</body>

<?= $this->element('footer'); ?>