<?php

namespace Controllers;

use Model\Categoria;
use Model\Producto;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class ProductosController
{
    public static function index(Router $router) {
        $productos = Producto::all();
        $router->render('admin/productos/index', [
            'title' => 'Panel de Productos',
            'productos' => $productos
        ]);
    }
    public static function crear(Router $router){
        $alertas = [];
        $categorias = Categoria::all('ASC');
        $producto = new Producto;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Leer imagen
            if(!empty($_FILES['imagen']['tmp_name'])) {

                $carpeta_imagenes = '../public/img/Articulos';

                // Crear la carpeta si no existe
                if(!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0777, true);
                }

                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $nombre_imagen = md5( uniqid( rand(), true) );

                $_POST['imagen'] = $nombre_imagen;
            }
            $producto->sincronizar($_POST);
            $alertas = $producto->validar();

            // Guardar el registro
            if(empty($alertas)) {

                // Guardar las imagenes
                $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . ".png" );
                $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . ".webp" );

                // Guardar en la BD
                $resultado = $producto->guardar();

                if($resultado) {
                    header('Location: /admin/productos');
                }
            }

        }
        $router->render('admin/productos/crear',[
            'title' => 'Agregar Producto',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'producto' => $producto
        ]);
    }
    public static function editar(Router $router) {
        $alertas = [];
        $categorias = Categoria::all('ASC');
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id) {
            header('Location: /admin/productos');
        }
        // Obtener Producto a Editar
        $producto = Producto::find($id);

        if(!$producto) {
            header('Location: /admin/productos');
        }

        $producto->imagen_actual = $producto->imagen;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(!empty($_FILES['imagen']['tmp_name'])) {

                $carpeta_imagenes = '../public/img/Articulos';

                // Crear la carpeta si no existe
                if(!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0755, true);
                }

                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $nombre_imagen = md5( uniqid( rand(), true) );

                $_POST['imagen'] = $nombre_imagen;
            } else {
                $_POST['imagen'] = $producto->imagen_actual;
            }
            $producto->sincronizar($_POST);

            $alertas = $producto->validar();

            if(empty($alertas)) {
                if(isset($nombre_imagen)) {
                    $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . ".png" );
                    $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . ".webp" );
                }
                $resultado = $producto->guardar();
                if($resultado) {
                    header('Location: /admin/productos');
                }
            }

        }

        $router->render('admin/productos/editar', [
            'title' => 'Actualizar Producto',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'producto' => $producto
        ]);

    }

}