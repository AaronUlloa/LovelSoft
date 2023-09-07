<div class="sidebar">
    <div class="sidebar__grid">
        <a href="/admin/dashboard">
            <h1 class="sidebar__logo">
                &#60;LovelSoft/>
            </h1>
        </a>
    </div>
    <ul class="sidebar__nav--links">
        <li>
            <a href="/admin/dashboard" class="sidebar__enlace <?php echo actual_page('/dashboard') ? 'sidebar__enlace--actual' : '' ?> ">
                <i class="fa-solid fa-house sidebar__icon"></i>
                <span class="sidebar__link-name">
                    Inicio
                </span>
            </a>
        </li>
        <li>
            <div class="sidebar__link">
                <a href="/admin/usuarios" class="sidebar__enlace <?php echo actual_page('/usuarios') ? 'sidebar__enlace--actual' : '' ?>">
                    <i class="fa-solid fa-users sidebar__icon"></i>
                    <span class="sidebar__link-name">
                        Usuarios
                    </span>
                    <i class='bx bxs-chevron-down sidebar__icon'></i>
                </a>
            </div>
            <div class="sidebar__submenu">
                <ul class="sidebar__submenu--cap">
                    <li>
                        <a href="#" class="sidebar__link--ir">Crear Usuario</a>
                        <a href="#" class="sidebar__link--ir">Listar Usuarios</a>
                        <a href="#" class="sidebar__link--ir">Roles</a>
                        <a href="#" class="sidebar__link--ir">Permisos</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <div class="sidebar__link">
                <a href="/admin/clientes" class="sidebar__enlace <?php echo actual_page('/clientes') ? 'sidebar__enlace--actual' : '' ?>">
                    <i class="fa-solid fa-user sidebar__icon"></i>
                    <span class="sidebar__link-name">
                        Clientes
                    </span>
                    <i class='bx bxs-chevron-down sidebar__icon'></i>
                </a>
            </div>
        </li>
        <li>
            <div class="sidebar__link">
                <a href="/admin/productos" class="sidebar__enlace <?php echo actual_page('/productos') ? 'sidebar__enlace--actual' : '' ?>">
                    <i class="fa-solid fa-box-archive sidebar__icon"></i>
                    <span class="sidebar__link-name">
                        Productos
                    </span>
                    <i class='bx bxs-chevron-down sidebar__icon'></i>
                </a>
            </div>
            <div class="sidebar__submenu">
                <ul class="sidebar__submenu--cap">
                    <li>
                        <a href="#" class="sidebar__link--ir">Crear Usuario</a>
                        <a href="#" class="sidebar__link--ir">Listar Usuarios</a>
                        <a href="#" class="sidebar__link--ir">Roles</a>
                        <a href="#" class="sidebar__link--ir">Permisos</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <div class="sidebar__link">
                <a href="/admin/pedidos" class="sidebar__enlace <?php echo actual_page('/pedidos') ? 'sidebar__enlace--actual' : '' ?>">
                    <i class="fa-solid fa-cart-shopping sidebar__icon"></i>
                    <span class="sidebar__link-name">
                        Pedidos
                    </span>
                    <i class='bx bxs-chevron-down sidebar__icon'></i>
                </a>
            </div>
            <div class="sidebar__submenu">
                <ul class="sidebar__submenu--cap">
                    <li>
                        <a href="#" class="sidebar__link--ir">Crear Usuario</a>
                        <a href="#" class="sidebar__link--ir">Listar Usuarios</a>
                        <a href="#" class="sidebar__link--ir">Roles</a>
                        <a href="#" class="sidebar__link--ir">Permisos</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
