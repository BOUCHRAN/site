<!DOCTYPE html>
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
      background: url(WhatsApp\ Image\ 2023-12-13\ at\ 09.29.30_59242eda.jpg);
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
    select,
    textarea {
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
        var message = document.getElementById("message").value;

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
    <h1>Commande de Vêtements</h1>
  </header>

  <form  name="f" action="" method="post" onsubmit="return validateForm()">
    <label for="name">Nom et Prénom :</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez  nom et prénom" >

    <label for="name">Numéro thelephone :</label>
    <input type="text" id="tel" name="tel" placeholder="Entrez  Numéro telephone" >
    <label for="email">Adresse email :</label>
    <input type="text" id="eml" name="eml" placeholder="Entrez  adresse " >

    <label for="product">Taille :</label>
    <select id="product" name="product">
      <option value="">choisir la taille</option>
      <option value="t-shirt">S</option>
      <option value="jeans">M</option>
      <option value="veste">L</option>
      <option value="veste">XL</option>
      <option value="veste">XXL</option>
    </select>
    
      <label for="product">Couleur :</label>
    <select id="product2" name="product2" required>
      <option value="">choisir la couleur</option>
      <option value="t-shirt">noir</option>
      <option value="jeans">blan</option>
      <option value="veste">vert</option>
      <option value="veste">rouge</option>
      <option value="veste">jaune</option>
      <!-- Ajoutez d'autres options selon vos besoins -->
    </select>

    <label for="message">Message :</label>
    <textarea id="message" name="message" placeholder="Ajoutez des détails supplémentaires"></textarea>

    <input type="submit" value="Passer la Commande">
  </form>

  <footer>
    <p>&copy; 2023 ModaFashion</p>
  </footer>

  <?php

    
	if(isset($_POST['nom']) and isset($_POST['tel']) and isset($_POST['eml'])  and isset($_POST['message']))
	{
		if(!empty($_POST['nom']) and !empty($_POST['tel']) and !empty($_POST['eml']) and !empty($_POST['message']))
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
		$sql1="select * from commande where email='".$_POST['eml']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into commande(nom, email, tel,taille,couleur,message) values('".$_POST['nom']."','".$_POST['eml']."','".$_POST['tel']."' ,'".$_POST['product']."' ,'".$_POST['product2']."' ,'".$_POST['message']."')";
				$bdd->exec($sql2);
				header( "location: commandemessage.php");
			}
			else
			echo "<center>Utilisateur existe déja !!!</center>";
		} 
	}
	?>

</body>
</html>
