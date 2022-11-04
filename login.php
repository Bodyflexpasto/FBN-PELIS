<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo " <script> alert('¡Nombre de usuario o contraseña incorrectos!');</script>";
		}else
		{
			echo "<script> alert('¡Nombre de usuario o contraseña incorrectos!');</script>";
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
        <h1>Login</h1>
        <br>
        <form method="post">
             <!-- Usuario  -->
            <input id="text" type="email" name="user_name" placeholder="Usuario (Correo)" required="required" />
             <!-- Contraseña  -->
            <input type="password" name="password" placeholder="Contraseña" required="required" />
            <br>
            <p class="chec">Bienvenid@ a <b class="letras">FBN-pelis</b> en esta aplicación podrás disfrutar todas tus películas y series favoritas, Para ingresar debes comprar un plan mensual. </p>
            <br>
            <button id="button" type="submit" class="btn btn-primary btn-block btn-large">Ingresar</button>
            <br>
            <!-- Enlace de registro  -->
            <p class="chec"> ¿No tienes cuenta? <a class="link" href="registrar.php">Plan mensual</a></p>
            <hr>
        </form>
    </div>
    
</body>
</html>