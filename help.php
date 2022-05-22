<!DOCTYPE html>
<html lang="en"  data-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/help.css">
    <title>Help | website.be</title>
    <script src="js/dark-mode.js"></script>
</head>
<body>
    <div class="grid-container">
        
        <?php 
        $currentMessages = false;
        $currentHelp = true;
        $currentClients= false;
        $currentHome = false;
        $currentEmployees= false;
        $currentSettings = false;
        require_once "inc/nav.inc.php"; 
        ?>
        <main>
            <h1>Berichten</h1>
            <section class="first-row row">
            <div class="col">
            <h2>1. Lorem ipsum dolor sit, amet consectetur adipisicing elit. </h2>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, corporis a dolor magnam fugit nobis! Perferendis maiores nostrum autem.</p>
            <h2>2. Lorem ipsum dolor sit, amet consectetur adipisicing elit. </h2>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, corporis a dolor magnam fugit nobis! Perferendis maiores nostrum autem.</p>
            <h2>3. Lorem ipsum dolor sit, amet consectetur adipisicing elit. </h2>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, corporis a dolor magnam fugit nobis! Perferendis maiores nostrum autem.</p>
            <h2>4. Lorem ipsum dolor sit, amet consectetur adipisicing elit. </h2>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, corporis a dolor magnam fugit nobis! Perferendis maiores nostrum autem.</p>
            </div>    
        </section>
        </main>

    </div>
    
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/charts.js"></script>
</body>
</html>