<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nuevo password</p> 

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if($token_valido) { ?>
        <form method="POST" class="forms">
            <div class="forms__campo">
                <label for="password" class="forms__label">Nuevo Password</label>
                <input
                    type="password"
                    class="forms__input"
                    placeholder="Tu Nuevo Password"
                    id="password"
                    name="password"
                >
            </div>

            <input type="submit" class="forms__submit" value="Guardar Password">
        </form>
    <?php } ?>

    <div class="actions">
        <a href="/login" class="actions__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/registro" class="actions__enlace">¿Aún no tienes una cuenta? Obtener una</a>
    </div>
</main>