<?php
    include_once 'config/init.php';

    $alcools = new Alcool;
    $soiree = new Soiree;

    if (isset($_POST['sub'])) {
        if (!empty($_GET['id']) && !empty($_POST['tuyaux']) && !empty($_POST['volume'])) {
            $data = array();
            $data['idA'] = $_GET['id'];
            $data['idS'] = $_SESSION['idSoiree'];
            $data['tuyau'] = $_POST['tuyaux'];
            $data['volume'] = $_POST['volume'];
            if($soiree->insertA($data)) {
                redirect('soiree.php?id=' . $_SESSION['idSoiree'], "Alcool bien ajouté", 'success');
            } else {
                redirect('soiree.php?id=' . $_SESSION['idSoiree'], "Une erreur est survenue", 'error');
            }
        } else {
            redirect('soiree.php?id=' . $_SESSION['idSoiree'], "Vous devez sélectionner un volume et un tuyaux", 'error');
        }
    }

    // Template
    $template = new Template('templates/attribution-alcool.php');

    $template->alcool = $alcools->get($_GET['id']);
    $template->tuyaux = $soiree->getTuyaux($_SESSION['idSoiree']);

    // display the template
    echo $template;
?>