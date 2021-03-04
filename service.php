<?php
    include_once 'config/init.php';

    if (!isset($_SESSION['idSoiree'])) {
        redirect('soirees.php', "Une erreur est survenue", 'error');
    }

    $soiree = new Soiree;
    $cocktails = new Cocktail;
    $alcools = new Alcool;
    $diluants = new Diluant;

    // Template
    $template = new Template('templates/service.php');

    $template->title = "Service";
    $template->cocktails = $soiree->getCocktails($_SESSION['idSoiree']);
    $template->alcools = $soiree->getAlcools($_SESSION['idSoiree']);
    $template->diluants = $soiree->getDiluants($_SESSION['idSoiree']);

    // display the template
    echo $template;
?>