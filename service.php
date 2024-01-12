<html>
    <head>
    <title>un site web</title>
    <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}

header h1 {
    margin: 0;
}


 

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}
    </style>
</head>
<body>
    <script src="script.js"></script>
    <header>
        <h1>Catalogue de Vêtements Femme</h1>
    </header>
    
    <center><h3>BACK OFFICE</h3>
        <h3>Page protegée par mot de passe</h3>
        <h5>Veuillez saisir votre Login et mot de passe</h5>
        <form action="index.php" method="POST" name="autentification">
        <table border="1" bgcolor="pink">
        <tr><td>Login:</td><td><input type="text" name="login"></td></tr>
        <tr><td>Pass:</td><td><input type="password" name="pass"></td></tr>
        </table>
        <input type="submit" value="Envoyer"> &nbsp; &nbsp;<input type="reset" value="Effacer">
        </form>
        </center>
    
    <footer>
        <p>Contactez-nous pour plus d'informations.</p>
    </footer>
    <?php
    include('fonctions.php');
    if(isset($_POST['login']) and isset($_POST['pass']))
    {
        if($_POST['login']=='admin' and $_POST['pass']=='admin')
                 header( "location: GestionProduits.php");
        else
        {
        
            echo "<center> Mot de passe incorrect</center>";
        }
    }
    ?>
</body>
</html>