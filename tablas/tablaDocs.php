<?php
require_once "../php/conexion.php";
      session_start();
      $output = '';
      $carpeta = $_POST['carpeta'];
      if ($_SESSION['nivel'] == 1) {
            $query = "SELECT * FROM archivos WHERE carpeta = '$carpeta' AND responsable = '".$_SESSION['usuario']."'";
      }else{
            $query = "SELECT * FROM archivos WHERE carpeta = '$carpeta' AND responsable = '".$_POST['responsable']."'";
      }
      
      $result = mysqli_query($conexion, $query);  
      
      
      if($_SESSION['nivel']==3){
            $output .= '  
      <div class="table-responsive">  
           <table class="table table-hover text-center">  
           <thead>
					<tr>
						
						<th class="text-center">Titulo</th>
						<th class="text-center">Descripción</th>
						<th class="text-center">Fecha</th>
                                    <th class="text-center">Descargar</th>
                                    
						<th class="text-center">Eliminar</th>
					</tr>
            </thead>
            <tbody>';
      }else{
            $output .= '  
      <div class="table-responsive">  
           <table class="table table-hover text-center">  
           <thead>
					<tr>
						
						<th class="text-center">Titulo</th>
						<th class="text-center">Descripción</th>
						<th class="text-center">Fecha</th>
                                    <th class="text-center">Descargar</th>
					</tr>
            </thead>
            <tbody>';
      }
      
      while($row = mysqli_fetch_array($result))  
      {  
            if($_SESSION['nivel']==3){
                    
                  $output .= ' <tr> 
                    <td>'.$row["titulo"].'</td>
                    <td>'.$row["descripcion"].'</td>
                    <td>'.$row["fecha"].'</td>
                    <td><a href="'.$row["ruta"].'" class="btn btn-success btn-raised" download><i class="fa fa-download" ></i></a></td> 
                    <td><a href="#!" class="btn btn-danger btn-raised"><i class="fa fa-trash"></i></a></td> 
                    </tr>
                ';
                  
            }else{
                  $output .= ' <tr> 
                    <td>'.$row["titulo"].'</td>
                    <td>'.$row["descripcion"].'</td>
                    <td>'.$row["fecha"].'</td>
                    <td><a href="'.$row["ruta"].'" class="btn btn-success btn-raised" download><i class="fa fa-download" ></i></a></td>  
                    </tr>
                ';
            }
                        
             
      }  
      $output .= "</tbody></table></div>";  
      echo $output;  
   
 ?>

	