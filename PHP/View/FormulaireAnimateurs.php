
    <?php


    <form method="POST" action="index.php>?page=traitementConvention&typeTraitement=ajouter">
        <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne centre">
                    Nom de lanimateur
                </div>
                <input class="libelle" type="text" name="nomConvention" placeholder="Nom de la Convention"/>
            </div>
            <div class="colonne">
                <div class="titreColonne centre">
                    Categorie Convention
                </div>
                <input class="libelle" type="text" name="categorieConvention" placeholder="Categorie de la Convention"/>
            </div>
            <div class="colonne">
                <div class="titreColonne centre">
                    Id Salle
                </div>
                <select class="libelle" name="idSalle">
                    <option value="1">test salle 1</option>
                    <option value="3"> test salle 3</option>
                </select>
            </div>
            <div class="return marginLight"><a class="centre" href="index.php">Retour</a></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="ajouter"/>
        </div>
    </form>

    <footer>
        <div class="centre tailleFooter">Contact</div>
        <div class="centre tailleFooter">Calendrier</div>
        <div class="centre tailleFooter">FAQ</div>
        <div class="centre tailleFooter">Reseaux</div>
        <div class="image">
            <img src="../IMG/logo.png" alt="image PGW">
        </div>
    </footer>

</body>

</html>