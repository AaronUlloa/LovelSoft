<main class="auth">
        <h2 class="auth__heading"><?php echo $titulo; ?></h2>
        <p class="auth__text">Inicia sesion en Lovelsoft</p>

        <form method="POST" class="forms">
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

            <div class="forms__campo">
                <label for="password" class="formulario__label">Password</label>
                <input
                        type="password"
                        class="forms__input"
                        placeholder="Tu Password"
                        id="password"
                        name="password"
                >
            </div>

            <input type="submit" class="forms__submit" value="Iniciar Sesión">
        </form>
        <div class="actions">
            <a href="/registro" class="actions__link">Aun no tienes una cuenta? Registrarse ahora.</a>
            <a href="/olvide" class="actions__link">Olvidaste tu Password?.</a>
        </div>
</main>