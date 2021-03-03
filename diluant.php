<?php
    include_once 'config/init.php';

    $diluants = new Diluant;
    $soiree = new Soiree;

    if (isset($_POST['sub'])) {
        if (!empty($_GET['id']) && !empty($_POST['tuyaux']) && !empty($_POST['volume'])) {
            $data = array();
            $data['idD'] = $_GET['id'];
            $data['idS'] = $_SESSION['idSoiree'];
            $data['tuyau'] = $_POST['tuyaux'];
            $data['volume'] = $_POST['volume'];
            if($soiree->insertD($data)) {
                redirect('soiree.php?id=' . $_SESSION['idSoiree'] . '&subpage=diluants', "Alcool bien ajouté", 'success');
            } else {
                redirect('soiree.php?id=' . $_SESSION['idSoiree'] . '&subpage=diluants', "Une erreur est survenue", 'error');
            }
        } else {
            redirect('soiree.php?id=' . $_SESSION['idSoiree'] . '&subpage=diluants', "Vous devez sélectionner un volume et un tuyaux", 'error');
        }
    }

    // Template
    $template = new Template('templates/attribution-diluant.php');

    $template->diluant = $diluants->get($_GET['id']);
    $template->tuyaux = $soiree->getTuyaux($_SESSION['idSoiree']);

    // display the template
    echo $template;
?>