<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("../partes/recursos.php")?>
    <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-form">
          <img src="school_logo.png" alt="Logo de la Escuela XYZ" class="school-logo">
          <h2 class="text-center mb-4">Inicio de Sesión - Escuela XYZ</h2>
          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
          </form>
        
          <div id="olvi-contra" class="text-center mt-3">
            <a href="#">¿Olvidaste tu contraseña?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>