<?php
    include_once 'config/init.php';

    if (isset($_GET['id']))
        $_SESSION['idSoiree'] = $_GET['id'];

    if (!isset($_SESSION['idSoiree'])) {
        redirect('soirees.php', "Une erreur est survenue", 'error');
    }

    $soiree = new Soiree;
    $alcools = new Alcool;
    $diluants = new Diluant;

    // Template
    $template = new Template('templates/soirees-attribution.php');

    $template->title = "Choix des bouteilles";
    $template->alcools = $alcools->getAll();
    $template->alcoolsUsed = $soiree->getAlcools($_SESSION['idSoiree']);
    $template->diluantsUsed = $soiree->getDiluants($_SESSION['idSoiree']);
    $template->diluants = $diluants->getAll();

    // display the template
    echo $template;
?>