<?php 
session_start();
if(empty($_SESSION['Customer']))
{ 
?>
    <script type="text/javascript">
    window.location.href = 'login.php';
    </script>
<?php

} ?>
<?php 
require("inc/sql-link.inc.php");

if(isset($_POST['add'])){
    $companyID=htmlspecialchars($_POST['companyID']);
    $email=htmlspecialchars($_POST['email']);
    $position=htmlspecialchars($_POST['position']);
    $email=htmlspecialchars($_POST['email']);

    $email = strtolower($email);
    $query=$pdo -> query("SELECT * FROM customer WHERE email='$email'");
    $customer=$query -> fetch();
    $customerID = $customer["customerID"];
    
    $query = "INSERT INTO company_employees (companyID, customerID, login, position) 
    VALUES ('$companyID','$customerID',current_timestamp(),'$position')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $query = "UPDATE customer SET companyID='$companyID' where customerID='$customerID'";
	$stmt = $pdo->prepare($query);
	$stmt->execute();
}
?>
    <script type="text/javascript">
        window.location.href = 'werknemers.php';
    </script>