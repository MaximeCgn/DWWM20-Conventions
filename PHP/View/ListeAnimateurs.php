<?php

$listeAnim= AnimateursManager::getList();



echo'<div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=formulaireAnimateurs">Ajouter Animateur</a></div>
            <div class="espace"></div>
        </div>';

echo'<div class="liste">';
foreach($listeAnim as $unAnim)
{
    echo'<div class="libelle marginBouton">'.$unAnim->getNomAnimateur().' '.$unAnim->getPrenom().'</div>
            <div class="details marginBouton"><a href="index.php?page=formulaireAnimateurs&typeForm=details&id='.$unAnim->getIdAnimateur().'>Details</a></div>
            <div class="modifier marginBouton"><a href="index.php?page=formulaireAnimateurs&typeForm=Modifier&id='.$unAnim->getIdAnimateur().'>Modifier</a></div>
            <div class="supprimer marginBouton">Supprimer</div>';
}
           
        </div>
        <div class="margin">
            <div class="espace"></div>
            <div class="return"><a class="centre" href="index.php?page=formulaire">Retour</a></div>
            <div class="espace"></div>
        </div>
    </div>
