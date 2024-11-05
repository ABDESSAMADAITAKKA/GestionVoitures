<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>gestion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
       #navline{
height: 100px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
       } 
       ul{
        list-style: none;
        display: flex;
       flex-direction:row;
       justify-content: end;
       padding: 10px;
       }
       li{
        margin-left:16px;
        margin-top:16px;

       }
       img{
        position: relative;
        bottom: 10px;
       }
       .icon-button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  color: #333333;
  background: #dddddd;
  border: none;
  outline: none;
  border-radius: 50%;
}

.icon-button:hover {
  cursor: pointer;
}

.icon-button:active {
  background: #cccccc;
}

.icon-button__badge {
  position: absolute;
  top: -10px;
  right: -10px;
  width: 25px;
  height: 25px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}
#navvertical {
            height: 10000px;
            width: 0;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 0;
            transition: width 1s;
            overflow: hidden; 
        }
#home{
    position: absolute;
    top:24px;
    left:10px;
}
#form{
margin: 10% auto;
width: 500px;
padding: 30px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

}

input,select{
  margin: 12px;
}
h1{
  text-align:center;
  margin-top:100px ;
  margin-bottom:100px ;

}


@keyframes rotateAndScale {
  0% {
    transform: rotate(90deg) scale(1);
  }
  50% {
    transform: rotate(180deg) scale(1.2);
  }
  100% {
    transform: rotate(360deg) scale(1);
  }
}






.btn{
  width: 100%;
  margin: 12px;

}
h3{
  color:blue;
  text-align:center;

}
#table{
  display: none;
}
#vertical{
  margin-top:170px ;
  font-size: 23px;
}
#side:hover{
  background-color: #D11253;
  font-size: 30px;
  width: 280px;
}
#changeColorButton{
  animation: rotateAndScale 2s infinite; 
}
#search{
  margin-left: 0px;

}
#ser{
  width: 100px;
  border:2px solid #D11253;
  background: #D11253;
  color:white;

}
#inpseat{
  width: 300px;
  height: 50px;
  margin: 0px;
  border:2px solid #D11253;
  border-radius:16px;
  margin-bottom:40px ;
}
    </style>
</head>
<body>

<nav id="navline">
      <ul>
             <li>
                  <button type="button" class="icon-button" onclick="toglle()">
                   <span class="material-icons" >notifications</span>
                   <span class="icon-button__badge" id="notif">2</span>
                  </button>
            </li>

           <li>  
                   <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="5px" width="47" height="47" viewBox="0 0 50 50" id="changeColorButton">
                 <path d="M 22.205078 2 A 1.0001 1.0001 0 0 0 21.21875 2.8378906 L 20.246094 8.7929688 C 19.076509 9.1331971 17.961243 9.5922728 16.910156 10.164062 L 11.996094 6.6542969 A 1.0001 1.0001 0 0 0 10.708984 6.7597656 L 6.8183594 10.646484 A 1.0001 1.0001 0 0 0 6.7070312 11.927734 L 10.164062 16.873047 C 9.583454 17.930271 9.1142098 19.051824 8.765625 20.232422 L 2.8359375 21.21875 A 1.0001 1.0001 0 0 0 2.0019531 22.205078 L 2.0019531 27.705078 A 1.0001 1.0001 0 0 0 2.8261719 28.691406 L 8.7597656 29.742188 C 9.1064607 30.920739 9.5727226 32.043065 10.154297 33.101562 L 6.6542969 37.998047 A 1.0001 1.0001 0 0 0 6.7597656 39.285156 L 10.648438 43.175781 A 1.0001 1.0001 0 0 0 11.927734 43.289062 L 16.882812 39.820312 C 17.936999 40.39548 19.054994 40.857928 20.228516 41.201172 L 21.21875 47.164062 A 1.0001 1.0001 0 0 0 22.205078 48 L 27.705078 48 A 1.0001 1.0001 0 0 0 28.691406 47.173828 L 29.751953 41.1875 C 30.920633 40.838997 32.033372 40.369697 33.082031 39.791016 L 38.070312 43.291016 A 1.0001 1.0001 0 0 0 39.351562 43.179688 L 43.240234 39.287109 A 1.0001 1.0001 0 0 0 43.34375 37.996094 L 39.787109 33.058594 C 40.355783 32.014958 40.813915 30.908875 41.154297 29.748047 L 47.171875 28.693359 A 1.0001 1.0001 0 0 0 47.998047 27.707031 L 47.998047 22.207031 A 1.0001 1.0001 0 0 0 47.160156 21.220703 L 41.152344 20.238281 C 40.80968 19.078827 40.350281 17.974723 39.78125 16.931641 L 43.289062 11.933594 A 1.0001 1.0001 0 0 0 43.177734 10.652344 L 39.287109 6.7636719 A 1.0001 1.0001 0 0 0 37.996094 6.6601562 L 33.072266 10.201172 C 32.023186 9.6248101 30.909713 9.1579916 29.738281 8.8125 L 28.691406 2.828125 A 1.0001 1.0001 0 0 0 27.705078 2 L 22.205078 2 z M 23.056641 4 L 26.865234 4 L 27.861328 9.6855469 A 1.0001 1.0001 0 0 0 28.603516 10.484375 C 30.066026 10.848832 31.439607 11.426549 32.693359 12.185547 A 1.0001 1.0001 0 0 0 33.794922 12.142578 L 38.474609 8.7792969 L 41.167969 11.472656 L 37.835938 16.220703 A 1.0001 1.0001 0 0 0 37.796875 17.310547 C 38.548366 18.561471 39.118333 19.926379 39.482422 21.380859 A 1.0001 1.0001 0 0 0 40.291016 22.125 L 45.998047 23.058594 L 45.998047 26.867188 L 40.279297 27.871094 A 1.0001 1.0001 0 0 0 39.482422 28.617188 C 39.122545 30.069817 38.552234 31.434687 37.800781 32.685547 A 1.0001 1.0001 0 0 0 37.845703 33.785156 L 41.224609 38.474609 L 38.53125 41.169922 L 33.791016 37.84375 A 1.0001 1.0001 0 0 0 32.697266 37.808594 C 31.44975 38.567585 30.074755 39.148028 28.617188 39.517578 A 1.0001 1.0001 0 0 0 27.876953 40.3125 L 26.867188 46 L 23.052734 46 L 22.111328 40.337891 A 1.0001 1.0001 0 0 0 21.365234 39.53125 C 19.90185 39.170557 18.522094 38.59371 17.259766 37.835938 A 1.0001 1.0001 0 0 0 16.171875 37.875 L 11.46875 41.169922 L 8.7734375 38.470703 L 12.097656 33.824219 A 1.0001 1.0001 0 0 0 12.138672 32.724609 C 11.372652 31.458855 10.793319 30.079213 10.427734 28.609375 A 1.0001 1.0001 0 0 0 9.6328125 27.867188 L 4.0019531 26.867188 L 4.0019531 23.052734 L 9.6289062 22.117188 A 1.0001 1.0001 0 0 0 10.435547 21.373047 C 10.804273 19.898143 11.383325 18.518729 12.146484 17.255859 A 1.0001 1.0001 0 0 0 12.111328 16.164062 L 8.8261719 11.46875 L 11.523438 8.7734375 L 16.185547 12.105469 A 1.0001 1.0001 0 0 0 17.28125 12.148438 C 18.536908 11.394293 19.919867 10.822081 21.384766 10.462891 A 1.0001 1.0001 0 0 0 22.132812 9.6523438 L 23.056641 4 z M 25 17 C 20.593567 17 17 20.593567 17 25 C 17 29.406433 20.593567 33 25 33 C 29.406433 33 33 29.406433 33 25 C 33 20.593567 29.406433 17 25 17 z M 25 19 C 28.325553 19 31 21.674447 31 25 C 31 28.325553 28.325553 31 25 31 C 21.674447 31 19 28.325553 19 25 C 19 21.674447 21.674447 19 25 19 z"></path>
                 </svg>
             </li>

              <li>             
                 <img src="images/logo.jpeg" alt="" width="70px">
              </li>
           
      </ul>
                <img src="images/home.png" alt="" width="70px" id="home" onclick="toggle()">
</nav>


<nav id="navvertical">

      <div id='vertical'>
      <button class="btn btn-danger" onclick="afficher()">voitures</button>
      <button class="btn btn-danger" onclick="Nouvelle()">nouvel voiture</button>
      <button class="btn btn-danger" onclick="afficher()">clients</button>

     </div>
</nav>

<h1  class="text-blue-900 font-bold" id="gestion">gestion des voitures</h1>
<div id="form">
<form id="carForm" enctype="multipart/form-data" >
    <h3>nouvelle voiture</h3>
  <input type="text" name="Marque" id="" placeholder="Marque" class="form-control">
  <input type="text" name="Modele" id="" placeholder="Modele" class="form-control">
  <input type="date" name="Annee" id="" placeholder="Annee" class="form-control">
  <input type="text" name="Numero" id="" placeholder="Numero" class="form-control">
  <input type="radio" name="Carburant" id="" value="Essence" >Essence
  <input type="radio" name="Carburant" id="" value="Diesel">Diesel <br>
  <input type="radio" name="Transmission" id="" value="Automatique">Automatique
  <input type="radio" name="Transmission" id="" value="Manuelle" >Manuelle <br>
  <select name="Couleur" id="" class="form-control">
  <option value="">-- Choisissez une couleur --</option>
    <option value="Noir">Noir</option>
    <option value="Blanc">Blanc</option>
    <option value="Bleu">Bleu</option>
    <option value="Vert">Vert</option>
    <option value="Rouge">Rouge</option>
    <option value="Gray">Gray</option>
    <option value="Autre">Autre</option>
  </select>
  <select name="Size" id="" class="form-control">
  <option value="">-- Choisissez la taille --</option>

  <option value="Mini">Mini</option>
  <option value="Medium">Medium</option>
  <option value="Grand">Grand</option>
  </select>

  <input type="text" name="Prix" id="" class="form-control"  placeholder="Prix">
  <input type="file" name="image" id="" class="form-control">
  <button type="button" class="btn btn-primary" width="100%" name="submit" id="submitBtn">Enregistrer</button>
</form>
</div>


<div id="table">
<form method="POST" id="searchForm">
        <div class="mb-3">
            <input type="text" name="search" class="" id="inpseat" placeholder="Recherche..." required>
            <input class="btn btn-outline-secondary" type="submit" value="Rechercher" id="ser">
            
        </div>
    </form>

    <?php
    require "contact.php";

    $search = isset($_POST['search']) ? $_POST['search'] : '';
    $searchQuery = !empty($search) ? " WHERE Marque LIKE :search OR Modele LIKE :search OR Annee LIKE :search OR Numero LIKE :search OR Carburant LIKE :search OR Transmission LIKE :search OR Couleur LIKE :search OR Prix LIKE :search" : '';
    
    $request = "SELECT * FROM voitures" . $searchQuery;
    $state = $conn->prepare($request);
    if (!empty($search)) {
        $state->bindValue(':search', '%' . $search . '%');
    }
    $state->execute();
    $result = $state->fetchAll();
    ?>
<table class="table table-striped" border="4"> 
    <tr class="table-danger text-primary">
        <th >Marque</th>
        <th>Modele</th>
        <th >Annee</th>
        <th>Numero</th>
        <th>Carburant</th>
        <th>Transmission</th>
        <th>Couleur</th>
        <th>Size</th>
        <th>Prix</th>
        <th>Image</th>
        <th>Supprimer</th>
    </tr>
    <?php foreach ($result as $row) { ?>
    <tr>
        <td><?php echo htmlspecialchars($row["Marque"]); ?></td>
        <td><?php echo htmlspecialchars($row["Modele"]); ?></td>
        <td><?php echo htmlspecialchars($row["Annee"]); ?></td>
        <td><?php echo htmlspecialchars($row["Numero"]); ?></td>
        <td><?php echo htmlspecialchars($row["Carburant"]); ?></td>
        <td><?php echo htmlspecialchars($row["Transmission"]); ?></td>
        <td><?php echo htmlspecialchars($row["Couleur"]); ?></td>
        <td><?php echo htmlspecialchars($row["Size"]); ?></td>
        <td><?php echo htmlspecialchars($row["Prix"]); ?></td>
        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="Image de voiture" width="200"></td>
        <td><button class="btn btn-warning"><a href='supprimer.php?id=<?php echo $row['id']; ?>'">Supprimer</a> </button></td>
    </tr>
    <?php } ?>
</table>

</div>












<script src="script.js"></script>

<script>
  function afficher(){
 let table = document.getElementById("table")
  table.style.display="block";
 let form = document.getElementById("form")
 form.style.display="none";


}

function Nouvelle(){
  let table = document.getElementById("table")
  table.style.display="none";
 let form = document.getElementById("form")
 form.style.display="block";
}

  let colorState = 0;
function changeBackground() {
            if (colorState === 0) {
                document.body.style.background = "aliceblue"; 
                colorState = 1; 
            } else {
                document.body.style.background = "white"; 
                colorState = 0;
            }
        }
        document.getElementById("changeColorButton").onclick = changeBackground;


</script>


</body>
</html>