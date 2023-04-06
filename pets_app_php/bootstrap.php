<?php 
spl_autoload_register(function ($class_name) {
    require_once __DIR__ . '/src/' . str_replace('\\', '/', $class_name) . '.php';
});