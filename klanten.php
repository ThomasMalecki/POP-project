<!DOCTYPE html>
<html lang="en" data-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/klanten.css">
    <title>Klantenbestand | website.be</title>
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
            <h1>Klantenbestand</h1>
            <section class="table-row row">
                <table>
                    <tr>
                        <th>Naam</th>
                        <th>Toegevoegd</th>
                        <th>Status</th>
                        <th>Acties</th>
                    </tr>
                    <?php 
                    $query=$pdo -> query("SELECT * FROM clients");
                    $clients=$query -> fetchAll(\PDO::FETCH_ASSOC);
                    
                    foreach($clients as $client):  ?>
                        <tr>
                        <td>
                            <div class="table-name"><p><?php echo $client['firstName'], " ", $client['lastName']?></p></div>
                        </td>
                        <td><?php echo substr($client['date'], 0, 10);?></td>
                        <?php if($client['active'] == 1){echo "<td><div class='not-active'>Niet actief</div></td>";}?>
                        <?php if($client['active'] == 0){echo "<td><div class='active'>Actief</div></td>";}?>
                        <td><a href="klantenbewerken.php?id=<?php echo $client['clientID']; ?>"><span class="iconify" data-icon="fa-solid:pen"></span></a></td>
                    </tr>
                        <?php endforeach; ?>
                    <tr>
                        <td class="addbutton"  colspan="4"><a class="addbutton" href="klantentoevoegen.php">Voeg een klant toe</a></td>
                    </tr>
                    
                </table>
            </section>
        </main>
    </div>

    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/charts.js"></script>
</body>
</html>  