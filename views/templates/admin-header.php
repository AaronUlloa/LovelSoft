<header class="dashboard__header">
    <div class="dashboard__header-grid">
        <a href="/">
            <picture class="dashboard__logo">
                <source srcset="/build/img/logo-01.avif" type="image/avif">
                <source srcset="/build/img/logo-01.webp" type="image/webp">
                <img loading="lazy" width="133" height="17" src="build/img/logo-01.png" alt="Imagen Lovelsoft">
            </picture>
        </a>
        <nav class="dashboard__nav">
            <form method="POST" action="/logout" class="dashboard__form">
                <input type="submit" class="dashboard__submit-logout" value="Cerrar Sesion">
            </form>
        </nav>
    </div>
</header>