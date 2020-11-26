<?php
$liste = EmplacementsManager::getList();


echo '<body class="colonne">

    <div class="contenui colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=formulaire">Ajouter convention</a></div>
            <div class="espace"></div>
        </div>
        <div class="liste">';
            foreach ($liste as $unEmplacement)
            {
            echo '<div class="libelle marginBouton">Libelle Conventions</div>
            <div class="details marginBouton">Details</div>
            div class="modifier marginBouton">Modifier</div>
            <div class="supprimer marginBouton">Supprimer</div>'
        }

        echo '</div>

        <div class="margin">
            <div class="espace></div>
            <div class="return"><a class="centre" href="index.php?page=formulaire">Retour</a></div>
            <div class="espace"></div>
        </div>
    </div>

</body>

<html>';