<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/cd.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'foto':
		include("partes/imagen.php");
		break;
	case 'video':
			include("partes/video.html");
		break;	
	case 'MostrarBotones':
			include("partes/botonesABM.php");
		break;
	case 'MostrarGrilla':
			include("partes/formGrilla.php");
		break;
	case 'MostrarLogin':
			include("partes/formLogin.php");
		break;
	case 'MostrarFormAlta':
			include("partes/formCd.php");
		break;
	case 'VerEnMapa':
			include("partes/formMapaGoogle.php");
		break;
	case 'BorrarCD':
			$cd = new votacion();
			$cd->id=$_POST['id'];
			$cantidad=$cd->BorrarCd();
			echo $cantidad;

		break;
	case 'Guardar':
			$votacion=new votacion();
			session_start();

			if(!isset($_POST['id']))
			{
				$votacion->id=$_POST['id'];
				$votacion->provincia=$_POST['provincia'];
	 			$votacion->dni=$_SESSION['editar'];
	  			$votacion->sexo=$_POST['sexo'];
	  			$votacion->presidente=$_POST['presidente'];
	  			$votacion->domicilio=$_POST['domicilio'];
	  			$votacion->localidad=$_POST['localidad'];
				$contador= $votacion->insertar();
			}
			else
			{
				$votacion->provincia=$_POST['provincia'];
	 			$votacion->dni=$_SESSION['registrado'];
	  			$votacion->sexo=$_POST['sexo'];
	  			$votacion->presidente=$_POST['presidente'];
	  			$votacion->domicilio=$_POST['domicilio'];
	  			$votacion->localidad=$_POST['localidad'];
				$contador= $votacion->insertar();

			}
			session_destroy();
			echo $contador;

		break;
	case 'TraerCD':
			session_start();
			
			$cd = votacion::TraerUnCd($_POST['id']);
			
			$_SESSION['editar']=$cd->dni;	
			echo json_encode($cd) ;

		break;
	default:
		# code...
		break;
}

 ?>