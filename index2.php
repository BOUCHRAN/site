<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Formulaire de Connexion</title>
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 10px;
    margin-bottom: 16px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
}

   </style>
</head>
<body>

    <div class="container">
        <h2>Connexion</h2>

        <form action="process_login.php" method="post">
            <label for="email">Email :</label>
            <input type="email" name="email" id="eml" required>

            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" name="mot_de_passe" id="mdp" required>

            <input type="submit" value="Se Connecter">
        </form>
    </div> 
    <?php

//pour s'inscrire

  include("fonction.php");
    if(isset($_POST['eml']) and isset($_POST['mdp']))
{
    if($_POST['eml']=='admin' and $_POST['mdp']=='admin')
    header( "location: commande.html");
else
{

echo "<center> Mot de passe incorrect</center>";
}
}
?>
</body>
</html>