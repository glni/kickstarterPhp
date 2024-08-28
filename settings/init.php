<?php
require "classes/classDB.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_STRICT);

/*
 * Guide
 * define("CONFIG_LIVE", "0"); kan skiftes til f.eks. define("CONFIG_LIVE", "1"); for at ændre til live eller define("CONFIG_LIVE", "2"); til docker
 *
 * CONFIG_LIVE == 0
 * I den første del af if sætningen er databasen defineret for local brug på din computer med WAMP eller MAMP
 * Her er standard brugernavn root og password ingenting. MAC skal som regel ændre password ($DB_PASS) til også at være root
 *
 * CONFIG_LIVE == 1
 * Her sætter du dine oplysninger til webhotellet f.eks. Simply.com
 * Inden du uploader denne fil til webhotellet retter du define("CONFIG_LIVE", "0"); til define("CONFIG_LIVE", "1"); så den vælger de korrekte oplysninger
 * Når filen er uploadet retter du igen til define("CONFIG_LIVE", "0"); ved WAMP/MAMP eller define("CONFIG_LIVE", "2"); ved docker så det virker lokalt igen
 * På den måde kan du både have lokale oplysninger og webhotel oplysninger liggende
 *
 * CONFIG_LIVE == 2
 * Denne er lavet så man kan bruge Docker
 * Her er sat standard brugernavn og password som kan ændres i _docker/.env (det skal kun rettes hvis du ikke vil bruge standard)
 * I Docker er der til at starte med lavet en standard database: webshop med en tabel: produkter som benyttes i undervisningen og gør at index.php virker
 *
 * GENERELT
 * $DB_NAME skal rettes til det din database for dette projekt hedder. Databasen er den du opretter i PHPMyAdmin
 *
 */
define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment || 2: Docker

if(CONFIG_LIVE == 0) {
    $DB_SERVER = "localhost";
    $DB_NAME = "test";
    $DB_USER = "root";
    $DB_PASS = "";
} else if(CONFIG_LIVE == 1) {
    $DB_SERVER = "";
    $DB_NAME = "";
    $DB_USER = "";
    $DB_PASS = "";
} else if(CONFIG_LIVE == 2) {
    $DB_SERVER = "mariadb-standard";
    $DB_NAME = "webshop";
    $DB_USER = "user";
    $DB_PASS = "secretPassword";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
