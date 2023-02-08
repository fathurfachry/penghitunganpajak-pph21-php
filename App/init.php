<?php


spl_autoload_register(function ($class) {

    //$class  = App/Produk/User
    $class  = explode('\\', $class);
    $class = end($class);

    require_once __DIR__ . '/Calculate/' . $class . '.php';
    
});
