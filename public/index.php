<?php
    
    use App\Core\View\Template;
    use App\Helpers\Pdf;

    // somewhere early in your project's loading, require the Composer autoloader
    // see: http://getcomposer.org/doc/00-intro.md
    require '../vendor/autoload.php';

    $data = array(
        'name' => 'Daniel Rodiguez',
        'title' => 'Generacion de pdf desde php'
    );
    
    $html = Template::render('pdf/certificate', $data);
    
    Pdf::render('certificate', $html);