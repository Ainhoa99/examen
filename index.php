<?php
include_once "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Agenda-AinhoaLopez</title>
    </head>

    <body>
        <table>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>DIRECCIÓN</th>
                <th>CP</th>
                <th>TLF FIJO</th>
                <th>MOVIL</th>
                <th>TIPO</th>
                <th>DETALLES</th>
            </tr>
            <?php
                //Consulta
                $consulta = $miPDO ->prepare("SELECT * FROM contactos");
                $consulta ->execute();
                $respuesta = $consulta ->fetchAll();
                foreach($respuesta as $posicion =>$contacto){
                    echo "<tr>";
                        echo "<td>" . $contacto['nombre'] . "</td>";
                        echo "<td>" . $contacto['apellidos'] . "</td>";
                        echo "<td>" . $contacto['direccion'] . "</td>";
                        echo "<td>" . $contacto['cp'] . "</td>";
                        echo "<td>" . $contacto['fijo'] . "</td>";
                        echo "<td>" . $contacto['movil'] . "</td>";
                        echo "<td>" . $contacto['tipo'] . "</td>";
                        echo "<td>" . $contacto['detalle'] . "</td>";
                    echo "</tr>";
                }
                ?>
                </table>
                <table>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>DIRECCIÓN</th>
                <th>CP</th>
                <th>TLF FIJO</th>
                <th>MOVIL</th>
                <th>TIPO</th>
                <th>DETALLES</th>
            </tr>
            <?php

                    //Consulta
                $consulta = $miPDO ->prepare("SELECT * FROM contactos WHERE cp = 48010");
                $consulta ->execute();
                $respuesta = $consulta ->fetchAll();
                foreach($respuesta as $posicion =>$contacto){
                    echo "<tr>";
                        echo "<td>" . $contacto['nombre'] . "</td>";
                        echo "<td>" . $contacto['apellidos'] . "</td>";
                        echo "<td>" . $contacto['direccion'] . "</td>";
                        echo "<td>" . $contacto['cp'] . "</td>";
                        echo "<td>" . $contacto['fijo'] . "</td>";
                        echo "<td>" . $contacto['movil'] . "</td>";
                        echo "<td>" . $contacto['tipo'] . "</td>";
                        echo "<td>" . $contacto['detalle'] . "</td>";
                    echo "</tr>";
                }
               
            ?>
        </table>
    
    </body>
</html>