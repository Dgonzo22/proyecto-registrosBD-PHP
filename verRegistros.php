<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="index.css" type="text/css">
   <script></script>
</head>
<body>
    <h1 class="bien">Registros</h1>
    <?php
    /*conexion a la base de datos de FichaTecnica*/
    $servername = "localhost";
    $database = "FichaTecnica";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("No fue posible la conexion");
    }
    $sql="SELECT * FROM usuarios";
    $resultadoConsulta =mysqli_query($conn,$sql);

    echo "<table class='tablaRegistros2'>";
    while ($registro = mysqli_fetch_assoc($resultadoConsulta)) {
        echo "<tr>";
        $idUsuarios = $registro['idUsuario'];
        $nombre = $registro['nombre'];
        $apellido = $registro['apellido'];
        $edad = $registro['edad'];
        $sexo = $registro['sexo'];
        $correo = $registro['correo'];
        $telefono = $registro['telefono'];
        $sitemaSalud = $registro['sitemaSalud'];
        $alergia = $registro['alergia'];
        $sangre = $registro['sangre'];
        $observacion = $registro['observacion'];

        echo "<td> $idUsuarios </td>";
        echo "<td> $nombre </td>";
        echo "<td> $apellido </td>";
        echo "<td> $edad </td>";
        echo "<td> $sexo </td>";
        echo "<td> $correo </td>";
        echo "<td> $telefono </td>";
        echo "<td> $sitemaSalud </td>";
        echo "<td> $alergia </td>";
        echo "<td> $sangre </td>";
        echo "<td> $observacion </td>";
        echo "<td>  <button class='btn'>Editar </button> <td>";
        echo "<td>  <button class='btn'> Eliminar</button><td>";
        echo "</tr>";
    }
    echo "</table class='tablaRegistros'>";
    ?>
    <div class="listBtn">
           
            
           <a class="btn" href="index.html"> Nuevo</a>
           <a class="btn" href="index.html"> Modificar</a>
           <a class="btn" href="index.html"> Eliminar</a>
        </div>
</body>
</html>