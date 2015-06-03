<?php namespace App\Core\View;

class Template{
    
    public static function render($file, array $data = array())
    {
        ob_start();
        extract($data);
        include '../templates/'.$file.'.php';
        return ob_get_clean();
    }
}