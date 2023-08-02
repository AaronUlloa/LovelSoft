<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Regístrate en LovelSoft</p> 

    <form method="POST" action="/registro" class="forms">
        <div class="forms__campo">
            <label for="nombre" class="forms__label">Nombre</label>
            <input
                type="text"
                class="forms__input"
                placeholder="Tu Nombre"
                id="nombre"
                name="nombre"
            >
        </div>

        <div class="forms__campo">
            <label for="apellido" class="forms__label">Apellido</label>
            <input
                type="text"
                class="forms__input"
                placeholder="Tu Apellido"
                id="apellido"
                name="apellido"
            >
        </div>

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
            <label for="password" class="forms__label">Password</label>
            <input
                type="password"
                class="forms__input"
                placeholder="Tu Password"
                id="password"
                name="password"
            >
        </div>

        <div class="forms__campo">
            <label for="password2" class="forms__label">Repetir Password</label>
            <input
                type="password"
                class="forms__input"
                placeholder="Repetir Password"
                id="password2"
                name="password2"
            >
        </div>

        <input type="submit" class="forms__submit" value="Crear Cuenta">
    </form>

    <div class="actions">
        <a href="/login" class="actions__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
        <a href="/olvide" class="actions__enlace">¿Olvidaste tu Password?</a>
    </div>
</main>