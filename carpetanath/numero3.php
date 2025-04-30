<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi pagina</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/dimitri" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/flagmen" rel="stylesheet">
                
    
    
<body>
<nav class="navbar navbar-light" style="background: linear-gradient(#ca0000bb, rgb(228, 16, 133),rgb(255, 72, 224))">
        <div class="container" style="font-family: 'Feltpen', sans-serif;">
            <a class="navbar-brand" href="index.html" style="color: white; ">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/haikyuu/monce01.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce02.php">Mostrar datos 2</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce03.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/haikyuu/monce04.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce05.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce06.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/haikyuu/monce07.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce08.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce09.php">Meter datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce10.php">Meter datos</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center; font-family: 'Flagmen', sans-serif;">Mostrar Datos</h1>
        <style>
            h1 {
                
                text-align: center;
                color: #000;
                margin-bottom: 20px;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(158, 8, 151);
            }
            
            tr:nth-child(even) {
                background-color: rgb(247, 92, 221);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(255, 64, 214);
                color: white;
            }

        
        </style>
       <style>
            .container1{
                width:50%;
                background-color:#282a36;
                padding:20px;
                border-radius:10px;
                box-shadow: 0 0 10px;
                color:white;
            }
            h1{
                text-align:center;
                color:#ff79c6;
                margin-bottom:15px;
            }
            form{
                flex-direction:column;
            }
            label{
                font-size:16px;
                margin-bottom:5px;
            }
            input[type="text"] {
                display:flex;
                justify-content:center;
                align-items:center;
                padding: 8px;
                margin-bottom: 10px;
                border: none;
                border-radius:5px;
                font-size:16px;
                background-color:#44475a;
                color:#fff
            }
            input[type="submit"] {
            padding:10px;
            background-color:rgb(255, 168, 240);
            border:none;
            color:#282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor:pointer;
            transition: background 0.3;
            }
            input[type="submit"]:hover {
                background-color:#fff;
                
            }
        </style>

        <h1 class="display-4 font" style="text-align: center; font-family: 'Feltpen', sans-serif;">NOMBRES</h1>
        </div>

<div class="container1">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">

<label for="Nombre">Nombre: </label>
<input type="text" id="Nombre" name="Nombre" requiered><br>

<label for="Apellido">Apellido:</label>
<input type="text" id="Apellido" name="Apellido" requiered><br>

<label for="numero">numero:</label>
<input type="text" id="numero" name="numero" requiered><br>

<label for="posicion">posicion:</label>
<input type="text" id="posicion" name="posicion" requiered><br>

<label for="equipo">equipo:</label>
<input type="text" id="equipo" name="equipo" requiered><br>

<label for="escuela">escuela:</label>
<input type="text" id="escuela" name="escuela" requiered><br>

<input type="submit" value="Agregar fila ">

</form>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "carpeta";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

        function insertarnombre($conexion){

       if($_SERVER["REQUEST_METHOD"]=="POST") {

        var_dump($_POST);
        
        $nombre = $conexion->real_escape_string($_POST ["nombre"]);
        $apellidop = $conexion->real_escape_string($_POST ["apellidop"]);
        $apellidom = $conexion->real_escape_string($_POST ["apellidom"]);
        $edad = $conexion->real_escape_string($_POST ["edad"]);
        $numerofav = $conexion->real_escape_string($_POST ["numerofav"]);

        $sql = "INSERT INTO nombres (nombre, apellidop, apellidom, edad, numerofav) VALUES ('$nombre', '$apellidop', '$apellidom',
        '$edad', '$numerofav')";
        if($conexion->query($sql)==TRUE){
            echo "<p class='success'>Nuevo nombre agregado con exito. </p>";

header("location: " . $_SERVER['PHP_SELF']);
exit();

        }else{
            echo "<p class='error'>error al egregar nombre:" . $conexion->error . "</p>";
        }
    }
} insertarnombre($conexion);
        
$sql = "SELECT * FROM `nombres`"; 
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0) {
    echo "<table class='table table-bordered'>";
    echo "<tr><th>id</th><th>nombre</th><th>apellidop</th><th>apellidom</th><th>edad</th><th>numerofav</th>
    </tr>";
    while($row = $resultado->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellidop"] . "</td><td>" . 
         $row["apellidom"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["numerofav"] . "</td></tr>";
}
echo "</table>";
}else{
    echo "<p>nose encontro</p>";
}
$conexion->close();
        ?>

    
    </div>
        

</body>
</html>
                        }
                        ?>
                 </table>
                    
            </div>
        </body>
    </html>