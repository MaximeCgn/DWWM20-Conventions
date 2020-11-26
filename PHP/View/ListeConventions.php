<?php
$conventions = ConventionsManager::getList();
echo '<div></div>';
echo '<div class="contenu colonne">
<div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre" href="index.php?page=formulaireConventions&typeFormulaire=ajouter">Ajouter Visiteur</a></div>
    <div class="espace"></div>
</div>';

echo '<div class="liste colonne ">';

foreach ($conventions as $uneConvention)
{
    echo '
    <div class="convention margin">
    <div class="libelle marginBouton">'.$uneConvention->getNomConvention().'</div>
    </div>
    '
}