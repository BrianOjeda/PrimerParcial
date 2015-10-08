
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">
<script type="text/javascript" src="js/funcionesABM.js"></script>
<?php 
session_start();
if(isset($_SESSION['registrado'])){  ?>
    <div class="container">

      <form class="form-ingreso" onsubmit="Guardar();return false">
        <h2 class="form-ingreso-heading">Votacion</h2>
      
        <input type="text"  minlength="1"  id="provincia" title="Se necesita un nombre de cantante" class="form-control" placeholder="Provincia" required="" autofocus="">
        <input type="text"  minlength="1"  id="domicilio" title="Se necesita un nombre de cantante" class="form-control" placeholder="Domicilio" required="" autofocus="">
         <input type="text"  minlength="1"  id="localidad" title="Se necesita un nombre de cantante" class="form-control" placeholder="Localidad" required="" autofocus="">
        <select id="presidente">
          <option>
            Scioli
          </option>
          <option>
            Macri
          </option>
          <option>
            Masa
          </option>
        </select>
       
        <input type="radio"   name="sexo" id="sexo" class="form-control" placeholder="masculino" required="" autofocus="" value="masc">Masculino
        <input type="radio"   name="sexo" id="sexo" class="form-control" placeholder="femenino" required="" autofocus="" value="femen">Femenino
       <input readonly   type="hidden"    id="id" name="id" class="form-control" >
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted no esta logeado. </h3>";?>         
   
  <?php  }  ?>
    
  
