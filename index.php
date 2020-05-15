<?php
/*
 * 1 => Install php 7.2
 * 2 => Install Composer
 * 3 => Descargar Git
 * 4 => En terminal(cmd) ir al directorio de descarga y ejecutar comando composer install
 * 5 => Colocar los datos de conexión en la lina 12
 * 6 => Crear base de dato y tabla user con columna id y name
 * 7 => usar componente Wizdler de google chrome para pruebas.
 * 8 => en terminal en el directorio del proyecto ejecutar comando php -S localhost:8000
 * 9 => Navegador ingresar a la url del localhost:8000
 */
use Illuminate\Database\Eloquent\Model;

require 'vendor/autoload.php';
$config = [
    'settings' => [
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'test',
            'username' => 'root',
            'password' => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($config['settings']['db']);

$capsule->setAsGlobal();
$capsule->bootEloquent();

include_once "src/soapserver.php";


