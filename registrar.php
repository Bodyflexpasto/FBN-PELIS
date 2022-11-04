<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
        //algo fue publicado
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//guardar en la base de datos
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "¡Por favor ingrese alguna información válida!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>FBN-PELIS</title>
</head>
<body>
    <div class="pelicula-principal">
        <div class="contenedor">
        </div>
    </div>
    <div class="login">
        <h1>Registar</h1>
        <br>
        <form  role="form" method="post">
             <!-- Usuario  -->
            <input id="text" type="email" name="user_name" placeholder="Usuario (Correo)" required="required" />
             <!-- Contraseña  -->
            <input id="text" type="password" name="password" placeholder="Contaseña" required="required" />
            <br>
            <p class="chec">Bienvenid@ a <b class="letras">FBN-pelis</b> al registrarte, aceptas Condiciones de uso y Politica de privacidad.  </p>
            <br>
            <button id="button" type="submit" class="btn btn-primary btn-block btn-large">Registrar</button>
            <br>
            <hr>
        </form>
    </div>
    
</body>
</html>