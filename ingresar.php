<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vivero La Reina- Iniciar Sesión</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <?php
  session_start();
  $isLoggedIn = isset($_SESSION['usuario']);
  ?>

<header>
        <h1>Vivero la Reina</h1>
        <nav>
        

      <div class="nav-buttons">
        
          <a class="btn btn-outline-light" href="ingresar.php">Iniciar Sesión</a>
          <a class="btn btn-light" href="registro.php">Registrarte</a>
     
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <h2 class="text-center">Iniciar Sesión</h2>
        
          <form method="post" action="procesar_ingresar.php">
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form2Example1" name="usuario" class="form-control" required />
              <label class="form-label" for="form2Example1">Email</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="form2Example2" name="clave" class="form-control" required />
              <label class="form-label" for="form2Example2">Contraseña</label>
            </div>

            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Recuérdame </label>
                </div>
              </div>

              <div class="col text-right">
                <a href="#!">¿Olvidaste tu contraseña?</a>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4" onclick="window.location.href='index.php'">Ingresar</button>


            <div class="text-center">
              <p>¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer">
        <p>&copy; 2024 La Reina S.A Todos los derechos reservados.</p>
    </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>
