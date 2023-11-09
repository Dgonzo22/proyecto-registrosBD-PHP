<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="index.css" type="text/css">
   <script></script>
</head>
<body>

<?php 

if (
    isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
    isset($_POST["apellido"]) && !empty($_POST["apellido"]) &&
    isset($_POST["edad"]) && !empty($_POST["edad"]) &&
    isset($_POST["sexo"]) && !empty($_POST["sexo"]) &&
    isset($_POST["correo"]) && !empty($_POST["correo"]) &&
    isset($_POST["telefono"]) && !empty($_POST["telefono"]) &&
    isset($_POST["sistemaSalud"]) && !empty($_POST["sistemaSalud"]) &&
    isset($_POST["alergia"]) && !empty($_POST["alergia"]) &&
    isset($_POST["Sangre"]) && !empty($_POST["Sangre"]) &&
    isset($_POST["Observaciones"])
) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $sistemaSalud = $_POST['sistemaSalud'];
    $alergia = $_POST['alergia'];
    $Sangre = $_POST['Sangre'];
    $Observaciones = $_POST['Observaciones'];
} else {
    die("<h3 class='mal'>Todos los campos son obligatorios </h3>");
}
/*conexion a la base de datos de FichaTecnica*/
$servername = "localhost";
$database = "FichaTecnica";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("No fue posible la conexion");
}

$sql = "
insert into usuarios
    (nombre, apellido, edad, sexo, correo, telefono, sitemaSalud, alergia, sangre, observacion)
values
    ('$nombre','$apellido',$edad,'$sexo','$correo',$telefono,'$sistemaSalud','$alergia','$Sangre','$Observaciones')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 class='bien'> Registro con exito </h3>";
} else {
    echo "Error con la consulta: " . $sql . "<br>" . mysqli_error($conn);
}
echo "
<table class='tablaRegistros'>
    <tr>
        <td>Nombre</td>
        <td>$nombre</td>
    </tr>
    <tr>
        <td>apellido</td>
        <td>$apellido</td>
    </tr>
    <tr>
        <td>edad</td>
        <td>$sexo</td>
    </tr>
    <tr>
        <td>correo</td>
        <td>$correo</td>
    </tr>
    <tr>
        <td>telefono</td>
        <td>$telefono</td>
    </tr>
    <tr>
        <td>sistemaSalud</td>
        <td>$sistemaSalud</td>
    </tr>
    <tr>
        <td>alergia</td>
        <td>$alergia</td>
    </tr>
    <tr>
        <td>Sangre</td>
        <td>$Sangre</td>
    </tr>
    <tr>
        <td>Observaciones</td>
        <td>$Observaciones</td>
    </tr>
</table>

";

?>

</body>
</html>