<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body onload="actualizarHora()">
  <div class="section" id="servicios"><br><br>
    <h1>Organiza, Juega, Gana.</h1>
    <p>Crea tu propio torneo o únete a competiciones de videojuegos, deportes, trivias y más.</p>
    
    <div class="row">
        <!-- Servicio 1 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <a href="<?php echo base_url('crear_torneo'); ?>" class="stretched-link"></a>
                <i class="fa fa-cogs"></i>
                <div class="card-body">
                    <h3 class="card-title">Crear Torneo</h3>
                    <p class="card-text">¿Listo para el desafío? Crea tu primer torneo en segundos.</p>
                </div>
            </div>
        </div>

        <!-- Servicio 2 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <a href="<?php echo base_url('torneos_disponibles'); ?>" class="stretched-link"></a>
                <i class="fa fa-users"></i>
                <div class="card-body">
                    <h3 class="card-title">Ver Torneos Disponibles</h3>
                    <p class="card-text">Explora Torneos Activos</p>
                </div>
            </div>
        </div>

        <!-- Servicio 3 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <a href="<?php echo base_url('beneficios'); ?>" class="stretched-link"></a>
                <i class="fa fa-rocket"></i>
                <div class="card-body">
                    <h3 class="card-title">Beneficios</h3>
                    <p class="card-text">Gana muchos premios increibles.</p>
                </div>
            </div>
        </div>
    </div>
  </div>

  <!-- Contador de estadísticas -->
  <div class="section text-center mt-1">
    <h2>Estadísticas en Tiempo Real</h2>
    <div class="row mt-4">
        <!-- Tarjeta 1: Torneos Activos -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Torneos Activos</h3>
                    <p class="card-text"><strong>128</strong></p>
                </div>
            </div>
        </div>
        <!-- Tarjeta 2: Usuarios Registrados -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Usuarios Registrados</h3>
                    <p class="card-text"><strong>12,456</strong></p>
                </div>
            </div>
        </div>
        <!-- Tarjeta 3: Partidas Jugadas Hoy -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Partidas Jugadas Hoy</h3>
                    <p class="card-text"><strong>842</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>


