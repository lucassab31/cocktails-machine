<?php
    include_once 'config/init.php';

    $alcools = new Alcool;

    if (isset($_POST['sub'])) {
        
    }

    // Template
    $template = new Template('templates/attribution-alcool.php');

    $template->alcool = $alcools->get($_GET['id']);

    // display the template
    echo $template;
?>