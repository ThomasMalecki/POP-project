<!DOCTYPE html>
<html lang="en"  data-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/employees.css">
    <title>Werknemers | website.be</title>
    <script src="js/dark-mode.js"></script>
</head>
<body>
<div class="grid-container">
        
        <?php
        $currentMessages = false;
        $currentHelp = false;
        $currentClients= false;
        $currentHome = false;
        $currentEmployees= true;
        $currentSettings = false;
        require_once "inc/nav.inc.php"; 
        ?>

        <main>
            <h1>Werknemers</h1>
            <section class="table-row row">
                <table>
                    <tr>
                        <th>Naam</th>
                        <th>Aangemeld</th>
                        <th>Rang</th>
                        <th>Acties</th>
                    </tr>
                    <?php 
                    $query=$pdo -> query("SELECT c1.companyID, c1.customerID, login, position, firstName, lastName, country, streetName, streetNumber, email FROM company_employees c1 
                    JOIN company c2 on c1.companyID = c2.companyID
                    JOIN customer c3 on c1.customerID = c3.customerID WHERE c1.companyID = $companyID");
                    $employees=$query -> fetchAll(\PDO::FETCH_ASSOC);
                    
                    foreach($employees as $employee):  ?>
                        <tr>
                            <td>
                                <div class="table-name"><p><?php echo $employee['firstName'], " ", $employee['lastName']?></p></div>
                            </td>
                            <td><?php echo $employee['login']?></td>
                            <?php if($employee['position'] == "CEO"){echo "<td><div class='ceo'>CEO</div></td>";}?>
                            <?php if($employee['position'] == "Manager"){echo "<td><div class='manager'>Manager</div></td>";}?>
                            <?php if($employee['position'] == "Employee"){echo "<td><div class='employee'>Employee</div></td>";}?>
                            <td>
                                <a href="deleteemployee.php?id=<?php echo $employee['customerID']; ?>"><span class="iconify" data-icon="bxs:trash-alt"></span></a>
                            </td>
                        </tr>
                    <?php endforeach; 
                    ?>

                    <tr>
                        <form action="insertwerknemers.php" method="post">
                        <input type="hidden" name="companyID" value="<?php echo $companyID; ?>">
                        <td><input type="text" placeholder="Klant email..." name="email" maxlength="25" required></td>
                        <td><input type="text" placeholder="<?php echo date("Y/m/d H:m:s")?>" disabled></td>
                        <td><input type="text" placeholder="CEO, Manager, Employee..." name="position" maxlength="25" required></td>
                        <td><button class="addbutton" type="submit" name="add">Toevoegen</button></td>
                        </form>
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