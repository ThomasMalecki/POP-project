<!DOCTYPE html>
<html lang="en" data-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Home | website.be</title>
    <script src="js/dark-mode.js"></script>
</head>
<body>
    <div class="grid-container">
        
       <?php 
        $currentMessages = false;
        $currentHelp = false;
        $currentClients= false;
        $currentHome = true;
        $currentEmployees= false;
        $currentSettings = false;
       require_once "inc/nav.inc.php"; 
       ?>

        <main>
            <h1>Homepagina</h1>
            <section class="first-row row">
                <div class="col">
                    <div class="svg"></div>
                    <div class="numbers">
                        <p>Totale Omzet</p>
                        <p>$424,652k</p>
                    </div>
                </div>
                <div class="col">
                    <div class="svg"></div>
                    <div class="numbers">
                        <p>Werknemers</p>
                        <?php 
                        $query=$pdo -> query("SELECT * from company_employees WHERE companyID = $companyID");
                        $customers = $query->rowCount();
                        ?>
                        <p><?php echo $customers?></p>
                    </div>
                </div>
                <div class="col">
                    <div class="svg"></div>
                    <div class="numbers">
                        <p>Klanten</p>
                        <?php 
                        $query=$pdo -> query("SELECT * from clients");
                        $customers = $query->rowCount();
                        ?>
                        <p><?php echo $customers?></p>
                    </div>
                </div>
                <div class="col">
                    <div class="svg"></div>
                    <div class="numbers">
                        <p>Loyaliteit</p>
                        <?php 
                        $query=$pdo -> query("SELECT * from clients where active = 1");
                        $active = $query->rowCount();
                        $query=$pdo -> query("SELECT * from clients");
                        $allclient= $query->rowCount();
                        $precent =  $active / $allclient * 100;
                        ?>
                        <p><?php echo round($precent,0),'%';?></p>
                    </div>
                </div>
            </section>

            <section class="second-row row">
                <div class="col">
                    <div id="spark1"></div>
                </div>
                <div class="col">
                    <h2>Activiteit</h2>
                    <div class="activitiy-wrapper">
                        <div class="activity"> 
                        <?php
                            $query=$pdo -> query("SELECT a.activityID, a.customerID, a.companyID, a.message,c.firstName,c.lastName, e.position, a.date FROM companymanager.activity a
                            JOIN customer c on a.customerID = c.customerID 
                            JOIN company_employees e on a.customerID = e.customerID WHERE a.companyID = $companyID");
                            $activities=$query -> fetchAll(\PDO::FETCH_ASSOC);
                        foreach($activities as $activity):  ?>
                        <p><span class="date"><?php echo substr($activity['date'], 0, 10)?> - </span> <?php if($activity['position'] == "CEO"){echo "<span class='ceo'>";} if($activity['position'] == "Manager"){echo "<span class='manager'>";} if($activity['position'] == "Employee"){echo "<span class='employee'>";}?><?php echo $activity["firstName"], " ",$activity["lastName"]?></span> <?php echo $activity["message"] ?></p>
                    <?php endforeach; ?>
                   
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </div>

    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/charts.js"></script>
</body>
</html>  