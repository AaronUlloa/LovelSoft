<main class="auth">
        <h2 class="auth__heading"><?php echo $titulo; ?></h2>
        <p class="auth__text">Inicia sesion en Lovelsoft</p>

        <form method="POST" action="/login" class="forms">
            <div class="forms__campo">
                <label for="email" class="forms__label">Email</label>
                <input
                        type="email"
                        class="forms__input"
                        placeholder="Your Email Here"
                        id="email"
                        name="email"
                >
            </div>
            <div class="forms__campo">
                <label for="password" class="forms__label">Password</label>
                <input
                        type="password"
                        class="forms__input"
                        placeholder="Your Password Here"
                        id="password"
                        name="password"
                >
            </div>

            <input type="submit" class="forms__submit" value="Iniciar Sesión">
        </form>
        <div class="actions">
            <a href="/registro" class="actions__enlace">¿Aun no tienes una cuenta? Registrarse ahora.</a>
            <a href="/olvide" class="actions__enlace">¿Olvidaste tu Password?.</a>
        </div>
</main>