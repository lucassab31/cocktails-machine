<?php
    include_once 'config/init.php';

    $cocktail = new Cocktail;
    $diluant = new Diluant;
    $soiree = new Soiree;

    if (isset($_POST['sub'])) {
        if (!empty($_GET['id']) && !empty($_POST['volume'])) {
            $data = array();
            $data['idD'] = $_GET['id'];
            $data['idS'] = $_SESSION['idSoiree'];
            $data['volume'] = (($_POST['volume']*VOL_VERRE)/100);
            $data['idU'] = (isset($_POST['utilisateur']) ? $_POST['utilisateur'] : 1);
            if($soiree->boireD($data)) {
                redirect('service.php?subpage=diluants' , "Verre en cours de service", 'success');
            } else {
                redirect('service.php?subpage=diluants', "Une erreur est survenue", 'error');
            }
        } else {
            redirect('service.php?subpage=diluants', "Vous devez sélectionner un volume ou un shooter", 'error');
        }
    }

    // Template
    $template = new Template('templates/service-cocktail.php');

    $template->cocktail = $cocktail->get($_GET['id']);
    $template->vols = $soiree->getVolumeC($_GET['id'], $_SESSION['idSoiree']);

    // display the template
    echo $template;
?>