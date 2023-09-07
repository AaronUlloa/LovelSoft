<?php

namespace Model;

class Roles extends ActiveRecord
{

    protected static $tabla = 'rol';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'status'];

    public $id;
    public $nombre;
    public $descripcion;
    public $status;
}