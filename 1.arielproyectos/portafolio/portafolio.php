<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if($_POST){
print_r($_POST);

$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];

$fecha= new DateTime();

$imagen= $fecha->getTimestamp()."_".$_FILES['archivo']['name'];

$imagen_temporal=$_FILES['archivo']['tmp_name'];

move_uploaded_file($imagen_temporal,"imagenes-php/". $imagen);

$objConexion = new conexion();

$sql="insert into PORTAFOLIO (nombre,imagen,descripcion) values ('$nombre','$imagen','$descripcion');";

$objConexion->ejecutar($sql);
header("location:portafolio.php");
}

if($_GET){
    $id= $_GET['borrar'];
    $objConexion = new conexion();
    $sql= "delete from portafolio where id=".$id;
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");
}

$objConexion = new conexion();
$proyectos=$objConexion->consultar("SELECT*FROM PORTAFOLIO;");
//print_r($proyectos);

?>


<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        datos del proyecto
    </div>
    <div class="card-body">
       <form action="portafolio.php" method="post" enctype="multipart/form-data">

              nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
              <br/>
              imagen del proyecto: <input required ="form-control" type="file" name="archivo" id="">
               <br/>
              <div class="nb-3">
                  <label for="" class="form-label"></label>
                  descripcion:
                <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
              </div>
               <button class="btn btn-success" type="submit">enviar proyecto</button>
       </form>



    </div>
    
</div>
        </div>
        <div class="col-md-6">
        <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">imagen</th>
                <th scope="col">descripcion</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($proyectos as $proyecto){ ?>
            <tr class="">
                <td scope="row"><?php echo $proyecto['id']; ?></td>
                <td><?php echo $proyecto['nombre']; ?></td>
                <td><?php echo $proyecto['imagen']; ?></td>
                <td><?php echo $proyecto['descripcion']; ?></td>
                <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">eliminar</a> </td>
                
               
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</div>







<?php include("pie.php"); ?>




