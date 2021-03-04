<?php include 'inc/header.php'; ?>
<section id="attribution">
    <div class="section-title">
        <h1><?= $title ?></h1>
    </div>
    <div class="page-selector">
        <?php
            if (!isset($_GET['subpage']))
                $_GET['subpage'] = "cocktails";
            ?>
        <a <?= ($_GET['subpage'] == "cocktails") ? 'class="active"' : "" ?> href="?subpage=cocktails">Cocktails</a>
        <a <?= ($_GET['subpage'] == "alcools") ? 'class="active"' : "" ?> href="?subpage=alcools">Alcools</a>
        <a <?= ($_GET['subpage'] == "diluants") ? 'class="active"' : "" ?> href="?subpage=diluants">Dilluants</a>
    </div>
    <div class="choix">
        <?php
            if ($_GET['subpage'] == "cocktails") {
                foreach ($cocktails as $cocktail) {
                    ?>
                    <a href="service-cocktail.php?&id=<?= $cocktail->idCocktail ?>" class="item">
                        <div class="item-header">
                            <h3><?= $cocktail->nom ?></h3>
                        </div>
                        <div class="item-content">
                            <div class="item-icon">
                                <i class="fas fa-wine-bottle"></i>
                            </div>
                            <div class="item-add">
                                <i class="fas fa-tint"></i>
                            </div>
                        
                        </div>
                    </a>
                    <?php
                }
            } else if ($_GET['subpage'] == "alcools") {
                foreach ($alcools as $alcool) {
                    ?>
                    <a href="service-alcool.php?&id=<?= $alcool->idAlcool ?>" class="item">
                        <div class="item-header">
                            <h3><?= $alcool->nom ?></h3>
                        </div>
                        <div class="item-content">
                            <div class="item-icon">
                                <i class="fas fa-wine-bottle"></i>
                            </div>
                            <div class="item-add">
                                <i class="fas fa-tint"></i>
                            </div>
                        
                        </div>
                    </a>
                    <?php
                }
            } else {
                foreach ($diluants as $diluant) {
                    ?>
                    <a href="service-diluant.php?&id=<?= $diluant->idDiluant ?>" class="item">
                        <div class="item-header">
                            <h3><?= $diluant->nom ?></h3>
                        </div>
                        <div class="item-content">
                            <div class="item-icon">
                                <i class="fas fa-wine-bottle"></i>
                            </div>
                            <div class="item-add">
                                <i class="fas fa-tint"></i>
                            </div>
                        
                        </div>
                    </a>
                    <?php
                }
            }
        ?>
    </div>
    <!-- <a href="#" class="launch">
        <i class="fas fa-rocket"></i>
    </a> -->
</section>
<?php include 'inc/footer.php'; ?>