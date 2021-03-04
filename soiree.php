<?php
    include_once 'config/init.php';

    $_SESSION['idSoiree'] = $_GET['id'];

    $alcools = new Alcool;
    $diluants = new Diluant;

    // Template
    $template = new Template('templates/soirees-attribution.php');

    $template->title = "Choix des bouteilles";
    $template->alcools = $alcools->getAll();
    $template->diluants = $diluants->getAll();

    // display the template
    echo $template;
?>