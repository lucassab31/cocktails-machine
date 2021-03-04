<?php
    include_once 'config/init.php';

    if (isset($_SESSION['idSoiree'])) {
        redirect('soiree.php?id=' . $_SESSION['idSoiree'], "Vous avez déjà selectionné une soirée", 'error');
    }

    $soiree = new Soiree;

    // Template
    $template = new Template('templates/soirees.php');

    $template->title = "Choix de la soirée";
    $template->soirees = $soiree->getAll();

    // display the template
    echo $template;
?>