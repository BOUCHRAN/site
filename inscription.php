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

    input[type="text"],
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
        var nom = document.getElementById("nom").value;
        var email = document.getElementById("eml").value;
        var message = document.getElementById("mdp").value;

        // Validation du champ Nom
        if (nom === "") {
            alert("Veuillez saisir votre nom.");
            return false;
        }

        // Validation du champ Email
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(email)) {
            alert("Veuillez saisir une adresse email valide.");
            return false;
        }

        // Validation du champ Message
        if (message === "") {
            alert("Veuillez saisir votre message.");
            return false;
        }

        alert("Formulaire soumis avec succès!");
        return true;
    }
</script>

</head>
<body>


  <header>
    <h1>Inscription</h1>
  </header>

  <form  name="f" action="" method="post" onsubmit="return validateForm()">
    <label for="nom">Nom et Prénom :</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez  nom et prénom" >
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

    
if(isset($_POST['nom']) and isset($_POST['eml']) and isset($_POST['mdp']))
{
    if(!empty($_POST['nom']) and !empty($_POST['eml']) and !empty($_POST['mdp']))
    {
        try
        {
            global $bdd;
            $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
            
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    $sql1="select * from utilisateur where eml='".$_POST['eml']."'";
    $reponse = $bdd->query($sql1);
    $donnees = $reponse->fetch();

        if(empty($donnees))
        {   
            $sql2="insert into utilisateur(nom, eml, mdp) values('".$_POST['nom']."','".$_POST['eml']."','".$_POST['mdp']."')";
            $bdd->exec($sql2);
            header( "location: page .php");
        }
        else
        echo "<center>Utilisateur existe déja !!!</center>";
    } 
}
?>

</body>
</html>