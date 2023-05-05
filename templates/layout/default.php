<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        SchoolAdventure
    </title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    
    <?= $this->element('header') ?>

</head>
<body>
    <main class="">
        <div class="">
            <?= $this->element('navbar'); ?>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
</body>
</html>
