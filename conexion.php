<?php
    //Variables
    $hostDB = 'localhost';
    $nombreDB = 'agenda';
    $usuarioDB = 'root';
    $contrasenyaDB = 'admin';

    //Conecta con base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

   
?>





