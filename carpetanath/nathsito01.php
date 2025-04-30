<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "rmsg";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("la conexion fallo: " . $conexion->connect_error);
}
if($_SERVER["REQUEST_METHOD"] =="POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["categoria"];
    $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES
    ('$nombre','$precio','$id_categoria')";
    if($conexio->query($sql)===TRUE){
        echo "<p style='color: green';>Producto agregado correctamente</p>";
    }else{
        echo "<p style='color: red'; ERROR". $conexion ->error. "</p>:";
    }
}

$sql_categorias= "SELECT * FROM categorias" ;
$result_categorias = $conexion->query($sql_categorias);

?>
<html>
    <head>
        <title>Pagina alterna de prueba</title>
</head>
<body>
    <h1> registrar productos </h1>
    <form method = "POST">
        <label>Nombre del producto: </label>
        <imput type ="text" name="nombre" required><br> <br>
        <label>precio: </label>
        <imput type ="number" name="precio" required><br> <br>
        <label>categoria </label>
        <select name="categoria" required>
            <option value= "">seleccionar una categoria</option>
            <?php
            if($result_categorias->num_rows> 0){
                while($row = $result_categorias->fetch_assoc()){ 
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                  }
                 }
               ?>
               </select><br><br>
                </body>
                </html>