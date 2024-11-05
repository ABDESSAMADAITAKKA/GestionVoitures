<?php

require "contact.php";
$requete ="delete from voitures where id =".$_GET["id"];
$state =$conn->prepare($requete);
$state->execute();
header("location: gestion.php");

?>

<div id="table">
