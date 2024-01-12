
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Page Produit</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
   text-align: center;
   padding: 1em;
   background: linear-gradient(35deg ,rgba(0, 0, 0, .1),rgba(0, 0, 0, .1));
    
}

h1{
    color: brown;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 40px;
}
.catalog {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 20px;
}

.product {
    text-align: center;
    margin: 5px;
    padding: 5px;
    width: 20%; 
    
    height: 600px;/* Ajustez la largeur des produits selon vos besoins */
}

.product a {
    background-color:#ad8f8f;
    color: black;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 25px;
    text-decoration: none;

}

.product a:hover {
    background-color:brown;
    
}

img {
    width: 100%;
    height: 75%;
}

.price {
    font-weight: bold;
    color: #333;
    font-size: x-large;
}
.sale-price{
    text-decoration: line-through;
  color: #888;
  font-size: x-large;
}

h6 {
    color: #333;
    font-size: 1.6em;
}



    </style>
</head>
<body>

    <header>
        
        
        <h1>ModaFashion</h1>
        <h2>Nouvelle collection</h2>
    </header>

    <section class="catalog">
        <div class="product">
            <img src="WhatsApp Image 2023-12-21 at 23.10.58_857ff059.jpg" alt="Produit 1">
            
            <p class=" sale-price">$60.99</p>
            <p class="price">$29.99</p>
            <a href="commande.php"> acheter</a>
        </div>

        <div class="product">
            <img src="WhatsApp Image 2023-12-21 at 23.09.38_69e7d9c8.jpg" alt="Produit 2">
            
            <p class=" sale-price">$60.99</p>
            <p class="price">$39.99</p>
            <a href="commande.php"> acheter</a>
            
        </div>

        <div class="product">
            <img src="WhatsApp Image 2023-12-21 at 23.08.41_4ada47cc.jpg">
           
            <p class=" sale-price">$60.99</p>
            <p class="price">$49.99</p> 
            <a href="commande.php"> acheter</a>
        </div>

        <!-- Ajoutez d'autres produits ici -->

        <div class="product">
            <img src="WhatsApp Image 2024-01-12 at 18.46.54_328b9ceb.jpg" alt="Produit 10">
           
            <p class=" sale-price">$60.99</p>
            <p class="price">$29.99</p>
            <a href="commande.php"> acheter</a> 
        </div>

        <div class="product">
            <img src="WhatsApp Image 2023-12-21 at 23.07.10_eac5af6b.jpg" alt="Produit 11">
            
            <p class=" sale-price">$60.99</p>
            <p class="price">$39.99</p> 
            <a href="commande.php"> acheter</a>
        </div>

        <div class="product">
            <img src="WhatsApp Image 2023-12-21 at 23.06.43_9f5bba89.jpg" alt="Produit 12">
            
            <p class=" sale-price">$60.99</p>
            <p class="price">$49.99</p> 
            <a href="commande.php"> acheter</a>
        </div>

        <div class="product">
            <img src="WhatsApp Image 2023-12-21 at 23.06.11_940701ad.jpg" alt="Produit 12">
            <p class=" sale-price">$60.99</p>
            <p class="price">$49.99</p>
            <a href="commande.php"> acheter</a>
        </div>

        <div class="product">
            <img src="WhatsApp Image 2023-12-21 at 22.49.05_42e24e39.jpg" alt="Produit 12">
            <p class=" sale-price">$60.99</p>
            <p class="price">$49.99</p>
             
            <a href="commande.php"> acheter</a>
        </div>

        <div class="product">
            <img src="WhatsApp Image 2024-01-11 at 11.54.49_eca32ff8.jpg" alt="Produit 12">
            <p class=" sale-price">$60.99</p>
            <p class="price">$49.99</p>
            <a href="commande.php"> acheter</a> 
        </div>

        <div class="product">
            <img src="WhatsApp Image 2024-01-11 at 11.55.26_7185d123.jpg" alt="Produit 12">
            <p class=" sale-price">$60.99</p>
            <p class="price">$49.99</p>
            <a href="commande.php"> acheter</a> 
        </div>

        <div class="product">
            <img src="WhatsApp Image 2024-01-11 at 11.56.11_704fb3d0.jpg" alt="Produit 12">
            <p class=" sale-price">$60.99</p>
            <p class="price">$49.99</p>
            <a href="commande.php"> acheter</a> 
        </div>

        <div class="product">
            <img src="WhatsApp Image 2024-01-11 at 11.57.11_67e408ca.jpg" alt="Produit 12">
            <p class=" sale-price">$60.99</p>
            <p class="price">$49.99</p>
            <a href="commande.php"> acheter</a> 
        </div>
    
    </section>

</body>
</html>
