<?php
require_once"fonction.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //appel du valeur du mot de passe a partir de la form 
    $motDePasse = $_POST["motDePasse"];

    //tester la valeur saisie dans le champs du mot de passe utilisant la fonction creer dans fonction.php
    $resultat = validerMotDePasse($motDePasse);
    //affichage de resultat
    echo $resultat;
}

?>

<form method="post" action="index.php">
    <label for="motDePasse">Mot de passe :</label>
    <input type="password" id="motDePasse" name="motDePasse">
    <input type="submit" value="Valider">
</form>