<form id="formulario-login" method="post">
    <div class="form-group">
        <label for="correo">Correo</label>
        <input class="form-control" type="email" id="email" name="email" placeholder="Correo Electronico" required>
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input class="form-control" type="password" id="password" placeholder="Contraseña" required>
    </div>
    <div class="form-group">
        <input type="hidden" id="accion" value="login">
        <input class="btn btn-primary w-100" type="submit" name="btnLogin" value="Ingresar">
    </div>
    <div class="form-group">
        <p class="text-center">No tienes una cuenta? <a href="registro.php">Registrate</a></p>
    </div>
</form>