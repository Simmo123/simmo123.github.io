<?php
//***objektorjenteeritud***//
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'blog';
$db_kasutaja = 'simmo';
$db_salasona = 'simmo';
//yhenduse loomine
$yhendus = new mysqli($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
// ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
?>
