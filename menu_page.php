<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="./styles/reservation-style.css" type="text/css">
    <link rel="stylesheet" href="./styles/mainpage-content.css" type="text/css">
    <link rel="stylesheet" href="./styles/menu_style.css" type="text/css">
    <title>Restaurant Le Quai Antique -Chambéry</title>
</head>
<body>
<?php
include_once './components/header.php';
include_once './components/navbar.php';
include_once './obj/MenuItems.php';
?>
<div class="top-menu-page"><h2>MENU</h2></div>
<div class="menu-container">

    <div class="menu-category">
        <h4>A partager</h4>
        <h4>Prix</h4>
    </div>
    <div class="title_price">
        <p>assiette de fromages et de charcuterie</p>
        <p>23,00</p>
        <p>eur</p>
    </div>
    <div class="menu-category">
        <h4>Entrées</h4>
        <h4>Prix</h4>
    </div>
    <div class="title_price">
        <p>Salade et copa artisanale</p>
        <p>15,00</p>
        <p>eur</p>
    </div>
    <div class="title_price">
        <p>Friture de poissons</p>
        <p>28,00</p>
        <p>eur</p>
    </div>
    <div class="menu-category">
        <h4>Plats</h4>
        <h4>Prix</h4>
    </div>
    <div class="title_price">
        <p>fondue savoyarde (beaufort emmental comté)</p>
        <p>28,00</p>
        <p>eur</p>
    </div>
    <div class="title_price">
        <p>Tartiflette</p>
        <p>28,00</p>
        <p>eur</p>
    </div>
    <div class="title_price">
        <p>Raclette</p>
        <p>28,00</p>
        <p>eur</p>
    </div>
    <div class="menu-category">
        <h4>Fromage</h4>
        <h4>Prix</h4>
    </div>
    <div class="title_price">
        <p>Assiette de fromages locaux</p>
        <p>15,00</p>
        <p>eur</p>
    </div>
    <div class="menu-category">
        <h4>Desserts</h4>
        <h4>Prix</h4>
    </div>
    <div class="title_price">
        <p>Gâteau de Savoie</p>
        <p>28,00</p>
        <p>eur</p>
    </div>
    <div class="title_price">
        <p>Rissole (poire, coing ou myrtille selon la saison)</p>
        <p>13,00</p>
        <p>eur</p>
    </div>
    <div class="title_price">
        <p>Tarte aux myrtilles (selon la saison)</p>
        <p>15,00</p>
        <p>eur</p>
    </div>
</div>
<a href="reservation.php"><button type="button" >+ Réserver</button></a>
<?php include_once './components/footer.php';?>
</body>
</html>

