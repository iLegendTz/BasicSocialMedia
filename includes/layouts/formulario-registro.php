<form id="formulario-registro" method="post">
    <div class="form-group">
        <label for="nombre">Nombre(s)</label>
        <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Nombre(s)" required>
    </div>
    <div class="form-group">
        <label for="apellidoP">Apellido Paterno</label>
        <input class="form-control" id="apellidoP" type="text" name="apellidoP" placeholder="Apellido Paterno" required>
    </div>
    <div class="form-group">
        <label for="apellidoM">Apellido Materno</label>
        <input class="form-control" id="apellidoM" type="text" name="apellidoM" placeholder="Apellido Materno">
    </div>
    <div class="form-group">
        <label for="genero">Genero</label>
        <select class="form-control" name="genero" id="genero" required>
            <option value="">Selecciona tu Genero</option>
            <option value="0">Mujer</option>
            <option value="1">Hombre</option>
        </select>
    </div>
    <div class="form-group">
        <label for="fechaNacimiento">Fecha de Nacimiento</label>
        <input class="form-control" id="fechaNacimiento" type="date" name="fechaNacimiento" max="<?php echo ((date('Y') - 15) . '-' . date('m') . '-' . date('d')); ?>" value="<?php echo (date('Y-m-d')); ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" id="email" type="email" name="email" placeholder="Correo Electronico" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" id="password" type="password" name="password" placeholder="Contraseña" required>
    </div>
    <div class="form-group text-center">
        <div class="g-recaptcha" data-sitekey="6LeCSaMUAAAAAE58dAcW8rOtAnY2smRrLKHTzeC-"></div>
    </div>
    <div class="form-group">
        <input type="hidden" id="accion" value="registro">
        <input class="btn btn-primary w-100" type="submit" name="btnRegistrar" value="Registrarte">
    </div>
    <div class="form-group">
        <p class="text-center">Ya tienes una cuenta? <a href="index.php">Inicia Sesion</a></p>
    </div>
</form>