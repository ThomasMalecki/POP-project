<?php
session_start();
require("inc/sql-link.inc.php");

if(!empty($_SESSION['Customer']))
{ 
?>
    <script type="text/javascript">
        window.location.href = 'home.php';
    </script>
<?php
} 
$error=""; 

if (isset($_POST['login']))
{
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    //$password = md5($password);
    $email = strtolower($email);
    $query=$pdo -> query("SELECT * FROM customer WHERE email='$email'");
    $customer=$query -> fetch();
    $customerID = $customer["customerID"];
    if(isset($customer['email'])){
        if($customer['email']==$email&&$customer['password']==$password){
            $_SESSION['Customer']=$_POST['email'];
            header("location: home.php");
            $query = "UPDATE company_employees SET login = current_timestamp() WHERE customerID='$customerID'";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }
    }
    else{
        $error = "Email of wachtwoord verkeerd";
    }
}

?>
    

<!DOCTYPE html>
<html lang="en"  data-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Toby | Admin Login</title>
    <script src="js/dark-mode.js"></script>
</head>

<body>
    <div class="bg">
        <div class="login">
            <div class="logo">
                <h1><span class="iconify" data-icon="carbon:logo-stumbleupon"></span><span class="name-company">Panel</span></h1>
            </div>
            <form method="post">
                <p><input placeholder="Gebruikersnaam" type="text" name="email" required></p>
                <p><input placeholder="Wachtwoord" type="password" name="password" required></p>
                <p><button type="submit" name="login" value="Login">Aanmelden</button></p>
                <p style='color:red; font-weight:400; padding-bottom:20px;'><?php echo $error;?></p>
                <p class="rights">&copy; <?php echo date("Y")?> Alle rechten voorbehouden</p>
            </form>
        </div>
    </div>

    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</body>
</html>