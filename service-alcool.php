<?php
    include_once 'config/init.php';

    $alcools = new Alcool;
    $soiree = new Soiree;

    if (isset($_POST['sub'])) {
        if (!empty($_GET['id']) && !empty($_POST['volume'])) {
            $data = array();
            $data['idA'] = $_GET['id'];
            $data['idS'] = $_SESSION['idSoiree'];
            $data['volume'] = (($_POST['volume']*VOL_VERRE)/100);
            $data['idU'] = (isset($_POST['utilisateur']) ? $_POST['utilisateur'] : 1);
            if($soiree->boireA($data)) {
                redirect('service.php?subpage=alcools' , "Verre en cours de service", 'success');
            } else {
                redirect('service.php?subpage=alcools', "Une erreur est survenue", 'error');
            }
        } else {
            redirect('service.php?subpage=alcools', "Vous devez sélectionner un volume ou un shooter", 'error');
        }
    }

    // Template
    $template = new Template('templates/service-alcool.php');

    $template->alcool = $alcools->get($_GET['id']);
    $template->volAlcool = $soiree->getVolumeA($_GET['id'], $_SESSION['idSoiree']);

    // display the template
    echo $template;
?>