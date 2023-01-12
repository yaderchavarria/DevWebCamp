<main class="auth">
<h2 class="auth__heading"><?php echo $titulo; ?></h2>
<p class="auth__texto">Inicia Sesión en DevWebcamp</p>

<?php require_once __DIR__ . '/../templates/alertas.php' ?>

<form method="POST" action="/login" class="formulario">
    <div class="formulario__campo">
        <label for="email" class="formulario__label">Email</label>
        <input class="formulario__input" type="email" name="email" id="email" placeholder="Tu Email">
    </div>
    <div class="formulario__campo">
        <label for="password" class="formulario__label">Password</label>
        <input class="formulario__input" type="password" name="password" id="password" placeholder="Tu password">
    </div>
    <input type="submit" value="Iniciar Sesión" class="formulario__submit">
</form>

<div class="acciones">
    <a class="acciones__enlace" href="/registro">¿Aun no tienes una cuenta? Crea una</a>
    <a class="acciones__enlace" href="/olvide">¿Olvidaste tu password?</a>

</div>
</main>