<?php

namespace Model;

class Producto extends ActiveRecord{
    public static $tabla = 'productos';
    public static $columnasDB = ['producto_nombre','producto_precio','producto_situacion'];
    public static $idTabla = 'producto_id';

    public $producto_id;
    public $producto_nombre;
    public $producto_precio;
    public $producto_situacion;

    public function __construct($args =[])
    {
        $this->producto_id = $args['producto_id'] ?? null;
        $this->producto_nombre = $args['producto_nombre'] ?? '';
        $this->producto_precio = $args['producto_precio'] ?? '';
        $this->producto_situacion = $args['producto_situacion'] ?? '1';
    }

}