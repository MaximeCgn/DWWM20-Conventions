<?php

echo '<body class="colonne">';

$typeFormulaire = $_GET['typeFormulaire'];
if ( $typeFormulaire == 'ajouter' )
 {
    echo '<form method="POST" action="index.php>?page=traitementVisite&typeTraitement=ajouter">
    $visite = new Visite(["dateVisite" => $_POST["dateVisite"], "idVisiteur" => $_POST["idVisiteur"], "idConvention" => $_POST["idConvention"])';
    VisiteManager::add( $visite );

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
        </div>
        <input class="libelle" type="text" name="idConvention" placeholder="Id Convention"/>
    </div>';

    foreach ( $liste as $unVisiteur )
    {
        echo '<select class="libelle" name="idVisiteur">
                    <option value="1">Visiteur numero 1</option>
                    <option value="2">Visiteur numero 2</option>
                </select>';
    }

    foreach ( $liste as $uneConvention )
    {
        echo '<select class="libelle" name="idConvention">
                    <option value="1">Convention 1</option>
                    <option value="2">Convention 2</option>
                </select>';
    }
echo '</div>
    <div class="return marginLight"><a class="centre" href="index.php">Retour</a></div>
    <input type="submit" class="ajouter marginLight centre" name="submit" value="ajouter"/>
</div>
</form>';
} 
elseif ( $typeFormulaire == 'modifier' )
{
    $id = intval( $_POST['id'] );
    $visite = VisiteManager::findById( $id );
    $visite = setDateVisite( $_POST['dateVisite'] );
    $visite = setIdVisiteur( $_POST['idVisiteur'] );
    $visite = setIdConvention( $_POST['idConvention'] );

    $test = VisiteManager::update( $visite );

    echo '<form method="POST" action="index.php>?page=traitementVisite&typeTraitement=modifier">

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
        <input class="libelle" type="text" name="idConvention" placeholder="Id Convention"/>
    </div>';

    foreach ( $liste as $unVisiteur )
    {
        echo '<select class="libelle" name="idVisiteur">
                    <option value="1">Visiteur numero 1</option>
                    <option value="2">Visiteur numero 2</option>
                </select>';
    }

    foreach ( $liste as $uneConvention )
    {
        echo '<select class="libelle" name="idConvention">
                    <option value="1">Convention 1</option>
                    <option value="2">Convention 2</option>
                </select>';
    }
echo '</div>
    <div class="return marginLight"><a class="centre" href="index.php">Retour</a></div>
    <input type="submit" class="ajouter marginLight centre" name="submit" value="ajouter"/>
</div>
</form>';
}
elseif ( $typeFormulaire == 'details' )
{

    echo '<form method="POST" action="index.php>?page=traitementVisite&typeTraitement=details">

    <div class="contenu colonne">
    <div class="colonne">
        <div class="titreColonne centre">
            Date de la visite
        </div>
        <input class="libelle" type="text" name="dateVisite" placeholder="Date de la Visite" disabled/>
    </div>
    <div class="colonne">
        <div class="titreColonne centre">
            Id Visiteur
        </div>
        <input class="libelle" type="text" name="idVisiteur" placeholder="Id Visiteur" disabled/>
    </div>
    <div class="colonne">
        <div class="titreColonne centre">
            Id Convention
        </div>
        <input class="libelle" type="text" name="idConvention" placeholder="Id Convention" disabled/>
    </div>';

    foreach ( $liste as $unVisiteur )
    {
        echo '<select class="libelle" name="idVisiteur">
                    <option value="1">Visiteur numero 1</option>
                    <option value="2">Visiteur numero 2</option>
                </select>';
    }

    foreach ( $liste as $uneConvention )
    {
        echo '<select class="libelle" name="idConvention">
                    <option value="1">Convention 1</option>
                    <option value="2">Convention 2</option>
                </select>';
    }
echo '</div>
    <div class="return marginLight"><a class="centre" href="index.php">Retour</a></div>
</div>
</form>';
}

echo '</body>

</html>';
