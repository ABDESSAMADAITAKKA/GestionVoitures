<?php
require "contact.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image = file_get_contents($_FILES["image"]["tmp_name"]);
    } else {
        die("Error uploading image.");
    }

    $requete = "INSERT INTO voitures (Marque, Modele, Annee, Numero, Carburant, Transmission, Couleur, Size, Prix, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $state = $conn->prepare($requete);

    $state->execute([
        $_POST["Marque"],
        $_POST["Modele"],
        $_POST["Annee"],
        $_POST["Numero"],
        $_POST["Carburant"],
        $_POST["Transmission"],
        $_POST["Couleur"],
        $_POST["Size"],
        $_POST["Prix"],
        $image 
    ]);
    header("location: gestion.php");
    
}
?>
