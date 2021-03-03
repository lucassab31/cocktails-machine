<?php include 'inc/header.php'; ?>
<section id="soirees">
    <div class="section-title">
        <h1><?= $title ?></h1>
    </div>
    <a href="createSoiree.php" class="soiree first">
        <p>Ajouter une soirée</p>
        <i class="fas fa-plus-circle"></i>
    </a>
    <?php
        foreach($soirees as $soiree) {
            ?>
            <a href="soiree.php?id=<?= $soiree->idSoiree ?>" class="soiree">
                <p><?= $soiree->dateSoiree ?></p>
                <p><?= $soiree->lieu ?></p>
                <p><?= $soiree->nbPersonnes ?> personnes</p>
                <i class="fas fa-arrow-circle-right"></i>
            </a>
            <?php
        }
    ?>
</section>
<?php include 'inc/footer.php'; ?>