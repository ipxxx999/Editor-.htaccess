<?php
session_start();
/* DECLARE VARIABLES */
$username = 'admin';
$password = 'admin';
$random1 = 'secret_key1';
$random2 = 'secret_key2';
$hash = md5($random1 . $password . $random2);
$self = $_SERVER['REQUEST_URI'];
/* USER LOGOUT */
if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}
/* USER IS LOGGED IN */
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash)
{
	logged_in_msg($username);
}
/* FORM HAS BEEN SUBMITTED */
else if (isset($_POST['submit']))
{
	if ($_POST['username'] == $username && $_POST['password'] == $password)
	{
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOGIN SESSION
		$_SESSION["login"] = $hash;
		header("Location: $_SERVER[PHP_SELF]");
	}
	else
	{
		// DISPLAY FORM WITH ERROR
		display_login_form();
		display_error_msg();
	}
}
/* SHOW THE LOGIN FORM */
else
{
	display_login_form();
}
/* TEMPLATES */
function display_login_form()
{
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="cleartype" content="on">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="220">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="author" content="Elio Equipo">
        <meta name="apple-itunes-app" content="app-id=">
        <meta name="description" content="🍿 User Panel Gratis Direcciones Proxy Bloqueadas. robot y bad bots" />

        <title>User Panel</title>

	<link rel="stylesheet" href="./css_user/bootstrap.min1.css" type="text/css"/>
	<link rel="stylesheet" href="./css_user/main.css" type="text/css"/>
        </head>
		<body>
			<div class="trail">
				<canvas id="world"></canvas>
			</div>
	<div class="container" style="opacity:1;">
			<div class="row col-md-offset-2 col-md-8 login-error">
			<div class="alert alert-danger" role="alert">
				<strong>
					<font size="3">Se encontraron los siguientes errores</font>	
				</strong>
				<font color="black" size="3">
					<ul type="square">
					</ul>
				</font>
			</div>
		</div>
		
	  	<div class="row-fluid">
	  		<div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
	  			<div class="row-fluid">
	  				<div class="col-sm-12 logo-login-form">
	  				<h2 style="text-align:center">

                                        <!-- Imagen Logo ----->
                                        <img src="./png/Login_Users.png" class="clearfix">



</h2>
	  				</div>
	  			</div>
	  			<div class="row-fluid">
	  				<div class="col-sm-12">
	<?php echo '<form action="' . isset($self) . '" method="post">' .
			 '<label for="username"><span style="color:#ffffff;text-align:center;">Usuario:</span></label>' .
			 '<input type="text" name="username" id="username" placeholder="User: Guest">' .
			 '<label for="password"><span style="color:#ffffff;text-align:center;">Contraseña:</span></label>' .
			 '<input type="password" name="password" id="password" placeholder="Password: guest1">' .
			 '<input type="submit" name="submit" value="Iniciar Sesión" class="btn btn-default primary sub">' .
		 '</form>';
}
function logged_in_msg($username)
{
?>


  </div>
	  			      </div>
	  			   <div>
	  			</div>
	  		</div>
	  	</div>
	</div>
</body>
</html>   

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="cleartype" content="on">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="author" content="Elio Equipo">
        <meta name="apple-itunes-app" content="app-id=">
        <meta name="description" content="🍿 Codifica Tus Canales de películas y series de forma Segura Para Que No te roben, ponte y cómodo y disfruta." />
        <meta property="al:ios:url" content="tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&amp;text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <meta property="al:android:url" content="tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&amp;text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20y%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <meta name="twitter:app:url:iphone" content="tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&amp;text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20y%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <meta name="twitter:app:url:ipad" content="tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&amp;text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20y%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <meta name="apple-itunes-app" content="app-id=686449807, app-argument: tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20y%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <link rel="profile" href="https://gmpg.org/xfn/11"/>
        

        <title>User Panel </title>


        <!-- Boton Compartir en telegram whatsap y otros ----->

        <!-- Imagenes del boton Dia Noche ----->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">


	<link rel="stylesheet" href="./css_user/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="./css_user/font-awesome.min.css" type="text/css" />

	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>

	<script type="text/javascript" src="./assets/js/sweetalert.min.js"></script>

	<script type="text/javascript" src="./assets/js/apicodes.min.js"></script>


        <!-- Para estilo de la pagina ----->
        <link rel="stylesheet" href="./dia_noche/miboton.css"> 

</head>
<div class="container-btn-mode">
   <div id="id-sun" class="btn-mode sun active">
      <i class="fas fa-sun"></i>
   </div>
   <div id="id-moon" class="btn-mode moon">
      <i class="fas fa-moon"></i>
   </div>
</div>
<body>

        <!-- Importante wrapper no quitar ----->

    <div id="page" class="wrapper">

	<div class="container">
	     <br>
	     <br>
		<form id="action-form" action="action.php" method="POST" accept-charset="utf-8">
		    
		     <a class="btn btn-info btn-sm" href="?logout=true" role="button">Cerrar Sesion</a>

			<div class="form-group">

		    		    
		<hr>

------------------



A


------------------

		<footer class="footer">
		</footer>

	</div><!-- /.container -->
	<?php
	}
function display_error_msg()
{
	echo '<p><span style="color:#e91919;text-align:center;">El nombre de usuario o la contraseña no son válidos!</p></span>';
}
?>






        <!-- Para tansicion dia noche ----->
        <script src="./dia_noche/index.js"></script>

                </div>
              </div>
            </div>
        </div>
    </div>
</body>

</html>


