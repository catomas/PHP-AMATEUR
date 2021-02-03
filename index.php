<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post">
    	<h1>Aplicacion PHP!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="number" name="edad" placeholder="Edad">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("formulario.php");
        ?>
</body>
</html>