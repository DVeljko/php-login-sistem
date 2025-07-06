<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){
    echo "Dobrodosli na stranicu, uspesno ste ulogovani!";
}else {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    
</body>
</html>

