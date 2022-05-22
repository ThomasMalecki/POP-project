<?php
session_start();
require("inc/sql-link.inc.php");
if(empty($_SESSION['Customer']))
{ 
?>
    <script type="text/javascript">
        window.location.href = 'login.php';
    </script>
<?php
}

if(isset($_GET['id'])){
    $customerID=htmlspecialchars($_GET['id']);
    
    $query = "UPDATE customer SET companyID = '0' where customerID='$customerID'";
	$stmt = $pdo->prepare($query);
	$stmt->execute();

    $query="DELETE FROM company_employees WHERE customerID='$customerID'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
?>
    <script type="text/javascript">
        window.location.href = 'werknemers.php';
    </script>