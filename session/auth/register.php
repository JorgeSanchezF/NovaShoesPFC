<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="container">
    <form id="login-form" action="addUsuario.php" method="post" name="miForm">
      <h2>Registrarse</h2>
      <div class="form-group">
        <label for="username">Nombre:
        <input type="text" name="name" id="name" required>
        </label>
      </div>
      <div class="form-group">
        <label for="username" name="label1">Usuario:
        <input type="text" name="correo" onblur=validarCorreo() id="username" required><br>
        <span></span>
        </label>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:
        <input type="password" name="pass" onblur=validarPasswd() id="password" required><br>
        <span></span>
        </label>
      </div>
      <div class="form-group">
        <button type="submit" id="login-button" disabled>Registrarse</button>
      </div>
    </form>
  </div>
  <script type="text/javascript" src="../../js/app.js"></script>
  <script type="text/javascript" src="script.js"></script>

</body>
</html>