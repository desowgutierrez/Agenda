<?php

class Autoloader
{
    public function register(string $class)
    {
        $config = include './src/config/.config.php';
        $file = "{$config['app']}src/controller/{$class}Controller.php";

        if (file_exists($file)) {
            require $file;
            return true;
        }
        
        return false;
    }
}