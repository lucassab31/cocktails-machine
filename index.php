<?php
    include_once 'config/init.php';

    if (isset($_SESSION['idSoiree'])) {
        redirect('soiree.php', "Vous avez déjà lancé une soirée", 'error');
    }

    if (isset($_POST['submitP'])) {
        if ($_POST['pin2'] == PIN) {
            redirect('soirees.php', "Authentification validée", 'success');
        }
    }

    // Template
    $template = new Template('templates/login.php');


    // display the template
    echo $template;
?>