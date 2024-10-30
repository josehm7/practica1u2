<?php
    $servername = "sql101.infinityfree.com"; 
    $username = "if0_37433674"; //Aquí tienes que poner tu usuario        
    $password = "q0XkSDtiWCUKDTa"; //Aquí tienes que poner tu pass            
    $dbname = "if0_37433674_Prueba"; //Aquí tienes que poner el nombre de tu BD      

    // Crear conexión con la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sql = "INSERT INTO Persona (nombre, edad) VALUES ('$nombre', '$edad')";

        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
?>