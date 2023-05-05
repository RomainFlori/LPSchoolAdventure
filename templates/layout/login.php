<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Connection</title>
        <?= $this->element('header'); ?>
    </head>

    <body class="container pt-5">
        <?= $this->Flash->render() ?>
        <main id="" class="container">

        <?= $this->fetch('content') ?>
        </main>

    <!-- Template Main JS File -->
    <?= $this->Html->script('admin/main') ?>
    <?= $this->Html->script('admin/admin') ?>
    </body>
</html>