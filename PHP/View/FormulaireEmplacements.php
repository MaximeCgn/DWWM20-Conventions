<?php 

$typeFormulaire=$_GET["typeFormulaire"];
if ($typeFormulaire=="ajouter")
{
    echo '<form method="POST" action="index.php?page=traitementEmplacements&typeTraitement=ajouter">
    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Numero Emplacement
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle " type="text" name="numeroEmplacement" placeholder="Nom de l\'emplacement"/>
                <div class="espace"></div>
                </div>
    </form>';
}
else if ($typeFormulaire=="modifer")
{
    $idRecherche=$_GET['id'];
    $id=EmplacementsManager::findById($idRecherche);
    echo '
    <form method="POST" action="index.php?page=traitementEmplacements&typeTraitement=modifier">
        <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Numero Emplacement
                    <input type="hidden" name="id" value="'.$id->getIdEmplacement().'"/>
                    <input type="text" class="libelle" name="nomVisiteur" value="'.$id->getNumeroEmplacement().'"/>
                    
                </div>
            </div>';    
}
else if ($typeFormulaire=="details")
{
    $idRecherche=$_GET['id'];
    $id=EmplacementsManager::findById($idRecherche);
    echo' <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Numero Emplacement
                    <input type="text" class="libelle" name="numeroEmplacement" value="'.$id->getNumeroEmplacement().'"disabled/>
                </div>
            </div>
        </div>';
}