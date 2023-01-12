<main class="auth">
<h2 class="auth__heading"><?php echo $titulo; ?></h2>
<p class="auth__texto">Cambia tu password</p>

<?php require_once __DIR__ . '/../templates/alertas.php' ?>

<?php if ($token_valido) { ?>

<form method="POST" class="formulario">
    <div class="formulario__campo">
        <label for="password" class="formulario__label">Password</label>
        <input class="formulario__input" type="password" name="password" id="password" placeholder="Tu password">
    </div>
   
    <input type="submit" value="Guardar Password" class="formulario__submit">
</form>

<?php } ?>
<div class="acciones">
    
    <a class="acciones__enlace" href="/login">¿Ya tienes una cuenta?Iniciar Sesión</a>
    <a class="acciones__enlace" href="/registro">¿Aun no tienes una cuenta? Crea una</a>
    

</div>
</main>