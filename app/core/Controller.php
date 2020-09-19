<?php 
/**
 * Controller osztály váz.
 */
class Controller
{

    var $vars = [];
    var $layout = "index";

    /**
     * Adatátvitel view-ok között.
     */
    function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }

    /**
     * View kirajzolása.
     * 
     * @param - alapértelmezetten a view mappába keres.
     * Ha a megjelenítendő view egy almappába van akkor az view/almappa/view.php a helyes elérési út.
     */
    function view($filename)
    {
        extract($this->vars);
        
        ob_start();
            require(ROOT . "view/" . $filename . '.php');
        ob_end_flush();
    }
}

?>