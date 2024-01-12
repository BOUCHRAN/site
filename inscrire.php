<html>

<head>
    <title>Inscription</title>
   
</head>

<body>
    <h2><u>INSCRIPTION</u></h2><br>
   <form id="formulaire_test" action="" method="post" >


  <label for="eml">Adresse e-mail :</label>
<input type="text" size="30" name="eml" id="eml"> 
mdp:
<input type="password" id="mdp" name="mdp">


 <button type="submit" value="ok" >Confirmer</button>
 <button type="reset" value="nok" >Annuler</button>
 </form>
 <?php

    
	if(isset($_POST['eml'])  and isset($_POST['mdp']))
	{
		if(!empty($_POST['eml'])  and !empty($_POST['mdp']))
		{
			try
			{
				global $bdd;
				$bdd = new PDO('mysql:host=localhost;dbname=inscrire;charset=utf8', 'root', '');
				
			}
			catch (Exception $e)
			{
					die('Erreur : ' . $e->getMessage());
			}
		$sql1="select * from compte where email='".$_POST['eml']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into utilisateur(email,mdp) values('".$_POST['nom']."','".$_POST['eml']."','".$_POST['genre']."')";
				$bdd->exec($sql2);
				echo"<center>Utilisateur ".$_POST['nom']." est ajouté avec succés</center>";
			}
			else
			echo "<center>Utilisateur existe déja !!!</center>";
		} 
	}
	?>
</body>

</html>