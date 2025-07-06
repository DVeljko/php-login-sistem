<?php

$baza = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if(!$baza){
    die("Niste se povezali!");
}