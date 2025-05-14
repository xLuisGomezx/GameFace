<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
</head>
<body>

<div class="container mt-5 login-container">
  <!-- Login Form -->
  <div class="row justify-content-center" id="loginForm">
    <div class="col-md-4 login-box">
      <h2 class="text-center mb-4 login-title">Login</h2>
      <form action="<?php echo base_url(); ?>index.php/auth/login" method="post">
        <div class="mb-3">
          <label for="username" class="form-label login-label">Usuario</label>
          <input type="text" class="form-control login-input" id="username" name="username" required>
        </div>
        <div class="mb-3 position-relative">
          <label for="password" class="form-label login-label">Contraseña</label>
          <div class="input-group">
            <input type="password" class="form-control login-input" id="password" name="password" required>
            <button type="button" class="btn position-absolute end-0 top-0 h-100 px-3" id="togglePasswordLogin" style="border: none; background: transparent;">
              <i class="fa fa-eye"></i>
            </button>
          </div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
          <label class="form-check-label login-label" for="rememberMe">Acuérdate de mí</label>
        </div>
        <button type="submit" class="btn w-100 login-button">Iniciar sesión</button>
      </form>
      <div class="text-center mt-3">
        <a href="#" id="showRegisterForm" class="text-light text-decoration-none">¿No tienes una cuenta? Registrate</a>
      </div>
    </div>
  </div>

  <!-- Registration Form -->
  <div class="row justify-content-center d-none" id="registerForm">
    <div class="col-md-4 login-box">
      <h2 class="text-center mb-4 login-title">Registro</h2>
      <form action="<?php echo base_url(); ?>index.php/auth/register" method="post">
        <div class="mb-3">
          <label for="regUsername" class="form-label login-label">Usuario</label>
          <input type="text" class="form-control login-input" id="regUsername" name="regUsername" required>
        </div>
        <div class="mb-3">
          <label for="regEmail" class="form-label login-label">Gmail</label>
          <input type="email" class="form-control login-input" id="regEmail" name="regEmail" required>
        </div>
        <div class="mb-3 position-relative">
          <label for="regPassword" class="form-label login-label">Contraseña</label>
          <div class="input-group">
            <input type="password" class="form-control login-input" id="regPassword" name="regPassword" required>
            <button type="button" class="btn position-absolute end-0 top-0 h-100 px-3" id="togglePasswordRegister" style="border: none; background: transparent;">
              <i class="fa fa-eye"></i>
            </button>
          </div>
        </div>
        <button type="submit" class="btn w-100 login-button">Registrar</button>
        <div class="text-center mt-3">
          <a href="#" id="showLoginForm" class="text-light text-decoration-none">¿Ya tienes una cuenta? Iniciar sesión</a>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // Toggle password visibility for login
  document.getElementById('togglePasswordLogin').addEventListener('click', function () {
    const passwordField = document.getElementById('password');
    const icon = this.querySelector('i');
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      icon.classList.remove('fa-eye');
      icon.classList.add('fa-eye-slash');
    } else {
      passwordField.type = 'password';
      icon.classList.remove('fa-eye-slash');
      icon.classList.add('fa-eye');
    }
  });

  // Toggle password visibility for register
  document.getElementById('togglePasswordRegister').addEventListener('click', function () {
    const passwordField = document.getElementById('regPassword');
    const icon = this.querySelector('i');
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      icon.classList.remove('fa-eye');
      icon.classList.add('fa-eye-slash');
    } else {
      passwordField.type = 'password';
      icon.classList.remove('fa-eye-slash');
      icon.classList.add('fa-eye');
    }
  });

  // Show registration form
  document.getElementById('showRegisterForm').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('loginForm').classList.add('d-none');
    document.getElementById('registerForm').classList.remove('d-none');
  });

  // Show login form
  document.getElementById('showLoginForm').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('registerForm').classList.add('d-none');
    document.getElementById('loginForm').classList.remove('d-none');
  });
</script>

</body>
</html>
