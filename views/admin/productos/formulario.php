<fieldset class="forms__fieldset">
    <legend class="forms__legend">Informacion del Producto</legend>
    <div class="product">
        <div class="forms__campo">
            <label for="nombre" class="forms__label">Titulo del Articulo</label>
            <input
                    type="text"
                    class="forms__input"
                    id="nombre"
                    name="nombre"
                    placeholder="Nombre del Articulo"
                    maxlength="50"
                    value="<?php echo $producto->nombre ?? ''; ?>"
            >
        </div>
        <div class="forms__campo">
            <label for="codigo" class="forms__label">Codigo</label>
            <input
                    type="text"
                    class="forms__input"
                    id="codigo"
                    name="codigo"
                    placeholder="Codigo del Articulo"
                    maxlength="50"
                    value="<?php echo $producto->codigo ?? ''; ?>"
            >
        </div>
        <div class="forms__campo">
            <label for="precio" class="forms__label">Precio</label>
            <input
                    type="number"
                    class="forms__input"
                    id="precio"
                    name="precio"
                    placeholder="Codigo del Articulo"
                    min="1"
                    step="any"
                    value="<?php echo $producto->precio ?? ''; ?>"
            >
        </div>
        <div class="forms__campo">
            <label for="stock" class="forms__label">Stock</label>
            <input
                    type="number"
                    class="forms__input"
                    id="stock"
                    name="stock"
                    placeholder="Codigo del Articulo"
                    min="1"
                    value="<?php echo $producto->stock ?? ''; ?>"
            >
        </div>
        <div class="forms__campo">
            <label for="categoria" class="forms__label">Categoria</label>
            <select name="categoria_id" id="categoria_id" class="forms__input">
                <option value="">--Seleccionar--</option>
                <?php foreach ($categorias as $categoria)  {?>
                    <option  <?php echo ($producto->categoria_id === $categoria->id) ? 'selected' : '' ?> value="<?php echo $categoria->id; ?>">
                        <?php echo $categoria->nombre; ?>
                    </option>
                <?php  } ?>
            </select>
        </div>
        <div class="forms__campo">
            <label for="imagen" class="forms__label">Imagen</label>
            <input
                    type="file"
                    class="forms__input forms__input--file"
                    id="imagen"
                    name="imagen"
            >
        </div>
        <?php if(isset($producto->imagen_actual)) { ?>
            <p class="formulario__texto">Imagen Actual:</p>
            <div class="formulario__imagen">
                <picture>
                    <source srcset="<?php echo $_ENV['HOST'] . '/img/Articulos/' . $producto->imagen; ?>.webp" type="image/webp">
                    <source srcset="<?php echo $_ENV['HOST'] . '/img/Articulos/' . $producto->imagen; ?>.png" type="image/png">
                    <img src="<?php echo $_ENV['HOST'] . '/img/Articulos/' . $producto->imagen; ?>.png" alt="Imagen Articulo">
                </picture>
            </div>
        <?php } ?>
    </div>
</fieldset>

<fieldset class="forms__fieldset">
    <legend class="forms__legend">Informacion Extra</legend>
    <div class="forms__campo">
        <label for="tagsInput" class="forms__label">Tags de Busqueda (Separadas por Coma)</label>
        <input
        type="text"
        class="forms__input"
        id="tagsInput"
        placeholder="Ej. Apple, Windows, Mac"
        >
        <div id="tags" class="forms__listado"></div>
        <input type="hidden" name="tags" value="<?php echo $producto->tags ?? ''; ?>">
    </div>
        <div class="forms__campo">
            <label for="descripcion" class="forms__label">Descripcion</label>
            <textarea
                    type="text"
                    class="forms__input"
                    id="descripcion"
                    name="descripcion"
                    rows="4"
            ></textarea>
        </div>
</fieldset>


<!--<fieldset class="forms__fieldset">-->
<!--    <legend class="forms__legend">Informacion Extra</legend>-->
<!--    <div class="forms__campo">-->
<!--        <div class="forms__contenedor-icono">-->
<!--            <div class="forms__icono">-->
<!--                <i class="fa-brands fa-facebook"></i>-->
<!--            </div>-->
<!--            <input-->
<!--                    type="text"-->
<!--                    class="forms__input--sociales"-->
<!--                    name="redes[facebook]"-->
<!--                    placeholder="Facebook"-->
<!--                    value="--><?php //echo $producto->facebook ?? ''; ?><!--"-->
<!--            >-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="forms__campo">-->
<!--        <div class="forms__contenedor-icono">-->
<!--            <div class="forms__icono">-->
<!--                <i class="fa-brands fa-youtube"></i>-->
<!--            </div>-->
<!--            <input-->
<!--                    type="text"-->
<!--                    class="forms__input--sociales"-->
<!--                    name="redes[youtube]"-->
<!--                    placeholder="Youtube"-->
<!--                    value="--><?php //echo $producto->youtube ?? ''; ?><!--"-->
<!--            >-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="forms__campo">-->
<!--        <div class="forms__contenedor-icono">-->
<!--            <div class="forms__icono">-->
<!--                <i class="fa-brands fa-instagram"></i>-->
<!--            </div>-->
<!--            <input-->
<!--                    type="text"-->
<!--                    class="forms__input--sociales"-->
<!--                    name="redes[instagram]"-->
<!--                    placeholder="Youtube"-->
<!--                    value="--><?php //echo $producto->instagram ?? ''; ?><!--"-->
<!--            >-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</fieldset>-->

<!--<fieldset class="forms__fieldset">-->
<!--    <legend class="forms__legend">Informacion Extra</legend>-->
<!--    <div class="forms__campo">-->
<!--        <div class="forms__contenedor-icono">-->
<!--            <div class="forms__icono">-->
<!--                <i class="fa-brands fa-facebook"></i>-->
<!--            </div>-->
<!--            <input -->
<!--                type="text"-->
<!--                class="forms__input--sociales"-->
<!--                name="redes[facebook]"-->
<!--                placeholder="Facebook"-->
<!--                value="--><?php //echo $producto->facebook ?? ''; ?><!--"-->
<!--            >-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="forms__campo">-->
<!--        <div class="forms__contenedor-icono">-->
<!--            <div class="forms__icono">-->
<!--                <i class="fa-brands fa-youtube"></i>-->
<!--            </div>-->
<!--            <input-->
<!--                    type="text"-->
<!--                    class="forms__input--sociales"-->
<!--                    name="redes[youtube]"-->
<!--                    placeholder="Youtube"-->
<!--                    value="--><?php //echo $producto->youtube ?? ''; ?><!--"-->
<!--            >-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="forms__campo">-->
<!--        <div class="forms__contenedor-icono">-->
<!--            <div class="forms__icono">-->
<!--                <i class="fa-brands fa-instagram"></i>-->
<!--            </div>-->
<!--            <input-->
<!--                    type="text"-->
<!--                    class="forms__input--sociales"-->
<!--                    name="redes[instagram]"-->
<!--                    placeholder="Youtube"-->
<!--                    value="--><?php //echo $producto->instagram ?? ''; ?><!--"-->
<!--            >-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</fieldset>-->