<?php
require "classes/classDB.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

/*
 * Guide
 * define("CONFIG_LIVE", "0"); kan skiftes til f.eks. define("CONFIG_LIVE", "1"); for at ændre til live
 *
 * CONFIG_LIVE == 0
 * I den første del af if-sætningen er databasen defineret for local brug på din computer med docker
 * Her er standard brugernavn user og adgangskoden er password.
 *
 * CONFIG_LIVE == 1
 * Her sætter du dine oplysninger til webhotellet f.eks. Simply.com
 * Inden du uploader denne fil til webhotellet retter du define("CONFIG_LIVE", "0"); til define("CONFIG_LIVE", "1"); så den vælger de korrekte oplysninger
 * Når filen er uploadet retter du igen til define("CONFIG_LIVE", "0"); så det virker lokalt igen
 * På den måde kan du både have lokale oplysninger og webhotel oplysninger liggende
 *
 * GENERELT
 * $DB_NAME skal rettes til det din database for dette projekt hedder. Databasen er den du opretter i PHPMyAdmin
 */


/*
!! Hvis du bruger WAMP eller MAMP !!
Brug nedenstående variabler der hvor CONFIG_LIVE == 0

$DB_SERVER = "localhost";
$DB_NAME = "test";
$DB_USER = "root";
$DB_PASS = "";
*/

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0) {
    $DB_SERVER = "mariadb";
    $DB_NAME = "webshop";
    $DB_USER = "user";
    $DB_PASS = "password";
} else if(CONFIG_LIVE == 1) {
    $DB_SERVER = "";
    $DB_NAME = "";
    $DB_USER = "";
    $DB_PASS = "";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
