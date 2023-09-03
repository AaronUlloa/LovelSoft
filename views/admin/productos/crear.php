<h2 class="dashboard__heading"><?php echo $title; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/productos">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="dashboard__formularios">
    <?php include_once __DIR__. './../../templates/alertas.php' ?>

    <form action="/admin/productos/crear" enctype="multipart/form-data" class="forms" method="POST">
        <?php include_once __DIR__. '/formulario.php' ?>
        <input type="submit" value="Agregar Producto" class="forms__submit forms__submit--registrar">
    </form>
</div>