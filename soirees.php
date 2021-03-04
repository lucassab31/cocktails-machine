<?php
    include_once 'config/init.php';

    $soiree = new Soiree;

    // Template
    $template = new Template('templates/soirees.php');

    $template->title = "Choix de la soirée";
    $template->soirees = $soiree->getAll();

    // display the template
    echo $template;
?>