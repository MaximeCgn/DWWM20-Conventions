<?php

$liste = VisiteManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=formulaireVisite">Ajouter Visite</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($liste as $uneVisite)
        {
            echo '<div class="liste">
            <div class="libelle marginBouton">'.$uneVisite->getDateVisite().'</div>
            <div class="details marginBouton"><a class="centre" href="index.php?page=Detail&id='.$uneVisite->getIdVisite().'">Aller voir une visite</a></div>
            <div class="modifier marginBouton"><a class="centre" href="index.php?page=modifier&id='.$uneVisite->getIdVisite().'">Aller modifier une visite</a></div>
            <div class="supprimer marginBouton"><a class="centre" href="index.php?page=supprimer&id='.$uneVisite->getIdVisite().'">Aller supprimer une visite</a></div>
            </div>';
        }
 
        echo '<div class="margin">
            <div class="espace"></div>
            <div class="return"><a class="centre" href="index.php?page=formulaireVisite">Retour</a></div>
            <div class="espace"></div>
        </div>
    </div>

</body>

<html>';
