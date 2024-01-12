<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Passer une Commande</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background: url(WhatsApp\ Image\ 2024-01-12\ at\ 17.59.46_6dfaf356.jpg);
      
      background-position: center;
      background-repeat: repeat-x;
    }

    header {
      background: linear-gradient(35deg ,rgba(220, 175, 175, 0.65),rgba(52, 23, 23, 0.481));
      color: #fff;
      padding: 1em;
      text-align: center;
    }

    footer {
      background: linear-gradient(35deg ,rgba(220, 175, 175, 0.65),rgba(52, 23, 23, 0.481));
      color: #fff;
      padding: 1em;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: rgb(242, 241, 239);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    
    input[type="email"],
    input[type="password"]
    {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }
  </style>


<script>
    function validateForm() {
        
        var email = document.getElementById("eml").value;
        var mdp = document.getElementById("mdp").value;

       

        // Validation du champ Email
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(email)) {
            alert("Veuillez saisir une adresse email valide.");
            return false;
        }

        // Validation du champ Message
        if (mdp === "") {
            alert("Veuillez saisir votre mot de passe.");
            return false;
        }

        alert("Formulaire soumis avec succès!");
        return true;
    }
</script>



</head>
<body>


  <header>
    <h1>Connexion</h1>
  </header>
  <form  name="f" action="" method="post" onsubmit="return validateForm()" >
 
    
    <label for="name">Adresse email:</label>
    <input type="email" id="eml" name="eml" placeholder="Entrez  adresse email" >

    <label for="name">Mot de passe :</label>
    <input type="password" id="mdp" name="mdp" placeholder="Entrez  un mot de passe" >
  

    <input type="submit" value="Envoyer">
  </form>

  <footer>
    <p>&copy; 2023 ModaFashion</p>
  </footer>
  <?php

    

        try
        {
            global $bdd;
            $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
            
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
        $reponse=$bdd->query('select * from utilisateur');
        $authentification=false;
        while($donnees=$reponse->fetch()){
            $eml=$donnees['eml'];
            $mdp=$donnees['mdp'];
            if($_POST['eml']==$eml and $_POST['mdp']==$mdp){
                $authentification=true;
                
                header( "location: page .php");

            }
            if($authentification==false){
                echo'<h3> Mot de passe incorrect!<h3>';
            }
        }
        ?>
</body>
</html>