<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siteVoiture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card
        {
            transition:.5s;
        width: 300px;
        height: 450px;
            margin: 10px; 
            border:blue 3px solid;
        }
        .card:hover{
            width: 330px;
            height: 465px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition:.5s;

        }
        img{
            height: 200px;
        }
        h5{
            color:red;
            text-align:center;
        }
        #btn{
margin-left:90px ;        }
    </style>
</head>

<body>
    <?php
    require "contact.php";

    $query = "SELECT * FROM voitures";
    $state = $conn->prepare($query);
    $state->execute();

    $resultat = $state->fetchAll(); 
    ?>

    <div class="container">
        <div class="row">
            <?php
            if ($resultat) {
                foreach ($resultat as $row) {
                    ?>
                    <div class="col">
                        <div class="card">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="Image de voiture" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row["Marque"]); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($row["Modele"]); ?></p>
                                <p class="card-text"><?php echo htmlspecialchars($row["Prix"]); ?> DH</p>
                                <p class="card-text"><?php echo htmlspecialchars($row["Carburant"]); ?> </p>
                                <p class="card-text"><?php echo htmlspecialchars($row["Transmission"]); ?> </p>
<button id="btn" class="btn btn-primary">Acheter</button>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='alert alert-danger'>Erreur de récupération : aucune voiture trouvée.</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
