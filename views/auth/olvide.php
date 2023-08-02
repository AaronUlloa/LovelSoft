<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera tu acceso a Lovelsoft</p> 

    <form method="POST" action="/olvide" class="forms">
        <div class="forms__campo">
            <label for="email" class="forms__label">Email</label>
            <input
                type="email"
                class="forms__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            >
        </div>

        <input type="submit" class="forms__submit" value="Enviar Instrucciones">
    </form>

    <div class="actions">
        <a href="/login" class="actions__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/registro" class="actions__enlace">¿Aún no tienes una cuenta? Obtener una</a>
    </div>
</main>