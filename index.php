<?php
require_once"fonction.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $motDePasse = $_POST["motDePasse"];

    
    $resultat = validerMotDePasse($motDePasse);

    echo $resultat;
}

?>

<form method="post" action="index.php">
    <label for="motDePasse">Mot de passe :</label>
    <input type="password" id="motDePasse" name="motDePasse">
    <input type="submit" value="Valider">
</form>