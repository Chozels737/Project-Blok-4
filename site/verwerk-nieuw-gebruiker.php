<?php

$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$geslacht = $_POST['geslacht'];
$email = $_POST['email'];
$gebruikersnaam = $_POST['gebruikersnaam'];
$paswoord = $_POST['paswoord'];
$straat = $_POST['straat'];
$huisnummer = $_POST['huisnummer'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];
$land = $_POST['land'];
$mobielnummer = $_POST['mobielnummer'];
$rol = $_POST['rol'];

$hashed_password = password_hash($paswoord, PASSWORD_DEFAULT);

require "database.php"; 


//eerst record toevoegen aan juiste tabel // admin. regular, manager
//$id = mysqli_insert_id($conn);


if ($rol == "admin")
    $sql = "INSERT INTO admin (in dienst)
    VALUES('$indienst')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, paswoord, straat, huisnummer, postcode, plaats, land, mobielnummer, adminID) 

    VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$geslacht', '$email', '$gebruikersnaam', '$paswoord', '$straat', '$huisnummer', '$postcode', '$plaats', '$land', '$mobielnummer', '$ID')";
    mysqli_query($conn, $sql);

    if ($rol == "regular")
    $sql = "INSERT INTO regular (per wanneer)
    VALUES('$indienst')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, paswoord, straat, huisnummer, postcode, plaats, land, mobielnummer, regularID) 

    VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$geslacht', '$email', '$gebruikersnaam', '$paswoord', '$straat', '$huisnummer', '$postcode', '$plaats', '$land', '$mobielnummer', '$ID')";
    mysqli_query($conn, $sql);

    if ($rol == "manager")
    $sql = "INSERT INTO manager (aantalmensen)
    VALUES('$indienst')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, paswoord, straat, huisnummer, postcode, plaats, land, mobielnummer, managerID) 

    VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$geslacht', '$email', '$gebruikersnaam', '$paswoord', '$straat', '$huisnummer', '$postcode', '$plaats', '$land', '$mobielnummer', '$ID')";
    mysqli_query($conn, $sql);






if (mysqli_query($conn, $sql))
{
    header("location: index.php");
}