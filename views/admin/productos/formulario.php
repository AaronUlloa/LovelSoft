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

</fieldset>