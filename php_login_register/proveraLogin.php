<?php

require_once "baza.php";

if(!isset($_POST['email']) || empty($_POST['email'])){
    die("Niste uneli email!");
}

if(!isset($_POST['password']) || empty($_POST['password'])){
    die("Niste uneli sifru!");
}

$email = $_POST['email'];
$password = $_POST['password'];

$rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email' AND sifra = '$password' ");

if($rezultat->num_rows == 1){

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $_SESSION['is_logged_in'] = true;
    header("Location: pocetna.php");
    exit;


}else {
    echo "Pogresan email ili sifra!";
    header("Location: login.php");
}
