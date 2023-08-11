<?php

session_start();
if(isset($_SESSION['usuario']) != 'developer'){

    header("location:login.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portafolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>

</head>
<body>
 
<div class="container">
    Portafolio Ariel


     <a href="index.php">inicio</a>
     <a href="portafolio.php">portafolio</a>
     <a href="cerrar.php">cerrar</a>
     <br/>


<?php include("pie.php"); ?>