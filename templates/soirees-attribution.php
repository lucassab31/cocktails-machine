<?php include 'inc/header.php'; ?>
<section id="attribution">
    <div class="section-title">
        <h1><?= $title ?></h1>
    </div>
    <div class="page-selector">
        <?php
            if (!isset($_GET['subpage']))
                $_GET['subpage'] = "alcools";
        ?>
        <a <?= ($_GET['subpage'] == "alcools") ? 'class="active"' : "" ?> href="?id=<?= $_GET['id'] ?>&subpage=alcools">Alcools</a>
        <a <?= ($_GET['subpage'] == "diluants") ? 'class="active"' : "" ?> href="?id=<?= $_GET['id'] ?>&subpage=diluants">Dilluants</a>
    </div>
    <div class="choix">
        <?php
            if ($_GET['subpage'] == "alcools") {
                foreach ($alcools as $alcool) {
                    ?>
                    <a href="alcool.php?&id=<?= $alcool->idAlcool ?>" class="item">
                        <div class="item-header">
                            <h3><?= $alcool->nom ?></h3>
                        </div>
                        <div class="item-content">
                            <div class="item-icon">
                                <i class="fas fa-wine-bottle"></i>
                            </div>
                            <div class="item-add">
                                <i class="fas fa-plus"></i>
                            </div>
                        
                        </div>
                    </a>
                    <?php
                }
            } else {
                foreach ($diluants as $diluant) {
                    ?>
                    <a href="diluant.php?&id=<?= $diluant->idDiluant ?>" class="item">
                        <div class="item-header">
                            <h3><?= $alcool->nom ?></h3>
                        </div>
                        <div class="item-content">
                            <div class="item-icon">
                                <i class="fas fa-wine-bottle"></i>
                            </div>
                            <div class="item-add">
                                <i class="fas fa-plus"></i>
                            </div>
                        
                        </div>
                    </a>
                    <?php
                }
            }
        ?>
    </div>
</section>
<?php include 'inc/footer.php'; ?>