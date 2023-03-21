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
    <link rel="stylesheet" href="./styles/mainpage-content.css" type="text/css">
    <link rel="stylesheet" href="./styles/reservation-style.css" type="text/css">
    <title>Restaurant Le Quai Antique -Chambéry</title>
</head>
<body>
<header>
    <?php require_once './components/header.php';?>
</header>
<nav>
    <?php require_once './components/navbar.php';?>
</nav>
<div class"top-book-page">
    <h2>RESERVER UNE TABLE</h2>
</div>
<div class="reservation-container">
    <p>texte</p>
    <form method="post" action="reservationScript.php" id="resa-form">
        <label for="name" class="form_label"></label>
            <input type="text" class="text-input" placeholder="Nom :" name="name" id='name' required />
        <label for="firstname" class="form_label"></label>
        <input type="text" class="text-input" placeholder="Prénom :" name="firstname" id='firstname' required />
        <label for="resa_date" class="form_label">Quand souhaitez vous réserver ?</label>
        <input type="date" class="date-input" placeholder="Date :" name="resa_date" id='date' required />
        <p>Horaire de réservation souhaité :</p>
        <div class="time-container">
            <label for="resa_lunchtime" class="form_label">Déjeuner :
            <input type="button" class="time-input" name="resa_lunchtime" id='resa_lunchtime' required value="12h30"/>
            <input type="button" class="time-input" name="resa_lunchtime" id='resa_lunchtime' required value="13h00"/>
                <input type="button" class="time-input" name="resa_lunchtime" id='resa_lunchtime' required value="13h30"/>
            </label>
            <label for="resa_dinertime" class="form_label">Diner :
                <input type="button" class="time-input" name="resa_dinertime" id='resa_dinertime' required value="19h15"/>
                <input type="button" class="time-input" name="resa_dinertime" id='resa_dinertime' required value="19h45"/>
                <input type="button" class="time-input" name="resa_dinertime" id='resa_dinertime' required value="20h15"/>
            </label>
            <label for="customer-number" class="form-number"> Nombre de couvert :
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </label>
            <p class="resa-nbr-restriction">
                Au delà de 8 couverts, merci de contacter directetment le restaurant.
            </p>
        </div>
        <label for="comment" class="form_label">Commentaire (merci de signaler toutes allergies ou grossesse) :</label>

        <textarea id="custom-comment" name="custom-comment"
                  rows="5" cols="20" form="resa-form" placeholder="Commentez ici">
</textarea>
    </form>
</div>
<footer>
    <?php require_once './components/footer.php';?>
</footer>




</body>
</html>