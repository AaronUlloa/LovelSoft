<fieldset class="forms__fieldset">
    <legend class="forms__legend">Informacion del Producto</legend>
    <div class="forms__campo">
        <label for="articulo" class="forms__label">Titulo del Articulo</label>
        <input 
        type="text"
        class="forms__input"
        id="articulo"
        name="articulo"
        placeholder="Nombre del Articulo"
        required
        maxlength="50"
        value="<?php echo $producto->nombre ?? ''; ?>"
        >
    </div>

    <div class="forms__campo">
        <label for="code" class="forms__label">Codigo</label>
        <input 
        type="text"
        class="forms__input"
        id="code"
        name="code"
        placeholder="Codigo del Articulo"
        maxlength="50"
        value="<?php echo $producto->code ?? ''; ?>"
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
        min="1.00"
        required
        value="<?php echo $producto->code ?? ''; ?>"
        >
    </div>
    <div class="forms__campo">
        <label for="categoria" class="forms__label">Categoria</label>
        <select name="categoria" id="categoria" class="forms__input">
            <option value="">Casa</option>
            <option value="">Carros</option>
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
        <div id="tags" class="forms__listado">
            <input type="hidden" name="tags" value="<?php echo $producto->tags ?? ''; ?>">
        </div>
    </div>
</fieldset>

<fieldset class="forms__fieldset">
    <legend class="forms__legend">Informacion Extra</legend>
    <div class="forms__campo">
        <div class="forms__contenedor-icono">
            <div class="forms__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input 
                type="text"
                class="forms__input--sociales"
                name="redes[facebook]"
                placeholder="Facebook"
                value="<?php echo $producto->facebook ?? ''; ?>"
            >
        </div>
    </div>

    <div class="forms__campo">
        <div class="forms__contenedor-icono">
            <div class="forms__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input
                    type="text"
                    class="forms__input--sociales"
                    name="redes[youtube]"
                    placeholder="Youtube"
                    value="<?php echo $producto->youtube ?? ''; ?>"
            >
        </div>
    </div>
    <div class="forms__campo">
        <div class="forms__contenedor-icono">
            <div class="forms__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input
                    type="text"
                    class="forms__input--sociales"
                    name="redes[instagram]"
                    placeholder="Youtube"
                    value="<?php echo $producto->instagram ?? ''; ?>"
            >
        </div>
    </div>

</fieldset>