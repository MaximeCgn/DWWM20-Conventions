<?php
$visiteurs = VisiteursManager::getList();
echo '<div></div>';
echo '<div class="contenu colonne">
<div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre" href="index.php?page=formulaire">Ajouter Convention</a></div>
    <div class="espace"></div>
</div>';

echo '<div class="liste">';
foreach ($visiteurs as $unVisiteur){
    echo '
    <div class="visiteur">
    <div class="libelle marginBouton">'. $unVisiteur->getNomVisiteur().' '.$unVisiteur->getPrenomVisiteur().'</div>
    <div class="details marginBouton"><a href="index.php?page=formulaire&typeForm=details&id='.$unVisiteur->getIdVisiteur().'">Détails</a></div>
    </div>
    ';
}
echo '</div>
</div>
';