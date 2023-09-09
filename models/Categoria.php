<?php

namespace Model;

class Categoria extends ActiveRecord
{

    protected static $tabla = 'categoria';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'imagen', 'status'];

    public function __construct($args=[])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imegen = $args['imagen'] ?? '';
        $this->status = $args['status'] ?? 1;
    }

    public function validar()
    {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->descripcion) {
            self::$alertas['error'][] = 'Agregue una pequeña Descripcion de la Categoria';
        }
        if(!$this->imagen) {
            self::$alertas['error'][] = 'La imagen es obligatoria';
        }
        return self::$alertas;
    }
}