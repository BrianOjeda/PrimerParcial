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
	case 'BorrarCD':
			$cd = new votacion();
			$cd->id=$_POST['id'];
			$cantidad=$cd->BorrarCd();
			echo $cantidad;

		break;
	case 'Guardar':
			$votacion=new votacion();
			
			$votacion->provincia=$_POST['provincia'];
 			$votacion->dni=$_POST['dni'];
  			$votacion->sexo=$_POST['sexo'];
  			$votacion->presidente=$_POST['presidente'];
			$contador= $votacion->insertar();
			session_start();
			session_destroy();
			echo $contador;

		break;
	case 'TraerCD':
			$cd = votacion::TraerUnCd($_POST['id']);		
			echo json_encode($cd) ;

		break;
	default:
		# code...
		break;
}

 ?>