<!DOCTYPE html>
<html class="h-100">
  <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>BackOffice</title>
        
        <?= $this->element('header'); ?>
        <?= $this->Html->css('animate') ?>
        <?= $this->Html->css('admin/style') ?>
        <?= $this->Html->css('admin/admincss') ?>

        <!-- Data Tables -->
        <link href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css rel=stylesheet>
        <?= $this->Html->css('admin/datatables') ?>
        <?= $this->Html->script('admin/datatables.min.js') ?>
        <?= $this->Html->script('jQuery-3.6.0/jquery-3.6.0.js') ?>
        <link rel="stylesheet" href="/dist/DataTables/css/dataTables.bootstrap4.min.css">
        <script src="/dist/DataTables/js/jquery.dataTables.min.js"></script>
        <script src="/dist/DataTables/js/dataTables.bootstrap4.min.js"></script>
        <!-- Old cdns -->
          <!-- <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js></script> -->
          <!-- <link href=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/dataTables.bootstrap4.min.css rel=stylesheet> -->
          <!-- <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js></script> -->
          <!-- <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap4.min.js></script> -->
        <!-- End Data Tables -->

  </head>

  <body class="h-100">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="">
          <span class="d-none d-lg-block"><?= $Settings['project_name'] ?></span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->


      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <!-- Profile -->
          <li class="nav-item dropdown d-flex">

            <!-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">K. LAYOUT</span>
            </a> -->

            <div class="dropdown">
              <i class="fa-regular fa-user userDropDown"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="<?= \Cake\Routing\Router::url(['controller' => 'Admin', 'action' => 'logout']); ?>">Se déconnecter</a></li>
              </ul>
            </div>


            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link " href="<?= \Cake\Routing\Router::url(['controller' => 'Admin', 'action' => 'index']); ?>">
            <i class="bi bi-grid"></i>
            <span>Backoffice</span>
          </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= \Cake\Routing\Router::url(['controller' => '', 'action' => '']); ?>">
            <i class="bi bi-person"></i>
            <span>Acceuil</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= \Cake\Routing\Router::url(['controller' => 'Teams', 'action' => 'index']); ?>">
              <i class="bi bi-circle"></i><span>Notre Equipe</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="<?= \Cake\Routing\Router::url(['controller' => 'Faqs', 'action' => 'index']); ?>">
              <i class="bi bi-circle"></i><span>FAQ</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="<?= \Cake\Routing\Router::url(['controller' => '', 'action' => 'index']); ?>">
              <i class="bi bi-circle"></i><span>Nos prix</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="<?= \Cake\Routing\Router::url(['controller' => '', 'action' => 'index']); ?>">
              <i class="bi bi-circle"></i><span>Contactez nous</span>
            </a>
          </li> -->
      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main h-100 bg-secondary-light">
      <section class="section dashboard h-100">
        <?= $this->Flash->render() ?>
        <div class="row h-100">
          <?= $this->fetch('content') ?>
        </div>
      </section>
      <footer>
        
      </footer>
    </main><!-- End #main -->

    <!-- Template Main JS File -->
    <?= $this->Html->script('admin/main') ?>
    <?= $this->Html->script('admin/admin') ?>

  </body>
</html>