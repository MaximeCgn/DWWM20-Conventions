<?php
$salle = SallesManager::getList();
echo '<div></div>';
echo '<div class="contenu colonne">
<div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre" href="index.php?page=formulaire">Ajouter Convention</a></div>
    <div class="espace"></div>
</div>';

echo '<div class="liste colonne ">';
foreach ($salle as $uneSalle){
    echo '
    <div class="visiteur margin">
    <div class="libelle marginBouton">'. $uneSalle->getNomSalle().'</div>
    <div class="details marginBouton"><a href="index.php?page=formulaire&typeFormulaire=details&id='.$uneSalle->getIdSalle().'">Détails</a></div>
    <div class="modifier marginBouton"><a href="index.php?page=formulaire&typeFormulaire=modifier&id='.$uneSalle->getIdSalle().'">Modifier</a></div>
    <div class="supprimer marginBouton"><a href="index.php?page=traitement&typeTraitement=supprimer&id='.$uneSalle->getIdSalle().'">Supprimer</a></div>
    </div>
    ';
}
echo '</div>
</div>
';
