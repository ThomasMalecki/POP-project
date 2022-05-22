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
    $firstName=htmlspecialchars($_POST['firstName']);
    $lastName=htmlspecialchars($_POST['lastName']);
    $country=htmlspecialchars($_POST['country']);
    $streetName=htmlspecialchars($_POST['streetName']);
    $streetNumber=htmlspecialchars($_POST['streetNumber']);
    $companyID=htmlspecialchars($_POST['companyID']);
    $customerID=htmlspecialchars($_POST['customerID']);
    $email=htmlspecialchars($_POST['email']);
    $description=$_POST['description'];
    $actief=htmlspecialchars($_POST['actief']);	if(!$actief)$actief=0;
    echo "test";
    $query = "INSERT INTO clients (firstName, lastName, country, streetName, streetNumber, email, description, active, companyID) 
    VALUES ('$firstName', '$lastName', '$country', '$streetName', '$streetNumber', '$email', '$description', '$actief','$companyID')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $query = "INSERT INTO activity (customerID, message, companyID) 
    VALUES ('$customerID', 'heeft een nieuwe klant toegevoegd', '$companyID')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
?>
    <script type="text/javascript">
        window.location.href = 'klanten.php';
    </script>