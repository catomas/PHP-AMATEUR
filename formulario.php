<?php
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['edad']) >= 1 ){
        $name = trim($_POST['name']);
        $edad = trim($_POST['edad']);
        $consulta = "INSERT INTO datos(nombre, edad) VALUES ('$name', $edad)";
        $resultado = mysqli_query($con, $consulta);
        if ($resultado) {
            ?>
            <h3 class= "ok"> Datos Guardados Correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class= "bad"> Ocurrio un error </h3>
            <?php
        }
    } else {
        ?>
        <h3 class= "ok"> Porfavor Complete los Campos!</h3>
        <?php
    }
}

$MYSQL_DB = `echo %windir%`;

echo "<br>".$MYSQL_DB

?>