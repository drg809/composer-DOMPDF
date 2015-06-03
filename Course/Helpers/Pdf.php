<?php namespace App\Helpers;

use DOMPDF;

Class Pdf {
    
    protected static $configured = false;
    
    public static function configure()
    {
        if (static::$configured) return;
        define('DOMPDF_ENABLE_AUTOLOAD', false);

        require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';

      static::$configured = true;
    }
    
    public static function render($file, $html)
    {
        static::configure();
      
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("$file.pdf");

    }
}