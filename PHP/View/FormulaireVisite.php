<?php

echo '<body class="colonne">';

$typeFormulaire=$_GET["typeFormulaire"];
if ($typeFormulaire=="ajouter")
{
    echo '<form method="POST" action="index.php>?page=traitementVisite&typeTraitement=ajouter">
    $visite = new Visite(["dateVisite" => $_POST["dateVisite"], "idVisiteur" => $_POST["idVisiteur"], "idConvention" => $_POST["idConvention"])';
    VisiteManager::add($visite);
}

echo '<div class="contenu colonne">
    <div class="colonne">
        <div class="titreColonne centre">
            Date de la visite
        </div>
        <input class="libelle" type="text" name="dateVisite" placeholder="Date de la Visite"/>
    </div>
    <div class="colonne">
        <div class="titreColonne centre">
            Id Visiteur
        </div>
        <input class="libelle" type="text" name="idVisiteur" placeholder="Id Visiteur"/>
    </div>
    <div class="colonne">
        <div class="titreColonne centre">
            Id Convention
        </div>';

        foreach ($liste as $uneVisite)
        {
            echo '<select class="libelle" name="idConvention">
                <option value="1">test salle 1</option>
                <option value="3"> test salle 3</option>
            </select>';
        }
    echo '</div>
    <div class="return marginLight"><a class="centre" href="index.php">Retour</a></div>
    <input type="submit" class="ajouter marginLight centre" name="submit" value="ajouter"/>
</div>
</form>

</body>

</html>';
