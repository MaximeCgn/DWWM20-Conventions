<?php

echo '<body class="colonne">

<form method="POST" action="index.php>?page=traitementVisite&typeTraitement=ajouter">
<div class="contenu colonne">
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
        </div>
        <select class="libelle" name="idConvention">
            <option value="1">test salle 1</option>
            <option value="3"> test salle 3</option>
        </select>
    </div>
    <div class="return marginLight"><a class="centre" href="index.php">Retour</a></div>
    <input type="submit" class="ajouter marginLight centre" name="submit" value="ajouter"/>
</div>
</form>

</body>

</html>';