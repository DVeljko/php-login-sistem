<?php

if(!isset($_POST['email']) || empty($_POST['email'])){
    die("Niste uneli email!");
}

if(!isset($_POST['password']) || empty($_POST['password'])){
    die("Niste uneli lozinku!");
}

if(!isset($_POST['proveraPassword']) || empty($_POST['proveraPassword'])){
    die("Niste uneli potvrdjenu lozinku!");
}

$email = $_POST['email'];
$password = $_POST['password'];
$proveraPassword = $_POST['proveraPassword'];

if($password !== $proveraPassword){
    die("Lozinke se ne poklapaju!");
}

require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM korisnici");
$rezultatASSOC = $rezultat->fetch_all(MYSQLI_ASSOC);

foreach($rezultatASSOC as $korisnik){
    if($korisnik['email'] == $email){
        die("Korisnik sa ovim emailom vec postoji");
    }
}

$baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$password') " );
header("Location: login.php");
exit;

