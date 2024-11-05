<?php

$user ="root";
$psw ="";
try {
    $conn =new PDO("mysql:host=localhost;dbname=stockage",$user,$psw);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
