<?php

$visite = VisiteManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=formulaire">Ajouter Visite</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($liste as $uneVisite)
        {
            echo '<div class="liste marginLight">
            <div class="libelle marginBouton">'.$uneVisite->getDateVisite().'</div>
            <div class="details marginBouton"><a class="centre" href="index.php?page=formulaire&typeFormulaire=details&id='.$uneVisite->getIdVisite().'">Aller voir une visite</a></div>
            <div class="modifier marginBouton"><a class="centre" href="index.php?page=formulaire&typeFormulaire=modifier&id='.$uneVisite->getIdVisite().'">Aller modifier une visite</a></div>
            <div class="supprimer marginBouton"><a class="centre" href="index.php?page=formulaire&typeFormulaire=supprimer&id='.$uneVisite->getIdVisite().'">Aller supprimer une visite</a></div>
            </div>';
        }
 
echo '</div>

</body>

<html>';
