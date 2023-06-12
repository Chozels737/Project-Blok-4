<?php

$voornaam =         $_POST['voornaam'];
$tussenvoegsel =    $_POST['tussenvoegsel'];
$achternaam =       $_POST['achternaam'];
$geslacht =         $_POST['geslacht'];
$email =            $_POST['email'];
$gebruikersnaam =   $_POST['gebruikersnaam'];
$paswoord =         $_POST['paswoord'];
$straat =           $_POST['straat'];
$huisnummer =       $_POST['huisnummer'];
$postcode =         $_POST['postcode'];
$plaats =           $_POST['plaats'];
$land =             $_POST['land'];
$mobielnummer =     $_POST['mobielnummer'];
$rol =              $_POST['rol'];
$indienst =         $_POST['indienst'];
$perwanneer  =      $_POST['perwanneer'];
$afdeling =         $_POST['afdeling'];
$aantalmensen =     $_POST['aantalmensen'];
$ID =               $_POST['ID'];

require "database.php"; 

//eerst record toevoegen aan juiste tabel // admin. regular, manager
//$id = mysqli_insert_id($conn);

if ($rol == "admin") {
    $sql = "INSERT INTO admin (indienst)
    VALUES('$indienst')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, paswoord, straat, huisnummer, postcode, plaats, land, mobielnummer, adminID) 

    VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$geslacht', '$email', '$gebruikersnaam', '$paswoord', '$straat', '$huisnummer', '$postcode', '$plaats', '$land', '$mobielnummer', '$ID')";
    mysqli_query($conn, $sql);

}

    elseif ($rol == "regular") {
    $sql = "INSERT INTO regular (perwanneer)
    VALUES('$perwanneer')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, paswoord, straat, huisnummer, postcode, plaats, land, mobielnummer, regularID) 

    VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$geslacht', '$email', '$gebruikersnaam', '$paswoord', '$straat', '$huisnummer', '$postcode', '$plaats', '$land', '$mobielnummer', '$ID')";
    mysqli_query($conn, $sql);
}
    elseif ($rol == "manager") {
    $sql = "INSERT INTO manager (afdeling, aantalmensen)
    VALUES('$afdeling','$aantalmensen')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, paswoord, straat, huisnummer, postcode, plaats, land, mobielnummer, afdeling, aantalmensen,  managerID) 

    VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$geslacht', '$email', '$gebruikersnaam', '$paswoord', '$straat', '$huisnummer', '$postcode', '$plaats', '$land', '$mobielnummer', '$ID' '$aantalmensen' '$aantalmensen')";
    mysqli_query($conn, $sql);
}

if (mysqli_query($conn, $sql))
{
    header("location: index.php");
}