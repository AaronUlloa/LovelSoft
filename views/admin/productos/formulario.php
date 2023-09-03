<fieldset>
    <legend>Informacion del Producto</legend>
    <div class="forms__field">
        <label for="" class="forms__label">Titulo del Articulo</label>
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

    <div class="forms__field">
        <label for="" class="forms__label">Titulo del Articulo</label>
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

</fieldset>