<!DOCTYPE html>
<html lang="en"  data-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Instellingen | website.be</title>
    <script src="js/dark-mode.js"></script>
</head>
<body>
<div class="grid-container">
        
        <?php 
        $currentMessages = false;
        $currentHelp = false;
        $currentClients= false;
        $currentHome = false;
        $currentEmployees= false;
        $currentSettings = true;
        require_once "inc/nav.inc.php"; 
        ?>

        <main>
            <h1>Instellingen</h1>
        </main>

    </div>

    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/charts.js"></script>
</body>
</html>