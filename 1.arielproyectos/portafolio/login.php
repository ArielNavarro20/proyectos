<?php
session_start();
if($_POST){
   if(  ($_POST['usuario']=="developer") && (  $_POST['password']== "12345")){
       $_SESSION['usuario']="developer";
       echo 'logueado ok';

       header("location:index.php");



   } else{
       echo "<script> alert('contraseña o usuario incorrecto'); </script>";
   }


}


?>


<!doctype html>
<html lang="en">

<head>
  <title>login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
<div class="container">

    <form action="login.php" method="post">

       usuario:<input class="form-control" type="text" name="usuario" id="">
       
       contraseña:<input class="form-control" type="password" name="password" id="">
       <br/>
       <button class="btn btn-success" type="submit">entrar al portafolio</button>

    </form>


</div>





</body>

</html>