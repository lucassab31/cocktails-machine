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
        <a <?= ($_GET['subpage'] == "alcools") ? 'class="active"' : "" ?> href="?id=<?= $_SESSION['idSoiree'] ?>&subpage=alcools">Alcools</a>
        <a <?= ($_GET['subpage'] == "diluants") ? 'class="active"' : "" ?> href="?id=<?= $_SESSION['idSoiree'] ?>&subpage=diluants">Dilluants</a>
    </div>
    <div class="choix">
        <?php
            if ($_GET['subpage'] == "alcools") {
                $alcoolsUseds = array();
                foreach ($alcoolsUsed as $alcoolUsed) {
                    $alcoolsUseds[] = $alcoolUsed->idAlcool;
                }
                foreach ($alcools as $alcool) {
                    $used = in_array($alcool->idAlcool, $alcoolsUseds);
                    ?>
                    <a <?= !$used ? 'href="alcool.php?&id='.$alcool->idAlcool .'"' : "" ?> class="item">
                        <div class="item-header">
                            <h3><?= $alcool->nom ?></h3>
                        </div>
                        <div class="item-content">
                            <div class="item-icon">
                                <i class="fas fa-wine-bottle"></i>
                            </div>
                            <div class="item-add <?= !$used ? "add" : "used" ?>">
                                <?php
                                    if ($used) {
                                        ?>
                                        <i class="fas fa-check"></i>
                                        <?php
                                    } else {
                                        ?>
                                        <i class="fas fa-plus"></i>
                                        <?php
                                    }
                                ?>
                            </div>
                        
                        </div>
                    </a>
                    <?php
                }
            } else {
                $diluantsUseds = array();
                foreach ($diluantsUsed as $diluantUsed) {
                    $diluantsUseds[] = $diluantUsed->idDiluant;
                }
                foreach ($diluants as $diluant) {
                    $used = in_array($diluant->idDiluant, $diluantsUseds);
                    ?>
                    <a <?= !$used ? 'href="diluant.php?&id='.$diluant->idDiluant .'"' : "" ?> class="item">
                        <div class="item-header">
                            <h3><?= $diluant->nom ?></h3>
                        </div>
                        <div class="item-content">
                            <div class="item-icon">
                                <i class="fas fa-wine-bottle"></i>
                            </div>
                            <div class="item-add <?= !$used ? "add" : "used" ?>">
                                <?php
                                    if ($used) {
                                        ?>
                                        <i class="fas fa-check"></i>
                                        <?php
                                    } else {
                                        ?>
                                        <i class="fas fa-plus"></i>
                                        <?php
                                    }
                                ?>
                            </div>
                        
                        </div>
                    </a>
                    <?php
                }
            }
        ?>
    </div>
    <a href="service.php" class="launch">
        <i class="fas fa-rocket"></i>
    </a>
</section>
<?php include 'inc/footer.php'; ?>