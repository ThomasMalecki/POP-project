<!DOCTYPE html>
<html lang="en" data-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/klanten.css">
    <title>Klantentoevoegen | website.be</title>
    <script src="js/dark-mode.js"></script>
</head>
<body>
    <div class="grid-container">
        
        <?php
        $currentMessages = false;
        $currentHelp = false;
        $currentClients= true;
        $currentHome = false;
        $currentEmployees= false;
        $currentSettings = false;
        require_once "inc/nav.inc.php";
        ?>
        <main>
            <h1>Klanten toevoegen</h1>
            <section class="table-row row">
            <form action="insertklanten.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="companyID" value="<?php echo $companyID; ?>">
                <input type="hidden" name="customerID" value="<?php echo $customerID; ?>">
                <label> Voornaam:<input type="text" placeholder="Voornaam..." name="firstName" maxlength="25" required></label>
                <label> Achternaam:<input type="text" placeholder="Achternaam..." name="lastName" maxlength="25" required></label>
                <label> Land: <input type="text" placeholder="Land..." name="country" required></label>

                <label> Straatnaam: <input type="text" placeholder="Straatnaam..." autocomplete="off" name="streetName" maxlength="25" required></label>

                <label> Huisnummer: <input type="text" placeholder="Huisnummer..." autocomplete="off" name="streetNumber" maxlength="5" required></label>
                <label> E-mail: <input type="text" placeholder="email..." name="email" maxlength="50" required></label>
                <label> Beschrijving: <textarea style="height:70px;" placeholder="Beschrijving.." name="description" maxlength="25"></textarea></label>
                <p>Actief: <input type="checkbox" name="actief" value="1"></p>
                <button class="addbutton" type="submit" name="add">Toevoegen</button>
                </form>
            </section>
        </main>
    </div>

    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/charts.js"></script>
</body>
</html>  