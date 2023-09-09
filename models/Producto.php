<?php

namespace Model;

class Producto extends ActiveRecord
{

    protected static $tabla = 'producto';
    protected static $columnasDB = ['id', 'categoria_id', 'codigo', 'nombre', 'descripcion', 'precio', 'stock', 'imagen', 'tags', 'status'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->categoria_id = $args['categoria_id'] ?? '';
        $this->codigo = $args['codigo'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->stock = $args['stock'] ?? '';
        $this->imagen = $args['imagen'] ?? 0;
        $this->tags = $args['tags'] ?? '';
        $this->status = $args['status'] ?? 1;
    }
    // Mensajes de validación para la creación de un evento
    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->descripcion) {
            self::$alertas['error'][] = 'La descripción es Obligatoria';
        }
        if(!$this->categoria_id  || !filter_var($this->categoria_id, FILTER_VALIDATE_INT)) {
            self::$alertas['error'][] = 'Elige una Categoría';
        }
        if(!$this->codigo) {
            self::$alertas['error'][] = 'Ingrese el Codigo del Articulo';
        }
        if(!$this->precio) {
            self::$alertas['error'][] = 'Determine el Precio del Articulo';
        }
        if(!$this->imagen) {
            self::$alertas['error'][] = 'La imagen es obligatoria';
        }
        if(!$this->tags) {
            self::$alertas['error'][] = 'El Campo áreas es obligatorio';
        }
        return self::$alertas;
    }
}