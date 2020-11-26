<?php

$liste = VisiteManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=formulaireVisite">Ajouter Visite</a></div>
            <div class="espace"></div>
        </div>
        <div class="liste">';
            foreach ($liste as $uneVisite)
            {
            echo '<div class="libelle marginBouton">'.$uneVisite->getDateVisite().'</div>
            <div class="details marginBouton"><a class="centre" href="index.php?page=Detail&id='.$uneVisite->getIdVisite().'">Aller voir une visite</a></div>
            <div class="modifier marginBouton"><a class="centre" href="index.php?page=modifier&id='.$uneVisite->getById().'">Aller modifier une visite</a></div>
            <div class="supprimer marginBouton"><a class="centre" href="index.php?page=supprimer&id='.$uneVisite->getById().'">Aller supprimer une visite</a></div>';
            }
        echo '</div>
            
        <div class="margin">
            <div class="espace"></div>
            <div class="return"><a class="centre" href="index.php?page=formulaireVisite">Retour</a></div>
            <div class="espace"></div>
        </div>
    </div>

</body>

<html>';
