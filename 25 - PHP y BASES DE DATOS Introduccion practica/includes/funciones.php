<?php

function obtenerServicios(): array
{
    try {
        // Importar una conexión
        require 'database.php';

        // Escribir el código SQL
        $sql = "SELECT * FROM servicios";
        // Obtener los resultados
        $consulta = mysqli_query($db, $sql);

        //areglo vacio
        $servicios = [];

        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) {

            $servicios[] = [
                'id' => $row['id'],
                'nombre' => $row['nombre'],
                'precio' => $row['precio']
            ];
        }

        /*         echo "<pre>";
        var_dump(($servicios));
        echo "</pre>"; */
        return $servicios;
    } catch (\Throwable $th) {
        var_dump($th);
        return []; // <-- Esto soluciona el problema
    }
}

obtenerServicios();
