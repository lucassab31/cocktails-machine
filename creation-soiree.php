<?php require_once('includes/header.php'); ?>
<section id="creation-soiree">
    <div class="section-title">
        <h1>Ajouter votre soirée</h1>
    </div>
    <div class="creation-soiree_content">
        <form method="post" id="creation-soiree_form">
            <div class="creation-soiree_text">
                <label for="NombrePersonne">Nombre de personne</label>
                <input type="number" class="formText"id="NombrePersonne" placeholder="8" name="Nombre de personne">
                <label for="LieuSoiree">Lieu de la soirée</label>
                <input type="text" class="formText"id="LieuSoiree" placeholder="45 chemin du Cugnol" name="Lieux de la soirée">
            </div>
            <div class="creation-soiree_checkbox">
                <label for="Minijeux">Minijeux ?</label>
                <input type="checkbox" class="checkbox" id="Minijeux" name="Minijeux">
                <label for="Identification">Identification ?</label>
                <input type="checkbox" class="checkbox"id="Identification" name="Identification">
            </div>
            <input type="submit" id="Valider" name="Valider">
        </form>
    </div>
</section>