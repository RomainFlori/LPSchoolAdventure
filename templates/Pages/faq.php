<?= $this->element('header'); ?>
<?= $this->element('navbar'); ?>


<body>
    <div class="container pt-5 px-5 mb-4 text-center">
        <p1 class="fs-1"><b>FAQ</b></p1>
        <p>Les questions les plus fréquentes</p>
    </div>


    <!-- FAQ -->
    <main class="container flex-column w-75 mt-5">
        <?php foreach($faqTable as $faq): ?>
        <details class="myaccordion mt-3">
            <summary><?php echo $faq->question; ?></summary>
            <div class="faq__content">
                <p class="bg-white m-0 p-3"><?php echo $faq->text; ?></p>
            </div>
        </details>
        <?php endforeach; ?>
   </main>


    <?= $this->element('footer'); ?>
</body>

