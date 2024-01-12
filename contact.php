

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>

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
        var question = document.getElementById("question").value;

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
        if (question === "") {
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
        <h1>Contactez-nous à tout moment</h1>
    </header>

    <main>
        <form id="contactForm" action="" method="post" onsubmit="return validateForm()">
            <label for="firstName">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="lastName">Nom:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email:</label>
            <input type="email" id="eml" name="eml" required>

          

            <label for="question">Question:</label>
            <textarea id="question" name="question" rows="4" required></textarea>

            <input type="submit" values="Envoyer">
        </form>
    </main>

    <footer>
        <p>&copy; 2023 Mon Site Web. Tous droits réservés.</p>
    </footer>


    <?php

    
	if(isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['eml']) and isset($_POST['question']))
	{
		if(!empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['eml']) and !empty($_POST['question']))
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
		$sql1="select * from contact where email='".$_POST['eml']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into contact(prenom,nom, email, question) values('".$_POST['prenom']."','".$_POST['nom']."','".$_POST['eml']."','".$_POST['question']."')";
				$bdd->exec($sql2);
			  header( "location: contactmessage.php");
			}
			else
			echo "<center>Utilisateur existe déja !!!</center>";
		} 
	}
	?>

 
</body>
</html>
