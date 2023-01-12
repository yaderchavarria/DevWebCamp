<main class="auth">
<h2 class="auth__heading"><?php echo $titulo; ?></h2>
<p class="auth__texto">Recupera tu acceso a DevWebcamp</p>

<?php require_once __DIR__ . '/../templates/alertas.php' ?>

<form method="POST" action="/olvide" class="formulario">
    <div class="formulario__campo">
        <label for="email" class="formulario__label">Email</label>
        <input class="formulario__input" type="email" name="email" id="email" placeholder="Tu Email">
    </div>
   
    <input type="submit" value="Enviar Instrucciones" class="formulario__submit">
</form>

<div class="acciones">
    
    <a class="acciones__enlace" href="/login">¿Ya tienes una cuenta?Iniciar Sesión</a>
    <a class="acciones__enlace" href="/registro">¿Aun no tienes una cuenta? Crea una</a>
    

</div>
</main>