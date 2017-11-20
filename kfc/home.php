
<?php
session_start();
?>
<html>
<head>
 </head>
<body>
   <h1><?php  echo $_SESSION['username']; ?>WELCOME TO HOME PAGE</h1>
    <a href="logout.php">logout</a>
    
    </body>
</html>