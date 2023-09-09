<?php

namespace Controllers;

use Model\Usuario;
use Model\Roles;
use MVC\Router;
use Model\Producto;
use Model\Categoria;

class PaginasController {
    public static function index(Router $router) {

        $productos = Producto::ordenar('categoria_id', 'ASC');

        $articulos_formateados = [];
        foreach($productos as $producto) {
            $producto->categoria = Categoria::find($producto->categoria_id);

            if($producto->dia_id === "1" && $producto->categoria_id === "1") {
                $articulos_formateados['conferencias_v'][] = $producto;
            }

            if($producto->dia_id === "2" && $producto->categoria_id === "1") {
                $articulos_formateados['conferencias_s'][] = $producto;
            }

            if($producto->dia_id === "1" && $producto->categoria_id === "2") {
                $articulos_formateados['workshops_v'][] = $producto;
            }

            if($producto->dia_id === "2" && $producto->categoria_id === "2") {
                $articulos_formateados['workshops_s'][] = $producto;
            }
        }

        // Obtener el total de cada bloque
        $ponentes_total = Ponente::total();
        $conferencias_total = Evento::total('categoria_id', 1);
        $workshops_total = Evento::total('categoria_id', 2);

        // Obtener todos los ponentes
        $ponentes = Ponente::all();

        $router->render('paginas/index', [
            'titulo' => 'Inicio',
            'articulos' => $articulos_formateados,
            'ponentes_total' => $ponentes_total,
            'conferencias_total' => $conferencias_total,
            'workshops_total' => $workshops_total,
            'ponentes' => $ponentes
        ]);
    }
    public static function evento(Router $router) {

        $router->render('paginas/devwebcamp', [
            'titulo' => 'Sobre DevWebCamp'
        ]);
    }

    public static function paquetes(Router $router) {

        $router->render('paginas/paquetes', [
            'titulo' => 'Paquetes DevWebCamp'
        ]);
    }

    public static function conferencias(Router $router) {

        $productos = Evento::ordenar('hora_id', 'ASC');

        $articulos_formateados = [];
        foreach($productos as $producto) {
            $producto->categoria = Categoria::find($producto->categoria_id);
            $producto->dia = Dia::find($producto->dia_id);
            $producto->hora = Hora::find($producto->hora_id);
            $producto->ponente = Ponente::find($producto->ponente_id);

            if($producto->dia_id === "1" && $producto->categoria_id === "1") {
                $articulos_formateados['conferencias_v'][] = $producto;
            }

            if($producto->dia_id === "2" && $producto->categoria_id === "1") {
                $articulos_formateados['conferencias_s'][] = $producto;
            }

            if($producto->dia_id === "1" && $producto->categoria_id === "2") {
                $articulos_formateados['workshops_v'][] = $producto;
            }

            if($producto->dia_id === "2" && $producto->categoria_id === "2") {
                $articulos_formateados['workshops_s'][] = $producto;
            }
        }


        $router->render('paginas/conferencias', [
            'titulo' => 'Conferencias & Workshops',
            'eventos' => $articulos_formateados
        ]);
    }

    public static function error(Router $router) {

        $router->render('paginas/error', [
            'titulo' => 'Página no encontrada'
        ]);
    }
}