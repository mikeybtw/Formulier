<?php
include "Connection.php";
$user= $_POST ['gebruikersnaam'];

$stmt = $conn->prepare(
    "SELECT gebruikersnaam,wachtwoord FROM users WHERE gebruikersnaam='$user'");
