<?php
require "classes/classDB.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_STRICT);


/*
 * Guide
 * I den første del af if sætningen er databasen defineret for local brug på din computer
 * Her er sat standard brugernavn og password som kan ændres i _docker/.env (det skal kun rettes hvis du ikke vil bruge standard)
 * $DB_NAME skal rettes til det din database for dette projekt hedder. Databasen er den du opretter i PHPMyAdmin
 * Til at starte med er der lavet en standard database: webshop medc en tabel: produkter som benyttes i undervisningen og gør at index.php virker
 *
 * I den anden del af if sætningen (else) sætter du dine oplysninger til webhotellet f.eks. Simply.com
 * Inden du uploader denne fil til webhotellet retter du define("CONFIG_LIVE", "0"); til define("CONFIG_LIVE", "1"); så bruges det i else
 * Når filen er uploadet retter du igen til define("CONFIG_LIVE", "0"); så det virker lokalt igen
 * På den måde kan du både have lokale oplysninger og webhotel oplysninger liggende
 */
define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "mariadb-standard";
    $DB_NAME = "webshop";
    $DB_USER = "user";
    $DB_PASS = "secretPassword";
}else{
    $DB_SERVER = "";
    $DB_NAME = "";
    $DB_USER = "";
    $DB_PASS = "";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
