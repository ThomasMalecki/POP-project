<?php
   session_start();
   unset($_SESSION["Customer"]);
   
   header('Refresh: 2; URL = login.php');
?>
<!DOCTYPE html>
<html lang="en" data-theme='light'>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/logout.css">
   <title>Logging out</title>
   <script src="js/dark-mode.js"></script>
</head>
<body>
   <div class="logout-loader-wrapper">
      <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
      <h1>Logging out</h1>
   </div>
</body>
</html>