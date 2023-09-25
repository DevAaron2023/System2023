<?php

    class Errores extends Controllers
    {
        function __construct(){
            parent::__construct();
        }

        function notFound(){
            $this->views->getView($this,"errores");
        }
    }

    $notFound = new Errores();
    $notFound->notFound(); 
?>