<?php
    include_once 'config/init.php';

    $soiree = new Soiree;

    // Template
    $template = new Template('templates/soirees-create.php');

    $template->title = "Création d'une soirée";

    // display the template
    echo $template;
?>