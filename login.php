

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
#form{
    width: 450px;
    height: 300px;
    margin: 0px auto;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    padding: 130px 34px;
    border-radius:37px;

    
}
#login,#password{
    width: 450px;
    height: 80px;
    font-size:30px;
    margin-top: 15px;
    border-radius:37px;
border:solid 3px  #D11253;
}
#btn{
    margin-top:30px ;
    width: 100%;
    height:50px;
    border-radius:30px;
    font-size:20px;
    background-color: #D11253;
    color:white;

}
img{
 
    width:  140px;
    height: 140px;
    margin: 0px 200px;
    position: relative;
    top:80px;

}
#image{
    width: 450px;
    height: 300px;
    margin: 0px auto;
}
p{
    margin-left:30px ;
    background-color: #D11253;
    color:white;
    padding: 10px;
    visibility: hidden;
    border-radius:30px;
}
span{
    display: inline-block;
    margin-left:100px ;
}

a{
    display: inline-block;
    margin-left:130px ;
    text-decoration:none;
    color:#D11253;
    font-size:20px;

}
a:hover{
    text-decoration:underline;
    
 
}
    </style>
</head>
<body>
    <div id="image">
<img src="images/logo.jpeg" alt="">

    <div id="form">
    <?php
    require "contact.php"; 

    if (isset($_POST["login"]) && isset($_POST["password"])) {
        $nom = $_POST["login"];
        $pas = $_POST["password"];

        $sql = "SELECT * FROM login WHERE nom = '$nom' AND password = '$pas'";
        $state = $conn->prepare($sql);
        $state->execute();

        if ($state->rowCount() > 0) {
header("location: gestion.php") ;          
        }
    
else {
    echo " <p style='visibility: visible;' id='p'>Nom d'utilisateur ou mot de passe incorrect.<span onclick='bloc()'>X</span></p>";

}
}
?>
        <form action="" method="post">
            <input type="text" name="login" id="login" required placeholder="UserName">
            <br>
            <input type="password" name="password" id="password" required placeholder="Password"><br><br>
            <input type="checkbox" name="" id="chek">Rester connecté(e) <a href="">Forget Password</a>
            <br>
            <button type="submit" id="btn">Connexion</button>
        </form>
    </div>
    </div>
 
    <script>
        function bloc(){
            p = document.getElementById("p")
            p.style.visibility ="hidden"
        }
    </script>
</body>
</html>
