<!-- filepath: c:\xampp\htdocs\GameFace\application\views\header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
</head>
<body>
  <nav>
    <div class="logo">
      GAMEFACE
    </div>
    <ul>
        <li><a href="<?php echo base_url(); ?>index.php/redireccion/inicio">INICIO</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/redireccion/torneos">TORNEOS</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/redireccion/login"><i class="fa fa-user"></i></a></li>
    </ul>
  </nav>