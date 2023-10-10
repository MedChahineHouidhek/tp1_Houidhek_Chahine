<?php

function validerMotDePasse($motDePasse) {
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

    // Générer un "salt" 
    $salt = "CHHC@1920";

    // Appliquer la fonction sha1 au "salt"
    $saltHash = sha1($salt);

    // Concaténer le "salt" avec le mot de passe
    $motDePasseConcatene = $motDePasse . $saltHash;

    // Chiffrer le mot de passe concaténé
    $motDePasseChiffre = password_hash($motDePasseConcatene, PASSWORD_BCRYPT);

    

    // Message de confirmation
    $message = "Mot de passe enregistré avec succès !<br>";
    $message .="Mot de passe : ".$motDePasse."<br>";
    $message .= "Salt : " . $saltHash . "<br>";
    $message .= "Mot de passe crypte : " . $motDePasseChiffre;

    return $message;
}
?>