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
$email = $_SESSION['Customer'];
$query=$pdo -> query("SELECT * FROM customer where email = '$email'");
$customer=$query -> fetch();
$customerID = $customer['customerID'];
$companyID = $customer['companyID'];
?>

<nav>
    <div class="logo">
        <h1><span class="iconify" data-icon="carbon:logo-stumbleupon"></span><span class="name-company">Panel</span></h1>
    </div>
    <div class="buttons">
        <ul>
            <li>
                <a <?php if($currentHome == true)echo "class='current'"; ?> href="home.php">
                    <span class="iconify" data-icon="fluent:home-24-filled" data-width="24" data-height="24"></span>
                    <span class="name-link">Home</span>
                </a>
            </li>
            <li>
                <a <?php if($currentClients == true)echo "class='current'"?> href="klanten.php">
                    <span class="iconify" data-icon="bi:people-fill" data-width="24" data-height="24"></span>
                    <span class="name-link">Klanten</span>
                </a>
            </li>
            <li>
                <a <?php if($currentMessages == true)echo "class='current'"?> href="berichten.php">
                    <span class="iconify" data-icon="mdi:android-messages" data-width="24" data-height="24"></span>
                    <span class="name-link">Berichten</span>
                </a>
            </li>
            <li>
                <a <?php if($currentEmployees == true)echo "class='current'"?> href="werknemers.php">
                    <span class="iconify" data-icon="ic:baseline-account-circle" data-width="24" data-height="24"></span>
                    <span class="name-link">Werknemers</span>
                </a>
            </li>
            <li>
                <a <?php if($currentSettings == true)echo "class='current'"?>href="instellingen.php">
                    <span class="iconify" data-icon="ci:settings-filled" data-width="24" data-height="24"></span>
                    <span class="name-link">Instellingen</span>
                </a>
            </li>
            <li>
                <a <?php if($currentHelp == true)echo "class='current'"?>href="help.php">
                    <span class="iconify" data-icon="bx:bxs-help-circle" data-width="24" data-height="24"></span>
                    <span class="name-link">Help</span>
                </a>
            </li>
        </ul>
    </div> 
</nav>
<header>
    <button type="button" class="color-switcher" onclick="themeToggle()"><span class="iconify" data-icon="codicon:color-mode" data-width="24" data-height="24"></span></button>
    <button class="notifications" onclick="myFunction()"><span class="iconify" data-icon="bx:bxs-bell" data-width="24" data-height="24"></span><span class="notification-count">1</span></button>
    <div class="user">
        <a class="userdropbtn"><img src="img/user-placeholder.png" height="40" width="40" alt=""><p>Good afternoon<br><span><?php echo $customer['firstName'], " ",$customer['lastName'];?></span></p></a>
        <div class="userdropdown-content">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</header>